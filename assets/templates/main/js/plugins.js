// console log
window.log=function(){log.history=log.history||[];log.history.push(arguments);if(this.console){arguments.callee=arguments.callee.caller;var a=[].slice.call(arguments);(typeof console.log==="object"?log.apply.call(console.log,console,a):console.log.apply(console,a))}};
(function(b){function c(){}for(var d="assert,clear,count,debug,dir,dirxml,error,exception,firebug,group,groupCollapsed,groupEnd,info,log,memoryProfile,memoryProfileEnd,profile,profileEnd,table,time,timeEnd,timeStamp,trace,warn".split(","),a;a=d.pop();){b[a]=b[a]||c}})((function(){try
{console.log();return window.console;}catch(err){return window.console={};}})());
// accessify.js from @yatil
var AccessifyHTML5=function(g){if(document.querySelectorAll){var c={article:{role:"article"},aside:{role:"complementary"},nav:{role:"navigation"},output:{"aria-live":"polite"},section:{role:"region"},"[required]":{"aria-required":"true"}};if(g){if(g.header){c[g.header]={role:"banner"}}if(g.footer){c[g.footer]={role:"contentinfo"}}}for(fix in c){var b=document.querySelectorAll(fix),f=c[fix],a,e,d=0;for(key in f){a=key;e=f[key]}for(d;d<b.length;d++){b[d].setAttribute(a,e)}}}};
//////////////////////////
// place any jQuery/helper plugins in here, instead of separate, slower script files.