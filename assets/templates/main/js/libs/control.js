/*
Copyright 2010 Google Inc.

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

     http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
*/

/*******************************************************************************
ControlJS - a JavaScript module for loading scripts faster.
  - home page: http://stevesouders.com/controljs/
  - code project: http://code.google.com/p/controljs/
  - discussion list: http://groups.google.com/group/controljs
*******************************************************************************/

var CJS = CJS || {};

CJS.start = function() {
	CJS.init();

	// Find all the script DOM elements that have been modified for ControlJS.
	CJS.findScripts();

	// Start scripts downloading in the background ASAP.
	CJS.downloadScripts();

	// Process scripts now or later depending on the defer setting.
	if ( CJS.defer ) {
		// It's possible that window.onload already fired, in which case we
		// need to kickoff processScripts immediately.
		if ( "undefined" != typeof(document.readyState) && "complete" === document.readyState ) {
			CJS.processScripts();
		}
		else {
			CJS.addHandler(window, 'load', CJS.processScripts);
		}
	}
	else {
		// TODO - We need to add a mechanism to do multiple passes before
		// we support calling processScripts before the DOM is complete.
		alert("Immediate processing is not currently supported.");
		CJS.processScripts();
	}
};


// Find all scripts with a "text/cjs" type.
CJS.findScripts = function() {
	var aScripts = document.getElementsByTagName('script');
	var len = aScripts.length;
	for ( var i = 0; i < len; i++ ) {
		var script = aScripts[i];
		if ( "text/cjs" === CJS.getAttribute(script, "type") && "undefined" === typeof(script.cjsfound) ) {
			CJS.aScripts[CJS.aScripts.length] = script;
			script.cjsfound = true;  // mark the script as found so we can do a second pass later
		}
	}
	//CJS.dprint("found " + CJS.aScripts.length + " CJS scripts");
};


// 
// DOWNLOAD PHASE
//

// Find all scripts with a "data-cjssrc" attribute.
CJS.downloadScripts = function() {
	var len = CJS.aScripts.length;
	for ( var i = 0; i < len; i++ ) {
		var script = CJS.aScripts[i];
		var src = CJS.getAttribute(script, "data-cjssrc") || CJS.getAttribute(script, "cjssrc"); // backward compatible to earlier "cjssrc" attribute
		if ( src ) {
			CJS.downloadScript(src);
		}
	}
};


// Download a script in such a way that it's not executed immediately.
CJS.downloadScript = function(url) {
	CJS.dprint("downloading " + url);

	if ( CJS.bIE || CJS.bOpera ) {
		CJS.downloadScriptImage(url);
	}
	else {
		CJS.downloadScriptObject(url);
	}
};


// Download a script as an image.
// This puts it in the browser's cache, but doesn't execute it.
CJS.downloadScriptImage = function(url) {
	var img = new Image();
	img.onload = function() { CJS.onloadCallback(url); };
	img.onerror = function() { CJS.onloadCallback(url); }; // Chrome does onerror (not onload).
	img.src = url;
};


// Download a script as an object.
// This puts it in the browser's cache, but doesn't execute it.
// Based on http://www.phpied.com/preload-cssjavascript-without-execution/
CJS.downloadScriptObject = function(url) {
	if ( "undefined" === typeof(document.body) || ! document.body ) {
		// we need body for appending objects
		setTimeout("CJS.downloadScriptObject('" + url + "')", 50);
		return;
	}

	var obj = document.createElement('object');
	obj.data = url;
	obj.width  = 0;
	obj.height = 0;
	obj.onload = function() { CJS.onloadCallback(url); };
	obj.onerror = function() { CJS.onloadCallback(url); };
	//CJS.dprint("downloadScriptObject: appending " + url);
	document.body.appendChild(obj);
};


CJS.onloadCallback = function(url) {
	//CJS.dprint("onloadCallback: " + url);
	CJS.hLoaded[url] = true;
};


CJS.execCallback = function(url) {
	CJS.dprint("execCallback: " + url);

	if ( 0 === CJS.aExecs.length ) {
		CJS.dprint("ERROR: We finished executing a script but the exec queue is empty: " + url);
		return;
	}

	if ( url == CJS.aExecs[0][0] ) {
		CJS.aExecs.splice(0, 1);  // remove leading URL
	}
	else {
		CJS.dprint("ERROR: We finished executing a script that wasn't on the queue: " + url);
	}

	if ( CJS.aExecs.length ) {
		// execute the next script on the queue
		CJS.execScript(CJS.aExecs[0][0], CJS.aExecs[0][1]);
	}
};





// 
// EXECUTION PHASE
//

CJS.processScripts = function() {
	CJS.processNextScript();
};


