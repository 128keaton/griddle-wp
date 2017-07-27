/* jshint ignore:start */
/*! modernizr 3.5.0 (Custom Build) | MIT *
 * https://modernizr.com/download/?-cssgrid_cssgridlegacy-webp-setclasses !*/
!function(e,n,t){function r(e,n){return typeof e===n}function o(){var e,n,t,o,i,s,a;for(var l in w)if(w.hasOwnProperty(l)){if(e=[],n=w[l],n.name&&(e.push(n.name.toLowerCase()),n.options&&n.options.aliases&&n.options.aliases.length))for(t=0;t<n.options.aliases.length;t++)e.push(n.options.aliases[t].toLowerCase());for(o=r(n.fn,"function")?n.fn():n.fn,i=0;i<e.length;i++)s=e[i],a=s.split("."),1===a.length?Modernizr[a[0]]=o:(!Modernizr[a[0]]||Modernizr[a[0]]instanceof Boolean||(Modernizr[a[0]]=new Boolean(Modernizr[a[0]])),Modernizr[a[0]][a[1]]=o),C.push((o?"":"no-")+a.join("-"))}}function i(e){var n=b.className,t=Modernizr._config.classPrefix||"";if(S&&(n=n.baseVal),Modernizr._config.enableJSClass){var r=new RegExp("(^|\\s)"+t+"no-js(\\s|$)");n=n.replace(r,"$1"+t+"js$2")}Modernizr._config.enableClasses&&(n+=" "+t+e.join(" "+t),S?b.className.baseVal=n:b.className=n)}function s(e,n){return!!~(""+e).indexOf(n)}function a(){return"function"!=typeof n.createElement?n.createElement(arguments[0]):S?n.createElementNS.call(n,"http://www.w3.org/2000/svg",arguments[0]):n.createElement.apply(n,arguments)}function l(){var e=n.body;return e||(e=a(S?"svg":"body"),e.fake=!0),e}function A(e,t,r,o){var i,s,A,u,f="modernizr",c=a("div"),d=l();if(parseInt(r,10))for(;r--;)A=a("div"),A.id=o?o[r]:f+(r+1),c.appendChild(A);return i=a("style"),i.type="text/css",i.id="s"+f,(d.fake?d:c).appendChild(i),d.appendChild(c),i.styleSheet?i.styleSheet.cssText=e:i.appendChild(n.createTextNode(e)),c.id=f,d.fake&&(d.style.background="",d.style.overflow="hidden",u=b.style.overflow,b.style.overflow="hidden",b.appendChild(d)),s=t(c,e),d.fake?(d.parentNode.removeChild(d),b.style.overflow=u,b.offsetHeight):c.parentNode.removeChild(c),!!s}function u(e){return e.replace(/([A-Z])/g,function(e,n){return"-"+n.toLowerCase()}).replace(/^ms-/,"-ms-")}function f(n,t,r){var o;if("getComputedStyle"in e){o=getComputedStyle.call(e,n,t);var i=e.console;if(null!==o)r&&(o=o.getPropertyValue(r));else if(i){var s=i.error?"error":"log";i[s].call(i,"getComputedStyle returning null, its possible modernizr test results are inaccurate")}}else o=!t&&n.currentStyle&&n.currentStyle[r];return o}function c(n,r){var o=n.length;if("CSS"in e&&"supports"in e.CSS){for(;o--;)if(e.CSS.supports(u(n[o]),r))return!0;return!1}if("CSSSupportsRule"in e){for(var i=[];o--;)i.push("("+u(n[o])+":"+r+")");return i=i.join(" or "),A("@supports ("+i+") { #modernizr { position: absolute; } }",function(e){return"absolute"==f(e,null,"position")})}return t}function d(e){return e.replace(/([a-z])-([a-z])/g,function(e,n,t){return n+t.toUpperCase()}).replace(/^-/,"")}function p(e,n,o,i){function l(){u&&(delete T.style,delete T.modElem)}if(i=r(i,"undefined")?!1:i,!r(o,"undefined")){var A=c(e,o);if(!r(A,"undefined"))return A}for(var u,f,p,m,g,h=["modernizr","tspan","samp"];!T.style&&h.length;)u=!0,T.modElem=a(h.shift()),T.style=T.modElem.style;for(p=e.length,f=0;p>f;f++)if(m=e[f],g=T.style[m],s(m,"-")&&(m=d(m)),T.style[m]!==t){if(i||r(o,"undefined"))return l(),"pfx"==n?m:!0;try{T.style[m]=o}catch(v){}if(T.style[m]!=g)return l(),"pfx"==n?m:!0}return l(),!1}function m(e,n){return function(){return e.apply(n,arguments)}}function g(e,n,t){var o;for(var i in e)if(e[i]in n)return t===!1?e[i]:(o=n[e[i]],r(o,"function")?m(o,t||n):o);return!1}function h(e,n,t,o,i){var s=e.charAt(0).toUpperCase()+e.slice(1),a=(e+" "+Q.join(s+" ")+s).split(" ");return r(n,"string")||r(n,"undefined")?p(a,n,o,i):(a=(e+" "+E.join(s+" ")+s).split(" "),g(a,n,t))}function v(e,n,r){return h(e,t,t,n,r)}function y(e,n){if("object"==typeof e)for(var t in e)U(e,t)&&y(t,e[t]);else{e=e.toLowerCase();var r=e.split("."),o=Modernizr[r[0]];if(2==r.length&&(o=o[r[1]]),"undefined"!=typeof o)return Modernizr;n="function"==typeof n?n():n,1==r.length?Modernizr[r[0]]=n:(!Modernizr[r[0]]||Modernizr[r[0]]instanceof Boolean||(Modernizr[r[0]]=new Boolean(Modernizr[r[0]])),Modernizr[r[0]][r[1]]=n),i([(n&&0!=n?"":"no-")+r.join("-")]),Modernizr._trigger(e,n)}return Modernizr}var w=[],_={_version:"3.5.0",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,n){var t=this;setTimeout(function(){n(t[e])},0)},addTest:function(e,n,t){w.push({name:e,fn:n,options:t})},addAsyncTest:function(e){w.push({name:null,fn:e})}},Modernizr=function(){};Modernizr.prototype=_,Modernizr=new Modernizr;var C=[],b=n.documentElement,S="svg"===b.nodeName.toLowerCase(),B="Moz O ms Webkit",Q=_._config.usePrefixes?B.split(" "):[];_._cssomPrefixes=Q;var x={elem:a("modernizr")};Modernizr._q.push(function(){delete x.elem});var T={style:x.elem.style};Modernizr._q.unshift(function(){delete T.style});var E=_._config.usePrefixes?B.toLowerCase().split(" "):[];_._domPrefixes=E,_.testAllProps=h,_.testAllProps=v,Modernizr.addTest("cssgridlegacy",v("grid-columns","10px",!0)),Modernizr.addTest("cssgrid",v("grid-template-rows","none",!0));var U;!function(){var e={}.hasOwnProperty;U=r(e,"undefined")||r(e.call,"undefined")?function(e,n){return n in e&&r(e.constructor.prototype[n],"undefined")}:function(n,t){return e.call(n,t)}}(),_._l={},_.on=function(e,n){this._l[e]||(this._l[e]=[]),this._l[e].push(n),Modernizr.hasOwnProperty(e)&&setTimeout(function(){Modernizr._trigger(e,Modernizr[e])},0)},_._trigger=function(e,n){if(this._l[e]){var t=this._l[e];setTimeout(function(){var e,r;for(e=0;e<t.length;e++)(r=t[e])(n)},0),delete this._l[e]}},Modernizr._q.push(function(){_.addTest=y}),Modernizr.addAsyncTest(function(){function e(e,n,t){function r(n){var r=n&&"load"===n.type?1==o.width:!1,i="webp"===e;y(e,i&&r?new Boolean(r):r),t&&t(n)}var o=new Image;o.onerror=r,o.onload=r,o.src=n}var n=[{uri:"data:image/webp;base64,UklGRiQAAABXRUJQVlA4IBgAAAAwAQCdASoBAAEAAwA0JaQAA3AA/vuUAAA=",name:"webp"},{uri:"data:image/webp;base64,UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAABBxAR/Q9ERP8DAABWUDggGAAAADABAJ0BKgEAAQADADQlpAADcAD++/1QAA==",name:"webp.alpha"},{uri:"data:image/webp;base64,UklGRlIAAABXRUJQVlA4WAoAAAASAAAAAAAAAAAAQU5JTQYAAAD/////AABBTk1GJgAAAAAAAAAAAAAAAAAAAGQAAABWUDhMDQAAAC8AAAAQBxAREYiI/gcA",name:"webp.animation"},{uri:"data:image/webp;base64,UklGRh4AAABXRUJQVlA4TBEAAAAvAAAAAAfQ//73v/+BiOh/AAA=",name:"webp.lossless"}],t=n.shift();e(t.name,t.uri,function(t){if(t&&"load"===t.type)for(var r=0;r<n.length;r++)e(n[r].name,n[r].uri)})}),o(),i(C),delete _.addTest,delete _.addAsyncTest;for(var P=0;P<Modernizr._q.length;P++)Modernizr._q[P]();e.Modernizr=Modernizr}(window,document);
