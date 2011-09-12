window.log=function(){log.history=log.history||[];log.history.push(arguments);if(this.console){arguments.callee=arguments.callee.caller;var a=[].slice.call(arguments);(typeof console.log==="object"?log.apply.call(console.log,console,a):console.log.apply(console,a))}};
(function(b){function c(){}for(var d="assert,clear,count,debug,dir,dirxml,error,exception,firebug,group,groupCollapsed,groupEnd,info,log,memoryProfile,memoryProfileEnd,profile,profileEnd,table,time,timeEnd,timeStamp,trace,warn".split(","),a;a=d.pop();){b[a]=b[a]||c}})((function(){try
{console.log();return window.console;}catch(err){return window.console={};}})());
// place any jQuery/helper plugins in here, instead of separate, slower script files.


var aria = [
    'article | role | article',
    'aside | role | complementary',
    'nav | role | navigation',
    'output | aria-live | polite',
    'section | role | region',
    '[required] | aria-required | true'
];

aria.forEach(function(value, index) {
    var ariarow = value.split(' | ');
    var elm = document.querySelector(ariarow[0])
    if (elm) {
        elm.setAttribute(ariarow[1], ariarow[2]);
    }
});