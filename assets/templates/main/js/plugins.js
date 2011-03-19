// usage: log('inside coolFunc', this, arguments);
// paulirish.com/2009/log-a-lightweight-wrapper-for-consolelog/
window.log = function(){
  log.history = log.history || [];  
  log.history.push(arguments);
  arguments.callee = arguments.callee.caller;  
  if(this.console) console.log( Array.prototype.slice.call(arguments) );
};
(function(b){function c(){}for(var d="assert,count,debug,dir,dirxml,error,exception,group,groupCollapsed,groupEnd,info,log,markTimeline,profile,profileEnd,time,timeEnd,trace,warn".split(","),a;a=d.pop();)b[a]=b[a]||c})(window.console=window.console||{});

// place any jQuery/helper plugins in here, instead of separate, slower script files.

/*
 * Accessifyhtml5.js
 * Adds ARIA to new elements in browsers which don't do it by themselves.
 * Just drop into the bottom of your web page:
 * <script src="accessifyhtml5.js"></script>
 * 
 * Yes, it depends on jQuery.
 *
 * Souce: http://www.html5accessibility.com/index-aria.html
 *
 * Todo: Extend Script for other elements, probably even play with fallback JS for inaccessible audio/video.
 *
 * Acknowledgements: 
 * - @stevefaulkner for his work exploring html5 a11y,
 * - @paddya91 for object notation & document ready
 * - @ginader for reporting typo
 * - @webaxe for reporting an error
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