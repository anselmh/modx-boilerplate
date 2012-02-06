// usage: log('inside coolFunc', this, arguments);
// paulirish.com/2009/log-a-lightweight-wrapper-for-consolelog/
window.log = function f(){ log.history = log.history || []; log.history.push(arguments); if(this.console) { var args = arguments, newarr; args.callee = args.callee.caller; newarr = [].slice.call(args); if (typeof console.log === 'object') log.apply.call(console.log, console, newarr); else console.log.apply(console, newarr);}};

// make it safe to use console.log always
(function(a){function b(){}for(var c="assert,count,debug,dir,dirxml,error,exception,group,groupCollapsed,groupEnd,info,log,markTimeline,profile,profileEnd,time,timeEnd,trace,warn".split(","),d;!!(d=c.pop());){a[d]=a[d]||b;}})
(function(){try{console.log();return window.console;}catch(a){return (window.console={});}}());

/* Accessifyhtml5.js | Source: https://github.com/yatil/accessifyhtml5.js */
var AccessifyHTML5=function(b){if(document.querySelectorAll){var g={article:{role:"article"},aside:{role:"complementary"},nav:{role:"navigation"},output:{"aria-live":"polite"},section:{role:"region"},"[required]":{"aria-required":"true"}};if(b){if(b.header){g[b.header]={role:"banner"}}if(b.footer){g[b.footer]={role:"contentinfo"}}if(b.main){g[b.main]={role:"main"}}}for(var e in g){var a=document.querySelectorAll(e),d=g[e],f,h,j,c=0;for(j in d){f=j;h=d[j]}for(c;c<a.length;c++){if(!a[c].hasAttribute(f)){a[c].setAttribute(f,h)}}}}};

// place any jQuery/helper plugins in here, instead of separate, slower script files.