CJS.processNextScript = function() {
	//CJS.dprint("processNextScript: enter");
	if ( CJS.aScripts.length ) {
		var script = CJS.aScripts[0];
		CJS.curScript = script;  // for docwrite

		var src = CJS.getAttribute(script, "data-cjssrc") || CJS.getAttribute(script, "cjssrc"); // backward compatible to earlier "cjssrc" attribute
		var cjsexec = CJS.getAttribute(script, "data-cjsexec") || CJS.getAttribute(script, "cjsexec"); // backward compatible to earlier "cjsexec" attribute
		if ( src ) {
			// External Script
			if ( "false" === cjsexec ) {
				CJS.aScripts.splice(0, 1);   // remove leading script
				setTimeout(CJS.processNextScript, 0);
			}
			else if ( CJS.hLoaded[src] ) {
				// Done downloading.
				CJS.processExternalScript(script, CJS.processNextScript);
				CJS.aScripts.splice(0, 1);   // remove leading script
				// Race condition! Need to call processNextScript from the onload handler 
				// of the script added down inside processExternalScript. (Notice the 
				// callback added above when calling processExternalScript.)
				//setTimeout(CJS.processNextScript, 0);
			}
			else {
				// Still downloading.
				CJS.dprint("processNextScript: waiting for script " + src);
				if ( "undefined" === typeof(script.startwait) ) {
					script.startwait = Number(new Date());  // start time
				}
				var delta = Number(new Date()) - script.startwait;
				if ( delta < CJS.maxWait ) {
					// try again
					setTimeout(CJS.processNextScript, CJS.waitival);
				}
				else {
					// bail
					alert("There was an error loading script: " + src);
				}
			}
		}
		else {
			// Inline Script
			CJS.processInlineScript(script);
			CJS.aScripts.splice(0, 1);   // remove leading script
			setTimeout(CJS.processNextScript, 0);
		}

		return;
	}

	// Do a 2nd pass looking for CJS scripts. 
	// Because control.js loads async, it's possible for findScripts to be
	// be called before all SCRIPT tags have been created.
	CJS.findScripts();
	if ( CJS.aScripts.length ) {
		CJS.downloadScripts();
		setTimeout(CJS.processNextScript, 0);
		return;
	}

	// restore the original document.write function definition
	document.write = CJS.docwriteOrig;

	CJS.dprint("DONE processing scripts");

	/*
	TODO - We can try something like this to re-fire the window load event.
	var eventObj = document.createEvent("HTMLEvents");
	eventObj.initEvent("load", true, true);
	window.dispatchEvent(eventObj);
    */
};


// Eval the code in an inlined script.
CJS.processInlineScript = function(script) {
	//CJS.dprint("processInlineScript: enter");
	CJS.curScript = script;  // for docwrite

	var code = script.text;
	CJS.dprint("processInlineScript: processing script code: " + code.substring(0, 64));
	CJS.eval(code);
};


// If downloaded then add the external script as a real script DOM element.
CJS.processExternalScript = function(script, callback) {
	//CJS.dprint("processExternalScript: enter");

	var src = CJS.getAttribute(script, "data-cjssrc") || CJS.getAttribute(script, "cjssrc"); // backward compatible to earlier "cjssrc" attribute
	CJS.dprint("processExternalScript: processing script " + src);
	CJS.execScript(src, callback);
};


// Insert a script DOM element.
// Presumably the src has already been downloaded and is in the cache.
CJS.execScript = function(src, onload) {
	CJS.dprint("execScript: " + src);

	if ( 0 === CJS.aExecs.length ) {
		// Add this to the queue and continue on to execute it.
		CJS.aExecs[CJS.aExecs.length] = [src, onload];
	}
	else if ( src != CJS.aExecs[0][0] ) {
		// If there's an execution queue and this SRC isn't first, try later.
		CJS.dprint("execScript: queueing for later: " + src);
		CJS.aExecs[CJS.aExecs.length] = [src, onload];
		return;
	}

	// convert the onload parameter from function or string into a function
	var fonload = ( function(ponload) {
		switch ( typeof(ponload) ) { 
			case "string": 
			  ponload = new Function(ponload);
			  break;	 
			case "function": 
			  // ponload is already a function
			  break; 
			default: 
			  ponload = new Function();
		}
		return ponload;
		
	})(onload);

	// single function that works with onload and onreadystatechange
	var func = function() {
		if ( this.readyState && this.readyState != "complete" && this.readyState != "loaded" ) {
			return; 
		}
		CJS.execCallback(src); 
		this.onload = this.onreadystatechange = null; // ensure callback is only called once
		fonload(); 
	};

	// Add a SCRIPT element pointing to the (already cached) src so the JS gets executed.
	var se = document.createElement('script');
	se.onload = se.onreadystatechange = func;  // set this BEFORE setting .src
	se.src = src;
	var s1 = document.getElementsByTagName('script')[0];
	s1.parentNode.insertBefore(se, s1);
};


// Eval a string of JavaScript in the proper context.
CJS.eval = function(code) {
	//CJS.dprint("evaling: " + code.substring(0, 64));

	if (window.execScript) {
		window.execScript(code);
	}
	else {
		var fn = function() {
			window.eval.call(window, code);
		};
		fn();
	}

	//CJS.dprint("eval exit");
};






