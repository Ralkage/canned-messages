module.exports=function(t){var e={};function n(r){if(e[r])return e[r].exports;var o=e[r]={i:r,l:!1,exports:{}};return t[r].call(o.exports,o,o.exports,n),o.l=!0,o.exports}return n.m=t,n.c=e,n.d=function(t,e,r){n.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:r})},n.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},n.t=function(t,e){if(1&e&&(t=n(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var r=Object.create(null);if(n.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var o in t)n.d(r,o,function(e){return t[e]}.bind(null,o));return r},n.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return n.d(e,"a",e),e},n.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},n.p="",n(n.s=14)}([function(t,e){t.exports=flarum.core.compat.app},function(t,e,n){"use strict";function r(t,e){t.prototype=Object.create(e.prototype),t.prototype.constructor=t,t.__proto__=e}n.d(e,"a",function(){return r})},function(t,e){t.exports=flarum.core.compat.Model},,function(t,e,n){"use strict";n.d(e,"a",function(){return i});var r=n(1),o=n(2),u=n.n(o),a=n(5),i=function(t){function e(){return t.apply(this,arguments)||this}return Object(r.a)(e,t),e.prototype.apiEndpoint=function(){return"/flagrow/canned-messages"+(this.exists?"/"+this.data.id:"")},e}(n.n(a)()(u.a,{key:u.a.attribute("key"),locale:u.a.attribute("locale"),style:u.a.attribute("style"),content:u.a.attribute("content")}))},function(t,e){t.exports=flarum.core.compat["utils/mixin"]},,,,,,,,,function(t,e,n){"use strict";n.r(e);var r=n(0),o=n.n(r),u=n(4);o.a.initializers.add("flagrow-canned-messages",function(t){t.store.models["flagrow-canned-message"]=u.a})}]);
//# sourceMappingURL=forum.js.map