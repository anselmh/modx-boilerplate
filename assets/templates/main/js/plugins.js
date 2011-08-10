window.log=function(){log.history=log.history||[];log.history.push(arguments);if(this.console){arguments.callee=arguments.callee.caller;var a=[].slice.call(arguments);(typeof console.log==="object"?log.apply.call(console.log,console,a):console.log.apply(console,a))}};
(function(b){function c(){}for(var d="assert,count,debug,dir,dirxml,error,exception,group,groupCollapsed,groupEnd,info,log,timeStamp,profile,profileEnd,time,timeEnd,trace,warn".split(","),a;a=d.pop();){b[a]=b[a]||c}})((function(){try
{console.log();return window.console;}catch(err){return window.console={};}})());
// place any jQuery/helper plugins in here, instead of separate, slower script files.

/*
 * Accessifyhtml5.js - adds ARIA to new elements in browsers which don't do it by themselves.
 * Depends on jQuery.
 * Source: http://www.html5accessibility.com/index-aria.html
*/
$(document).ready(function() {
	var fixes = {
        'header.site'   : { 'role':          'banner'        },
        'footer.site'   : { 'role':          'contentinfo'   },
        'article'       : { 'role':          'article'       },
        'aside'         : { 'role':          'complementary' },
        'nav'           : { 'role':          'navigation'    },
        'output'        : { 'aria-live':     'polite'        },
        'section'       : { 'role':          'region'        },
        '[required]'    : { 'aria-required': 'true'          }
    };
    $.each(fixes,
        function(index, item) {
            $(index).attr(item);
        }
    );   
});