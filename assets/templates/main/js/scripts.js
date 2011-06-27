// load all inline scripts here

// if you have analytics, set them in pagevisibility mode to get real-user-trackig according to prerender-issues in Chrome/WebKit.
var viewCounted = false;
function handleVisibilityChange(evt) {
  //Only count the view once we're done prerendering AND the document is done loading
  if (document.webkitVisibilityState == 'prerender'
      || document.readyState != 'complete' || viewCounted)
    return;
	/* Implementation of view counting system starts here */
 
	// Code for Google Analytics | Change UA-XXXXX-X to be your site's ID
	var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview'],['_trackPageLoadTime']];
		(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
		g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
		s.parentNode.insertBefore(g,s)}(document,'script'));
	
	/* Implementation of view counting system ends here */
	viewCounted = true;
}
//We'll call checkCountView on load no matter what.
window.addEventListener('load', handleVisibilityChange, false);
if (document.webkitVisibilityState == 'prerender') {
  document.addEventListener('webkitvisibilitychange', handleVisibilityChange, false);
}


//Code for Facebook XBML implementation. Cut off if not needed. Please paste your own App-ID at 'AppID' to get it working
window.fbAsyncInit = function() {
	FB.init({appId: 'AppID', status: true, cookie: true,
	xfbml: true});
};
(function() {
	var e = document.createElement('script'); e.async = true;
	e.src = document.location.protocol +
	'//connect.facebook.net/en_US/all.js';
	document.getElementById('fb-root').appendChild(e);
}());