/*! ! built on Tuesday, September 14th 2021, 11:55:41 am */
!function(e){var t={};function n(r){if(t[r])return t[r].exports;var o=t[r]={i:r,l:!1,exports:{}};return e[r].call(o.exports,o,o.exports,n),o.l=!0,o.exports}n.m=e,n.c=t,n.d=function(e,t,r){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(n.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var o in e)n.d(r,o,function(t){return e[t]}.bind(null,o));return r},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="",n(n.s=81)}([function(e,t){e.exports=window.wp.element},function(e,t){e.exports=window.wp.i18n},,function(e,t){e.exports=function(e){if(void 0===e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return e}},function(e,t){e.exports=window.wp.url},function(e,t){e.exports=window.wp.components},function(e,t){e.exports=window.lodash},function(e,t,n){var r;!function(){"use strict";var n={}.hasOwnProperty;function o(){for(var e=[],t=0;t<arguments.length;t++){var r=arguments[t];if(r){var c=typeof r;if("string"==c||"number"==c)e.push(r);else if(Array.isArray(r)&&r.length){var i=o.apply(null,r);i&&e.push(i)}else if("object"==c)for(var l in r)n.call(r,l)&&r[l]&&e.push(l)}}return e.join(" ")}e.exports?(o.default=o,e.exports=o):void 0===(r=function(){return o}.apply(t,[]))||(e.exports=r)}()},function(e,t){function n(t){return e.exports=n=Object.setPrototypeOf?Object.getPrototypeOf:function(e){return e.__proto__||Object.getPrototypeOf(e)},n(t)}e.exports=n},,,function(e,t){e.exports=window.wp.richText},function(e,t){function n(){return e.exports=n=Object.assign||function(e){for(var t=1;t<arguments.length;t++){var n,r=arguments[t];for(n in r)Object.prototype.hasOwnProperty.call(r,n)&&(e[n]=r[n])}return e},n.apply(this,arguments)}e.exports=n},function(e,t){e.exports=window.wp.primitives},function(e,t,n){var r=n(29);e.exports=function(e,t){if(null==e)return{};var n,o=r(e,t);if(Object.getOwnPropertySymbols)for(var c=Object.getOwnPropertySymbols(e),i=0;i<c.length;i++)n=c[i],0<=t.indexOf(n)||Object.prototype.propertyIsEnumerable.call(e,n)&&(o[n]=e[n]);return o}},function(e,t){e.exports=function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}},function(e,t){function n(e,t){for(var n=0;n<t.length;n++){var r=t[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(e,r.key,r)}}e.exports=function(e,t,r){return t&&n(e.prototype,t),r&&n(e,r),e}},function(e,t,n){var r=n(30);e.exports=function(e,t){if("function"!=typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function");e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,writable:!0,configurable:!0}}),t&&r(e,t)}},function(e,t,n){var r=n(31),o=n(3);e.exports=function(e,t){return!t||"object"!==r(t)&&"function"!=typeof t?o(e):t}},function(e,t){e.exports=function(e,t,n){return t in e?Object.defineProperty(e,t,{value:n,enumerable:!0,configurable:!0,writable:!0}):e[t]=n,e}},function(e,t,n){var r=n(60),o=n(61),c=n(62),i=n(64);e.exports=function(e,t){return r(e)||o(e,t)||c(e,t)||i()}},function(e,t){e.exports=window.regeneratorRuntime},,function(e,t){e.exports=window.wp.blockEditor},function(e,t){function n(e,t,n,r,o,c,i){try{var l=e[c](i),a=l.value}catch(e){return void n(e)}l.done?t(a):Promise.resolve(a).then(r,o)}e.exports=function(e){return function(){var t=this,r=arguments;return new Promise((function(o,c){var i=e.apply(t,r);function l(e){n(i,o,c,l,a,"next",e)}function a(e){n(i,o,c,l,a,"throw",e)}l(void 0)}))}}},,,,,function(e,t){e.exports=function(e,t){if(null==e)return{};for(var n,r={},o=Object.keys(e),c=0;c<o.length;c++)n=o[c],0<=t.indexOf(n)||(r[n]=e[n]);return r}},function(e,t){function n(t,r){return e.exports=n=Object.setPrototypeOf||function(e,t){return e.__proto__=t,e},n(t,r)}e.exports=n},function(e,t){function n(t){return"function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?e.exports=n=function(e){return typeof e}:e.exports=n=function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},n(t)}e.exports=n},,,,,,,function(e,t){e.exports=window.wp.htmlEntities},function(e,t){e.exports=window.wp.compose},function(e,t){e.exports=window.wp.data},function(e,t){e.exports=window.wp.dom},function(e,t){e.exports=window.wp.editor},,,,,,,,,,,,,,,,,,function(e,t){e.exports=function(e){if(Array.isArray(e))return e}},function(e,t){e.exports=function(e,t){if("undefined"!=typeof Symbol&&Symbol.iterator in Object(e)){var n=[],r=!0,o=!1,c=void 0;try{for(var i,l=e[Symbol.iterator]();!(r=(i=l.next()).done)&&(n.push(i.value),!t||n.length!==t);r=!0);}catch(e){o=!0,c=e}finally{try{r||null==l.return||l.return()}finally{if(o)throw c}}return n}}},function(e,t,n){var r=n(63);e.exports=function(e,t){if(e){if("string"==typeof e)return r(e,t);var n=Object.prototype.toString.call(e).slice(8,-1);return"Map"===(n="Object"===n&&e.constructor?e.constructor.name:n)||"Set"===n?Array.from(e):"Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)?r(e,t):void 0}}},function(e,t){e.exports=function(e,t){(null==t||t>e.length)&&(t=e.length);for(var n=0,r=new Array(t);n<t;n++)r[n]=e[n];return r}},function(e,t){e.exports=function(){throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}},,,,,,,,,,,,,,,,,function(e,t,n){"use strict";n.r(t);var r=n(14),o=n.n(r),c=(t=n(15),n.n(t)),i=(r=n(16),n.n(r)),l=(t=n(3),n.n(t)),a=(r=n(17),n.n(r)),s=(t=n(18),n.n(t)),u=(r=n(8),n.n(r)),p=n(0),b=n(1),f=n(5),d=n(11),m=n(4),O=n(23),g=n(38),h=(t=n(13),Object(p.createElement)(t.SVG,{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 24 24"},Object(p.createElement)(t.Path,{d:"M15.6 7.3h-.7l1.6-3.5-.9-.4-3.9 8.5H9v1.5h2l-1.3 2.8H8.4c-2 0-3.7-1.7-3.7-3.7s1.7-3.7 3.7-3.7H10V7.3H8.4c-2.9 0-5.2 2.3-5.2 5.2 0 2.9 2.3 5.2 5.2 5.2H9l-1.4 3.2.9.4 5.7-12.5h1.4c2 0 3.7 1.7 3.7 3.7s-1.7 3.7-3.7 3.7H14v1.5h1.6c2.9 0 5.2-2.3 5.2-5.2 0-2.9-2.4-5.2-5.2-5.2z"}))),j=Object(p.createElement)(t.SVG,{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 24 24"},Object(p.createElement)(t.Path,{d:"M15.6 7.2H14v1.5h1.6c2 0 3.7 1.7 3.7 3.7s-1.7 3.7-3.7 3.7H14v1.5h1.6c2.8 0 5.2-2.3 5.2-5.2 0-2.9-2.3-5.2-5.2-5.2zM4.7 12.4c0-2 1.7-3.7 3.7-3.7H10V7.2H8.4c-2.9 0-5.2 2.3-5.2 5.2 0 2.9 2.3 5.2 5.2 5.2H10v-1.5H8.4c-2 0-3.7-1.7-3.7-3.7zm4.6.9h5.3v-1.5H9.3v1.5z"})),v=(r=n(19),n.n(r)),y=(r=n(20),n.n(r)),k=n(6),w=(r=n(12),n.n(r)),_=(r=n(24),n.n(r)),x=(r=n(21),n.n(r)),E=(r=n(7),n.n(r)),S=n(39),P=n(40),C=n(41);function T(e,t){var n,r=Object.keys(e);return Object.getOwnPropertySymbols&&(n=Object.getOwnPropertySymbols(e),t&&(n=n.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),r.push.apply(r,n)),r}function N(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?T(Object(n),!0).forEach((function(t){v()(e,t,n[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):T(Object(n)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))}))}return e}var L=[{id:"opensInNewTab",title:Object(b.__)("Open in new tab"),type:"ToggleControl"},{id:"nofollow",title:Object(b.__)('Add "nofollow" to link',"all-in-one-seo-pack"),type:"ToggleControl"},{id:"sponsored",title:Object(b.__)('Add "sponsored" to link',"all-in-one-seo-pack"),type:"ToggleControl"},{id:"ugc",title:Object(b.__)('Add "ugc" to link',"all-in-one-seo-pack"),type:"ToggleControl"},{id:"title",title:Object(b.__)("Add title attribute to link","all-in-one-seo-pack"),type:"TextControl"}],R=function(e){var t=e.value,n=e.onChange,r=void 0===n?k.noop:n;return(e=void 0===(e=e.settings)?L:e)&&e.length?(e=e.map((function(e){if("TextControl"!==e.type)return"ToggleControl"===e.type?Object(p.createElement)(f.ToggleControl,{className:"block-editor-link-control__setting",key:e.id,label:e.title,onChange:(n=e,function(e){r(N(N({},t),{},v()({},n.id,e)))}),checked:!!t&&!!t[e.id]}):null;var n,o=Object(p.useState)(),c=y()(o,2),i=(o=c[0],c[1]);return Object(p.createElement)(f.TextControl,{"data-aioseop":"true",className:"block-editor-link-control__setting",key:e.id,label:e.title,onChange:function(e){i(e)},onBlur:function(n){r(N(N({},t),{},v()({},e.id,n.target.value)))},value:o||t[e.id]})})),Object(p.createElement)("fieldset",{className:"block-editor-link-control__settings"},Object(p.createElement)(f.VisuallyHidden,{as:"legend"},Object(b.__)("Currently selected link settings")),e)):null};function H(e,t){var n,r=Object.keys(e);return Object.getOwnPropertySymbols&&(n=Object.getOwnPropertySymbols(e),t&&(n=n.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),r.push.apply(r,n)),r}function A(e){var t=e.icon,n=void 0===(n=e.size)?24:n;e=function(e,t){if(null==e)return{};var n,r=function(e,t){if(null==e)return{};for(var n,r={},o=Object.keys(e),c=0;c<o.length;c++)n=o[c],0<=t.indexOf(n)||(r[n]=e[n]);return r}(e,t);if(Object.getOwnPropertySymbols)for(var o=Object.getOwnPropertySymbols(e),c=0;c<o.length;c++)n=o[c],0<=t.indexOf(n)||Object.prototype.propertyIsEnumerable.call(e,n)&&(r[n]=e[n]);return r}(e,["icon","size"]);return Object(p.cloneElement)(t,function(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?H(Object(n),!0).forEach((function(t){var r,o;r=e,t=n[o=t],o in r?Object.defineProperty(r,o,{value:t,enumerable:!0,configurable:!0,writable:!0}):r[o]=t})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):H(Object(n)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))}))}return e}({width:n,height:n},e))}var I=Object(p.createElement)(t.SVG,{xmlns:"http://www.w3.org/2000/svg",viewBox:"-2 -2 24 24"},Object(p.createElement)(t.Path,{d:"M9 0C4.03 0 0 4.03 0 9s4.03 9 9 9 9-4.03 9-9-4.03-9-9-9zM1.11 9.68h2.51c.04.91.167 1.814.38 2.7H1.84c-.403-.85-.65-1.764-.73-2.7zm8.57-5.4V1.19c.964.366 1.756 1.08 2.22 2 .205.347.386.708.54 1.08l-2.76.01zm3.22 1.35c.232.883.37 1.788.41 2.7H9.68v-2.7h3.22zM8.32 1.19v3.09H5.56c.154-.372.335-.733.54-1.08.462-.924 1.255-1.64 2.22-2.01zm0 4.44v2.7H4.7c.04-.912.178-1.817.41-2.7h3.21zm-4.7 2.69H1.11c.08-.936.327-1.85.73-2.7H4c-.213.886-.34 1.79-.38 2.7zM4.7 9.68h3.62v2.7H5.11c-.232-.883-.37-1.788-.41-2.7zm3.63 4v3.09c-.964-.366-1.756-1.08-2.22-2-.205-.347-.386-.708-.54-1.08l2.76-.01zm1.35 3.09v-3.04h2.76c-.154.372-.335.733-.54 1.08-.464.92-1.256 1.634-2.22 2v-.04zm0-4.44v-2.7h3.62c-.04.912-.178 1.817-.41 2.7H9.68zm4.71-2.7h2.51c-.08.936-.327 1.85-.73 2.7H14c.21-.87.337-1.757.38-2.65l.01-.05zm0-1.35c-.046-.894-.176-1.78-.39-2.65h2.16c.403.85.65 1.764.73 2.7l-2.5-.05zm1-4H13.6c-.324-.91-.793-1.76-1.39-2.52 1.244.56 2.325 1.426 3.14 2.52h.04zm-9.6-2.52c-.597.76-1.066 1.61-1.39 2.52H2.65c.815-1.094 1.896-1.96 3.14-2.52zm-3.15 12H4.4c.324.91.793 1.76 1.39 2.52-1.248-.567-2.33-1.445-3.14-2.55l-.01.03zm9.56 2.52c.597-.76 1.066-1.61 1.39-2.52h1.76c-.82 1.08-1.9 1.933-3.14 2.48l-.01.04z"})),F=function(e){var t=e.itemProps,n=e.suggestion,r=void 0!==(c=e.isSelected)&&c,o=e.onClick,c=void 0!==(c=e.isURL)&&c;e=void 0===(e=e.searchTerm)?"":e;return Object(p.createElement)(f.Button,w()({},t,{onClick:o,className:E()("block-editor-link-control__search-item",{"is-selected":r,"is-url":c,"is-entity":!c})}),c&&Object(p.createElement)(A,{className:"block-editor-link-control__search-item-icon",icon:I}),Object(p.createElement)("span",{className:"block-editor-link-control__search-item-header"},Object(p.createElement)("span",{className:"block-editor-link-control__search-item-title"},Object(p.createElement)(f.TextHighlight,{text:n.title,highlight:e})),Object(p.createElement)("span",{"aria-hidden":!c,className:"block-editor-link-control__search-item-info"},!c&&(Object(m.safeDecodeURI)(n.url)||""),c&&Object(b.__)("Press ENTER to add this link"))),n.type&&Object(p.createElement)("span",{className:"block-editor-link-control__search-item-type"},n.type))},z=Object(p.createElement)(t.SVG,{xmlns:"http://www.w3.org/2000/svg",viewBox:"-2 -2 24 24"},Object(p.createElement)(t.Path,{d:"M16 4h2v9H7v3l-5-4 5-4v3h9V4z"})),D=n(42),M=function(e){var t=e.value,n=e.onChange,r=e.onSelect,o=e.renderSuggestions,c=e.fetchSuggestions,i=e.showInitialSuggestions,l=e.errorMessage,a=(e=Object(p.useState)(),(e=y()(e,2))[0]),s=e[1];return Object(p.createElement)("form",{onSubmit:function(e){e.preventDefault(),r(a||{url:t})}},Object(p.createElement)("div",{className:"block-editor-link-control__search-input-wrapper"},Object(p.createElement)(D.URLInput,{className:"block-editor-link-control__search-input",value:t,onChange:function(e,t){n(e),s(t)},placeholder:Object(b.__)("Search or type url"),__experimentalRenderSuggestions:o,__experimentalFetchLinkSuggestions:c,__experimentalHandleURLSuggestions:!0,__experimentalShowInitialSuggestions:i}),Object(p.createElement)("div",{className:"block-editor-link-control__search-actions"},Object(p.createElement)(f.Button,{type:"submit",label:Object(b.__)("Submit"),icon:z,className:"block-editor-link-control__search-submit"}))),l&&Object(p.createElement)(f.Notice,{className:"block-editor-link-control__search-error",status:"error",isDismissible:!1},l))},V=function(e){var t=e.searchTerm,n=e.onClick,r=e.itemProps;e=e.isSelected;return t?Object(p.createElement)(f.Button,w()({},r,{className:E()("block-editor-link-control__search-create block-editor-link-control__search-item",{"is-selected":e}),onClick:n}),Object(p.createElement)(f.Icon,{className:"block-editor-link-control__search-item-icon",icon:"insert"}),Object(p.createElement)("span",{className:"block-editor-link-control__search-item-header"},Object(p.createElement)("span",{className:"block-editor-link-control__search-item-title"},Object(p.createInterpolateElement)(Object(b.sprintf)(Object(b.__)("New page: <mark>%s</mark>"),t),{mark:Object(p.createElement)("mark",null)})))):null};function U(e,t){var n,r=Object.keys(e);return Object.getOwnPropertySymbols&&(n=Object.getOwnPropertySymbols(e),t&&(n=n.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),r.push.apply(r,n)),r}function B(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?U(Object(n),!0).forEach((function(t){v()(e,t,n[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):U(Object(n)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))}))}return e}var W=(n=Object(f.createSlotFill)("BlockEditorLinkControlViewer")).Slot,G=(n=n.Fill,"__CREATE__"),Q=function(e){var t=!1;return{promise:new Promise((function(n,r){e.then((function(e){return t?r({isCanceled:!0}):n(e)}),(function(e){return r(t?{isCanceled:!0}:e)}))})),cancel:function(){t=!0}}};function q(e){var t=e.value,n=e.settings,r=void 0===(j=e.onChange)?k.noop:j,o=void 0===(K=e.showSuggestions)||K,c=e.showInitialSuggestions,i=e.forceIsEditingLink,l=e.createSuggestion,a=Object(p.useRef)(),s=Object(p.useRef)(),u=Object(p.useRef)(),d=Object(S.useInstanceId)(q),O=Object(p.useState)(t&&t.url||""),g=(N=y()(O,2))[0],h=N[1],j=Object(p.useState)(void 0!==i?i:!t||!t.url),v=(K=y()(j,2))[0],T=K[1],N=(e=Object(p.useState)(!1),(O=y()(e,2))[0]),L=O[1],H=(j=Object(p.useState)(null),e=(K=y()(j,2))[0],K[1]),A=Object(p.useRef)(!1),I=Object(P.useSelect)((function(e){return{fetchSearchSuggestions:(0,e("core/block-editor").getSettings)().__experimentalFetchLinkSuggestions}}),[]).fetchSearchSuggestions;O=t&&Object(m.filterURLForDisplay)(Object(m.safeDecodeURI)(t.url))||"";function z(e){var t="URL",n=Object(m.getProtocol)(e)||"";return n.includes("mailto")&&(t="mailto"),n.includes("tel")&&(t="tel"),Object(k.startsWith)(e,"#")&&(t="internal"),Promise.resolve([{id:e,title:e,url:"URL"===t?Object(m.prependHTTP)(e):e,type:t}])}Object(p.useEffect)((function(){void 0!==i&&i!==v&&T(i)}),[i]),Object(p.useEffect)((function(){A.current&&u.current&&!u.current.contains(document.activeElement)&&(C.focus.focusable.find(u.current)[0]||u.current).focus(),A.current=!1}),[v]),Object(p.useEffect)((function(){return function(){a.current&&a.current.cancel(),s.current&&s.current.cancel()}}),[]);var D=function(){var e=_()(x.a.mark((function e(t,n){var r,o;return x.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.next=2,Promise.all([I(t,B({},n.isInitialSuggestions?{perPage:3}:{})),z(t)]);case 2:return r=e.sent,o=!t.includes(" "),r=o&&!n.isInitialSuggestions?r[0].concat(r[1]):r[0],e.abrupt("return",$(t)?r:r.concat({title:t,url:t,type:G}));case 6:case"end":return e.stop()}}),e)})));return function(t,n){return e.apply(this,arguments)}}();function U(){A.current=!!u.current&&u.current.contains(document.activeElement),T(!1)}function $(e){var t=Object(k.startsWith)(e,"#");return Object(m.isURL)(e)||e&&e.includes("www.")||t}j=Object(p.useCallback)((function(e,t){return o?$(e)?z(e):D(e,t):Promise.resolve([])}),[z,I]);var J=function(){var e=_()(x.a.mark((function e(t){var n;return x.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return L(!0),H(null),e.prev=2,s.current=Q(Promise.resolve(l(t))),e.next=6,s.current.promise;case 6:n=e.sent,L(!1),n?(r(n),U()):T(!0),e.next=18;break;case 11:if(e.prev=11,e.t0=e.catch(2),e.t0&&e.t0.isCanceled)return e.abrupt("return");e.next=15;break;case 15:H(e.t0.message||Object(b.__)("An unknown error occurred during creation. Please try again.")),L(!1),T(!0);case 18:case"end":return e.stop()}}),e,null,[[2,11]])})));return function(t){return e.apply(this,arguments)}}(),K=Object(p.useMemo)((function(){return{url:t&&t.url}}),[t&&t.url]);return Object(p.createElement)("div",{tabIndex:-1,ref:u,className:"block-editor-link-control"},N&&Object(p.createElement)("div",{className:"block-editor-link-control__loading"},Object(p.createElement)(f.Spinner,null)," ",Object(b.__)("Creating"),"…"),(v||!t)&&!N&&Object(p.createElement)(M,{value:g,onChange:function(){h(0<arguments.length&&void 0!==arguments[0]?arguments[0]:"")},onSelect:function(){var e=_()(x.a.mark((function e(n){return x.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:if(G===n.type)return e.next=3,J(g);e.next=5;break;case 3:e.next=7;break;case 5:!function(e){var t=1<arguments.length&&void 0!==arguments[1]?arguments[1]:{};T(!1),r(B(B({},t),e))}(n,t),U();case 7:case"end":return e.stop()}}),e)})));return function(t){return e.apply(this,arguments)}}(),renderSuggestions:o?function(e){var n=e.suggestionsListProps,o=e.buildSuggestionItemProps,c=e.suggestions,i=e.selectedSuggestion,a=e.isLoading,s=e.isInitialSuggestions,u=E()("block-editor-link-control__search-results",{"is-loading":a}),m=["url","mailto","tel","internal"],O=(e=1===c.length&&m.includes(c[0].type.toLowerCase()),l&&!e&&!s);a="block-editor-link-control-search-results-label-".concat(d),e=s?Object(b.__)("Recently updated"):Object(b.sprintf)(Object(b.__)('Search results for "%s"'),g),e=Object(p.createElement)(s?p.Fragment:f.VisuallyHidden,{},Object(p.createElement)("span",{className:"block-editor-link-control__search-results-label",id:a},e));return Object(p.createElement)("div",{className:"block-editor-link-control__search-results-wrapper"},e,Object(p.createElement)("div",w()({},n,{className:u,"aria-labelledby":a}),c.map((function(e,n){return O&&G===e.type?Object(p.createElement)(V,{searchTerm:g,onClick:_()(x.a.mark((function t(){return x.a.wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return t.next=2,J(e.title);case 2:case"end":return t.stop()}}),t)}))),key:e.type,itemProps:o(e,n),isSelected:n===i}):G===e.type?null:Object(p.createElement)(F,{key:"".concat(e.id,"-").concat(e.type),itemProps:o(e,n),suggestion:e,index:n,onClick:function(){U(),r(B(B({},t),e))},isSelected:n===i,isURL:m.includes(e.type.toLowerCase()),searchTerm:g})}))))}:null,fetchSuggestions:j,showInitialSuggestions:c,errorMessage:e}),t&&!v&&!N&&Object(p.createElement)(p.Fragment,null,Object(p.createElement)("div",{"aria-label":Object(b.__)("Currently selected"),"aria-selected":"true",className:E()("block-editor-link-control__search-item",{"is-current":!0})},Object(p.createElement)("span",{className:"block-editor-link-control__search-item-header"},Object(p.createElement)(f.ExternalLink,{className:"block-editor-link-control__search-item-title",href:t.url},t&&t.title||O),t&&t.title&&Object(p.createElement)("span",{className:"block-editor-link-control__search-item-info"},O)),Object(p.createElement)(f.Button,{isSecondary:!0,onClick:function(){return T(!0)},className:"block-editor-link-control__search-item-action"},Object(b.__)("Edit")),Object(p.createElement)(W,{fillProps:K}))),Object(p.createElement)(R,{key:"aioseop-settings-drawer",value:t,settings:n,onChange:r}))}q.ViewerFill=n;var $=q;function J(e,t){var n,r=Object.keys(e);return Object.getOwnPropertySymbols&&(n=Object.getOwnPropertySymbols(e),t&&(n=n.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),r.push.apply(r,n)),r}function K(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?J(Object(n),!0).forEach((function(t){v()(e,t,n[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):J(Object(n)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))}))}return e}var X=Object(f.withSpokenMessages)((function(e){var t=e.isActive,n=e.activeAttributes,r=e.addingLink,o=e.value,c=e.onChange,i=e.speak,l=e.stopAddingLink,a=Object(p.useMemo)(k.uniqueId,[r]),s=(e=Object(p.useState)(),(e=y()(e,2))[0]),u=e[1],O=(e=Object(p.useMemo)((function(){var e=window.getSelection();if(e.rangeCount){if(e=e.getRangeAt(0),r&&!t)return e;for(var n=(n=e.startContainer).nextElementSibling||n;n.nodeType!==window.Node.ELEMENT_NODE;)n=n.parentNode;return n.closest("a")}}),[r,o.start,o.end]),K({url:n.url,opensInNewTab:"_blank"===n.target,nofollow:!!n.rel&&n.rel.includes("nofollow"),sponsored:!!n.rel&&n.rel.includes("sponsored"),ugc:!!n.rel&&n.rel.includes("ugc"),title:n.title},s));return Object(p.createElement)(f.Popover,{key:a,anchorRef:e,focusOnMount:!!r&&"firstElement",onClose:l,position:"bottom center"},Object(p.createElement)($,{value:O,onChange:function(e){e=K(K({},s),e);var n,r,a,p,f,g,h,j=(O.opensInNewTab!==e.opensInNewTab||O.sponsored!==e.sponsored||O.nofollow!==e.nofollow||O.ugc!==e.ugc)&&O.url===e.url,v=j&&void 0===e.url;u(v?e:void 0),v||(a=(r={url:n=Object(m.prependHTTP)(e.url),opensInNewWindow:e.opensInNewTab,nofollow:e.nofollow,sponsored:e.sponsored,ugc:e.ugc,title:e.title}).url,p=r.opensInNewWindow,f=r.nofollow,g=r.sponsored,h=r.ugc,v=r.title,r={type:"core/link",attributes:{url:a}},a=[],p&&(r.attributes.target="_blank",a.push("noreferrer noopener")),f&&a.push("nofollow"),g&&a.push("sponsored"),h&&a.push("ugc"),0<a.length&&(r.attributes.rel=a.join(" ")),v&&(r.attributes.title=v),r=r,Object(d.isCollapsed)(o)&&!t?(e=e.title||n,e=Object(d.applyFormat)(Object(d.create)({text:e}),r,0,e.length),c(Object(d.insert)(o,e))):c(Object(d.applyFormat)(o,r)),j||l(),function(e){if(e){var t=e.trim();if(t){if(/^\S+:/.test(t)){if(e=Object(m.getProtocol)(t),!Object(m.isValidProtocol)(e))return;if(Object(k.startsWith)(e,"http")&&!/^https?:\/\/[^/\s]/i.test(t))return;if(e=Object(m.getAuthority)(t),!Object(m.isValidAuthority)(e))return;if((e=Object(m.getPath)(t))&&!Object(m.isValidPath)(e))return;if((e=Object(m.getQueryString)(t))&&!Object(m.isValidQueryString)(e))return;if((e=Object(m.getFragment)(t))&&!Object(m.isValidFragment)(e))return}return!Object(k.startsWith)(t,"#")||Object(m.isValidFragment)(t)?1:void 0}}}(n)?i(t?Object(b.__)("Link edited.","all-in-one-seo-pack"):Object(b.__)("Link inserted.","all-in-one-seo-pack"),"assertive"):i(Object(b.__)("Warning: the link has been inserted but may have errors. Please test it.","all-in-one-seo-pack"),"assertive"))},forceIsEditingLink:r}))}));var Y="core/link",Z=Object(b.__)("Link","all-in-one-seo-pack"),ee={name:Y,title:Z,tagName:"a",className:null,attributes:{url:"href",target:"target",rel:"rel",title:"title"},__unstablePasteRule:function(e,t){var n=t.html;t=t.plainText;return Object(d.isCollapsed)(e)?e:(t=(n||t).replace(/<[^>]+>/g,"").trim(),Object(m.isURL)(t)?(window.console.log("Created link:\n\n",t),Object(d.applyFormat)(e,{type:Y,attributes:{url:Object(g.decodeEntities)(t)}})):e)},edit:Object(f.withSpokenMessages)(function(e){a()(n,e);var t=function(e){var t=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(e){return!1}}();return function(){var n,r=u()(e);return r=t?(n=u()(this).constructor,Reflect.construct(r,arguments,n)):r.apply(this,arguments),s()(this,r)}}(n);function n(){var e;return c()(this,n),(e=t.apply(this,arguments)).addLink=e.addLink.bind(l()(e)),e.stopAddingLink=e.stopAddingLink.bind(l()(e)),e.onRemoveFormat=e.onRemoveFormat.bind(l()(e)),e.state={addingLink:!1},e}return i()(n,[{key:"addLink",value:function(){var e,t=(e=this.props).value,n=e.onChange;(e=Object(d.getTextContent)(Object(d.slice)(t)))&&Object(m.isURL)(e)?n(Object(d.applyFormat)(t,{type:Y,attributes:{url:e}})):e&&Object(m.isEmail)(e)?n(Object(d.applyFormat)(t,{type:Y,attributes:{url:"mailto:".concat(e)}})):this.setState({addingLink:!0})}},{key:"stopAddingLink",value:function(){this.setState({addingLink:!1}),this.props.onFocus()}},{key:"onRemoveFormat",value:function(){var e=(n=this.props).value,t=n.onChange,n=n.speak;t(Object(d.removeFormat)(e,Y)),n(Object(b.__)("Link removed.","all-in-one-seo-pack"),"assertive")}},{key:"render",value:function(){var e=(r=this.props).isActive,t=r.activeAttributes,n=r.value,r=r.onChange;return Object(p.createElement)(p.Fragment,null,Object(p.createElement)(O.RichTextShortcut,{type:"primary",character:"k",onUse:this.addLink}),Object(p.createElement)(O.RichTextShortcut,{type:"primaryShift",character:"k",onUse:this.onRemoveFormat}),e&&Object(p.createElement)(O.RichTextToolbarButton,{name:"link",icon:h,title:Object(b.__)("Unlink","all-in-one-seo-pack"),onClick:this.onRemoveFormat,isActive:e,shortcutType:"primaryShift",shortcutCharacter:"k"}),!e&&Object(p.createElement)(O.RichTextToolbarButton,{name:"link",icon:j,title:Z,onClick:this.addLink,isActive:e,shortcutType:"primary",shortcutCharacter:"k"}),(this.state.addingLink||e)&&Object(p.createElement)(X,{key:"aioseop-inline-link-ui",addingLink:this.state.addingLink,stopAddingLink:this.stopAddingLink,isActive:e,activeAttributes:t,value:n,onChange:r}))}}]),n}(p.Component))},te=["name"],ne=(n=wp.richText).registerFormatType,re=n.unregisterFormatType;[ee].forEach((function(e){var t=e.name;e=o()(e,te);t&&(re("core/link"),ne(t,e))}))}]);