// 
// UTILITY FUNCTIONS
//

CJS.init = function() {
	CJS.bInited = true;  // don't init twice

	// If defer is true then scripts aren't loaded until the onload event.
	CJS.defer = ( "undefined" === typeof(CJS.defer) ? true : CJS.defer );

	CJS.aScripts = [];  // array of CJS script DOM elements 
	CJS.hLoaded = {};   // hash of script URLs that have loaded
	CJS.aExecs = [];    // array of script URLs to execute

	CJS.bIE = ( -1 != navigator.userAgent.indexOf('MSIE') );
	CJS.bChrome = ( -1 != navigator.userAgent.indexOf('Chrome/') );
	CJS.bOpera = ( -1 != navigator.userAgent.indexOf('Opera') );

	CJS.curScript = null; // for document.write

	CJS.maxWait = 5000;  // maximum number of milliseconds to wait for a script to download
	CJS.waitival = 200;  // number of milliseconds to wait between retries of looking for external script download

	CJS.docwriteOrig = document.write;  // keep a reference to the original function
	document.write = CJS.docwrite;      // override document.write
};


// Return the URL of the script that has been converted to CJS.
CJS.getAttribute = function(elem, name) {
	var attrs = elem.attributes;
	var len = attrs.length;
	for ( var i = 0; i < len; i++ ) {
		var attr = attrs[i];
		if ( name === attr.nodeName ) {
			return attr.nodeValue;
		}
	}

	return undefined;
};


// Wrapper for addEventListener and attachEvent.
CJS.addHandler = function(elem, sType, fn, capture) {
	capture = (capture) ? true : false;
	if (elem.addEventListener) {
		elem.addEventListener(sType, fn, capture);
	}
	else if (elem.attachEvent) {
		elem.attachEvent("on" + sType, fn);
	}
	else {
		// Netscape 4
		if ( elem["on" + sType] ) {
			// Do nothing - we don't want to overwrite an existing handler.
		}
		else {
			elem["on" + sType] = fn;
		}
	}
};


// Dynamically define dprint debug logging function.
if ( "undefined" != typeof(console) && "undefined" != typeof(console.log) ) {
	CJS.dprint = function(msg) {
		console.log("CJS " + Number(new Date()) + ": " + msg);
	};
}
else {
	CJS.dprint = function(msg) { };
	/*
	var gDprint = "";
	CJS.dprint = function(msg) {
		var div = document.getElementById('dprint');
		if ( ! div ) {
			if ( ! document.body ) {
				gDprint = msg + "<br>" + gDprint;
				return;
			}
			div = document.createElement('div');
			div.id = "dprint";
			document.body.appendChild(div);
			div.style.cssText = "border: 2px solid #999; width: 700px; height: 600px; position: fixed; top: 20px; right: 20px; padding: 8px; background: #FFF; font-size: 10px;";
			div.innerHTML += gDprint;
		}

		div.innerHTML = msg + "<br>" + div.innerHTML;
	};
	*/
};


//
// Override document.write
// 

// Attempt to handle document.write. Doesn't work well if the 
// document.write occurs in the HEAD or if it outputs a SCRIPT tag.
CJS.docwrite = function(text) {
	if ( CJS.curScript ) {
		if ( ! CJS.curScript.docwriteTarget ) {
			CJS.curScript.docwriteTarget = document.createElement('span');
			CJS.curScript.parentNode.insertBefore(CJS.curScript.docwriteTarget, CJS.curScript);
		}

		var i1 = text.indexOf("<script");
		if ( -1 === i1 ) {
			// no scripts
			CJS.dprint("docwrite: " + text.substring(0, 64));
			CJS.curScript.docwriteTarget.innerHTML += text;
		}
		else {
			// script tag
			var i2 = text.indexOf("<\/script>", i1) + 9;
			if ( -1 != i2 ) {
				var textBefore = text.substring(0, i1);
				var textScript = text.substring(i1, i2);
				var textAfter = text.substring(i2+1);

				if ( textBefore ) {
					CJS.dprint("docwrite: " + textBefore.substring(0, 64));
					CJS.curScript.docwriteTarget.innerHTML += textBefore + textAfter;
				}

				CJS.docwriteScript(textScript);
			}
		}
	}
	else {
		CJS.dprint("ERROR: There's a problem with the async override of document.write.");
	}
};


// Insert a SCRIPT element found during document.write.
CJS.docwriteScript = function(textScript) {
	// extract SRC from script docwrite and insert dynamically
	var aMatches = textScript.match(/src='([^']*)/i) ||
                   textScript.match(/src="([^"]*)/i) ||
                   textScript.match(/src=([^ >]*)/i);

	if ( aMatches ) {
		var url = aMatches[1];
		CJS.dprint("docwriteScript url = " + url);
		var se = document.createElement('script');
		se.src = url;
		document.body.appendChild(se);
	}
    else {
	    // TODO - handle inline SCRIPT code
	}
};



CJS.start();
