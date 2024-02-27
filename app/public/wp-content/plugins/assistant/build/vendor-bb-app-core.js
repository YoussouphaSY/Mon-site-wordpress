(()=>{"use strict";var e={n:t=>{var r=t&&t.__esModule?()=>t.default:()=>t;return e.d(r,{a:r}),r},d:(t,r)=>{for(var n in r)e.o(r,n)&&!e.o(t,n)&&Object.defineProperty(t,n,{enumerable:!0,get:r[n]})},o:(e,t)=>Object.prototype.hasOwnProperty.call(e,t),r:e=>{"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})}},t={};e.r(t),e.d(t,{App:()=>ee,Error:()=>B,Root:()=>H,createAppState:()=>s,createStoreRegistry:()=>R});const r=React;var n=e.n(r);const o=Redux,c=ReactRouterDOM;function a(e,t,r){return t in e?Object.defineProperty(e,t,{value:r,enumerable:!0,configurable:!0,writable:!0}):e[t]=r,e}function i(e,t){var r=Object.keys(e);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(e);t&&(n=n.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),r.push.apply(r,n)}return r}function u(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?i(Object(r),!0).forEach((function(t){a(e,t,r[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):i(Object(r)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))}))}return e}var l={handle:"",label:"",render:function(){return null},icon:function(){return null},isEnabled:!0},s=function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:l;return{reducers:{apps:function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{},r=arguments.length>1?arguments[1]:void 0;switch(r.type){case"REGISTER_APP":return u(a({},r.handle,u(u({},e),{},{handle:r.handle},r.config)),t);case"UNREGISTER_APP":return delete t[r.handle],u({},t);default:return t}}},actions:{registerApp:function(){return{type:"REGISTER_APP",handle:arguments.length>0&&void 0!==arguments[0]?arguments[0]:"",config:arguments.length>1&&void 0!==arguments[1]?arguments[1]:{}}},unregisterApp:function(){return{type:"UNREGISTER_APP",handle:arguments.length>0&&void 0!==arguments[0]?arguments[0]:""}}}}};function f(e,t){(null==t||t>e.length)&&(t=e.length);for(var r=0,n=new Array(t);r<t;r++)n[r]=e[r];return n}function p(e,t){return function(e){if(Array.isArray(e))return e}(e)||function(e,t){var r=null==e?null:"undefined"!=typeof Symbol&&e[Symbol.iterator]||e["@@iterator"];if(null!=r){var n,o,c=[],a=!0,i=!1;try{for(r=r.call(e);!(a=(n=r.next()).done)&&(c.push(n.value),!t||c.length!==t);a=!0);}catch(e){i=!0,o=e}finally{try{a||null==r.return||r.return()}finally{if(i)throw o}}return c}}(e,t)||function(e,t){if(e){if("string"==typeof e)return f(e,t);var r=Object.prototype.toString.call(e).slice(8,-1);return"Object"===r&&e.constructor&&(r=e.constructor.name),"Map"===r||"Set"===r?Array.from(e):"Arguments"===r||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r)?f(e,t):void 0}}(e,t)||function(){throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}function y(e){return y="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},y(e)}var b=function(e,t){return y(e)===y(t)&&("string"==typeof e||"number"==typeof e?e===t:JSON.stringify(e)===JSON.stringify(t))},d=function(e,t,r){return"boolean"==typeof e?e:"function"==typeof e?e(t,r):"string"==typeof e?!b(t[e],r[e]):!!Array.isArray(e)&&e.some((function(e){return!b(t[e],r[e])}))};function v(e,t){var r=Object.keys(e);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(e);t&&(n=n.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),r.push.apply(r,n)}return r}function g(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?v(Object(r),!0).forEach((function(t){a(e,t,r[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):v(Object(r)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))}))}return e}var O={exports:{}};const h=(e,t)=>{if("string"!=typeof e&&!Array.isArray(e))throw new TypeError("Expected the input to be `string | string[]`");return t=Object.assign({pascalCase:!1},t),0===(e=Array.isArray(e)?e.map((e=>e.trim())).filter((e=>e.length)).join("-"):e.trim()).length?"":1===e.length?t.pascalCase?e.toUpperCase():e.toLowerCase():(e!==e.toLowerCase()&&(e=(e=>{let t=!1,r=!1,n=!1;for(let o=0;o<e.length;o++){const c=e[o];t&&/[a-zA-Z]/.test(c)&&c.toUpperCase()===c?(e=e.slice(0,o)+"-"+e.slice(o),t=!1,n=r,r=!0,o++):r&&n&&/[a-zA-Z]/.test(c)&&c.toLowerCase()===c?(e=e.slice(0,o-1)+"-"+e.slice(o-1),n=r,r=!1,t=!0):(t=c.toLowerCase()===c&&c.toUpperCase()!==c,n=r,r=c.toUpperCase()===c&&c.toLowerCase()!==c)}return e})(e)),e=e.replace(/^[_.\- ]+/,"").toLowerCase().replace(/[_.\- ]+(\w|$)/g,((e,t)=>t.toUpperCase())).replace(/\d+(\w|$)/g,(e=>e.toUpperCase())),r=e,t.pascalCase?r.charAt(0).toUpperCase()+r.slice(1):r);var r};O.exports=h,O.exports.default=h;var m=O.exports,j=function(e,t,r){return Object.entries(r).map((function(r){var n=p(r,1)[0];if(!t[n]){var o="SET_".concat(n.toUpperCase()),c=m("set_".concat(n));e[c]=function(e){return{type:o,value:e}}}})),e},w=function(e,t){return Object.keys(e).length||Object.keys(t).length?(Object.entries(t).map((function(t){var r=p(t,2),n=r[0],o=r[1];e[n]||(e[n]=function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:o,t=arguments.length>1?arguments[1]:void 0;return t.type==="SET_".concat(n.toUpperCase())?t.value:e})})),(0,o.combineReducers)(e)):function(e){return e}},P=function(e,t){var r="undefined"==typeof window?null:window.__REDUX_DEVTOOLS_EXTENSION_COMPOSE__;return(r?r({name:e}):o.compose)((0,o.applyMiddleware)(S(t)))},S=function(e){var t=e.before,r=e.after;return function(e){return function(n){return function(o){t&&t[o.type]&&t[o.type](o,e);var c=n(o);return r&&r[o.type]&&r[o.type](o,e),c}}}},E=function(e){return e.charAt(0).toUpperCase()+e.slice(1)};function A(e,t){var r=Object.keys(e);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(e);t&&(n=n.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),r.push.apply(r,n)}return r}function C(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?A(Object(r),!0).forEach((function(t){a(e,t,r[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):A(Object(r)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))}))}return e}var R=function(){var e={};return{registerStore:function(t,r){var n=r.state,c=void 0===n?{}:n,a=r.cache,i=void 0===a?[]:a,u=r.actions,l=void 0===u?{}:u,s=r.reducers,f=void 0===s?{}:s,y=r.selectors,b=void 0===y?{}:y,d=r.effects,v=void 0===d?{}:d;if(!t)throw new Error("Missing key required for registerStore.");if(e[t])throw new Error("A store with the key '".concat(t,"' already exists."));var O,h,S,E=function(e,t,r){if(r.length&&"undefined"!=typeof localStorage){var n=localStorage.getItem(e);if(n){var o=JSON.parse(n),c={};return r.map((function(e){o[e]&&(c[e]=o[e])})),g(g({},t),c)}}return t}(t,c,i);e[t]={actions:j(C({},l),f,E),store:(0,o.createStore)(w(C({},f),E),E,P(t,v))},e[t].selectors=function(e,t){var r={},n=t.getState();return Object.entries(n).map((function(t){var r=p(t,1)[0],n=m("get_".concat(r));e[n]||(e[n]=function(e){return e[r]})})),Object.entries(e).map((function(e){var n=p(e,2),o=n[0],c=n[1];r[o]=function(){for(var e=arguments.length,r=new Array(e),n=0;n<e;n++)r[n]=arguments[n];return c.apply(void 0,[t.getState()].concat(r))}})),r}(C({},b),e[t].store),O=t,h=e[t].store,(S=i).length&&"undefined"!=typeof localStorage&&h.subscribe((function(){var e=h.getState(),t={};S.map((function(r){t[r]=e[r]})),localStorage.setItem(O,JSON.stringify(t))}))},useStore:function(t){var n=!(arguments.length>1&&void 0!==arguments[1])||arguments[1],o=e[t].store,c=o.getState(),a=(0,r.useRef)(c),i=p((0,r.useState)(c),2),u=i[0],l=i[1];return(0,r.useEffect)((function(){return l(o.getState()),o.subscribe((function(){var e=o.getState();d(n,a.current,e)&&l(C({},e)),a.current=e}))}),[]),u},getStore:function(t){return e[t].store},getDispatch:function(t){var r=e[t],n=r.actions,o=r.store,c={};return Object.entries(n).map((function(e){var t=p(e,2),r=t[0],n=t[1];c[r]=function(){for(var e=arguments.length,t=new Array(e),r=0;r<e;r++)t[r]=arguments[r];return new Promise((function(e){e(o.dispatch(n.apply(void 0,t)))}))}})),c},getSelectors:function(t){return e[t].selectors},getHooks:function(t){var n=e[t],c=n.actions,a=n.store;return function(e,t){var n=e.getState(),o={};return Object.keys(n).map((function(n){var c="use".concat(E(n));o[c]=function(){var o=!(arguments.length>0&&void 0!==arguments[0])||arguments[0],c=p((0,r.useState)(e.getState()[n]),2),a=c[0],i=c[1],u=(0,r.useRef)(e.getState()[n]);(0,r.useLayoutEffect)((function(){return i(e.getState()[n]),u.current=e.getState()[n],e.subscribe((function(){var t=e.getState();d(o,a,u.current)&&i(t[n]),u.current=t[n]}))}),[]);var l="set".concat(E(n)),s=t[l];return[a,s]}})),o}(a,(0,o.bindActionCreators)(c,a.dispatch))}}};function _(){return _=Object.assign||function(e){for(var t=1;t<arguments.length;t++){var r=arguments[t];for(var n in r)Object.prototype.hasOwnProperty.call(r,n)&&(e[n]=r[n])}return e},_.apply(this,arguments)}function D(e,t){if(null==e)return{};var r,n,o=function(e,t){if(null==e)return{};var r,n,o={},c=Object.keys(e);for(n=0;n<c.length;n++)r=c[n],t.indexOf(r)>=0||(o[r]=e[r]);return o}(e,t);if(Object.getOwnPropertySymbols){var c=Object.getOwnPropertySymbols(e);for(n=0;n<c.length;n++)r=c[n],t.indexOf(r)>=0||Object.prototype.propertyIsEnumerable.call(e,r)&&(o[r]=e[r])}return o}function x(e,t){for(var r=0;r<t.length;r++){var n=t[r];n.enumerable=n.enumerable||!1,n.configurable=!0,"value"in n&&(n.writable=!0),Object.defineProperty(e,n.key,n)}}function k(e,t){return k=Object.setPrototypeOf||function(e,t){return e.__proto__=t,e},k(e,t)}function L(e){return L=Object.setPrototypeOf?Object.getPrototypeOf:function(e){return e.__proto__||Object.getPrototypeOf(e)},L(e)}var T=["error","title","children","style"];function U(e,t){var r=Object.keys(e);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(e);t&&(n=n.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),r.push.apply(r,n)}return r}function I(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?U(Object(r),!0).forEach((function(t){a(e,t,r[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):U(Object(r)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))}))}return e}function M(e){var t=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(e){return!1}}();return function(){var r,n=L(e);if(t){var o=L(this).constructor;r=Reflect.construct(n,arguments,o)}else r=n.apply(this,arguments);return function(e,t){if(t&&("object"===y(t)||"function"==typeof t))return t;if(void 0!==t)throw new TypeError("Derived constructors may only return object or undefined");return function(e){if(void 0===e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return e}(e)}(this,r)}}var B={},N=function(e){!function(e,t){if("function"!=typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function");e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,writable:!0,configurable:!0}}),Object.defineProperty(e,"prototype",{writable:!1}),t&&k(e,t)}(a,r.Component);var t,n,o,c=M(a);function a(e){var t;return function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,a),(t=c.call(this,e)).state={hasError:!1,error:null},t}return t=a,o=[{key:"getDerivedStateFromError",value:function(e){return{hasError:!0,error:e}}}],(n=[{key:"render",value:function(){var e=this.props,t=e.alternate,n=void 0===t?F:t,o=e.children,c=this.state,a=c.hasError,i=c.error;return a?(0,r.createElement)(n,{error:i}):o}}])&&x(t.prototype,n),o&&x(t,o),Object.defineProperty(t,"prototype",{writable:!1}),a}(),F=function(e){var t=e.error,r=e.title,o=void 0===r?"There seems to be an error":r,c=e.children,a=e.style,i=void 0===a?{}:a,u=D(e,T),l=I(I({},i),{},{display:"flex",flexDirection:"column",flex:"1 1 auto",justifyContent:"center",alignItems:"center",padding:40,textAlign:"center",minHeight:0,maxHeight:"100%"});return n().createElement("div",_({style:l},u),n().createElement("h1",{style:{marginBottom:20}},o),n().createElement("code",{style:{padding:10}},t.message),c)};B.Boundary=N,B.Page=F;var H=function(e){var t=e.children,r=e.error,o=e.errorBoundaryProps,a=void 0===o?{}:o,i=e.router,u=void 0===i?c.MemoryRouter:i,l=e.routerProps,s=void 0===l?{}:l;return n().createElement(B.Boundary,_({alternate:r},a),n().createElement(u,s,t))},G={handle:null,label:null,isAppRoot:!1},J=(0,r.createContext)(G),z=function(){return(0,r.useContext)(J)},$=["root"];function X(e,t){var r=Object.keys(e);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(e);t&&(n=n.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),r.push.apply(r,n)}return r}function Z(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?X(Object(r),!0).forEach((function(t){a(e,t,r[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):X(Object(r)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))}))}return e}var q=function(){return n().createElement("h1",{style:{margin:"auto"}},"Loading...")},V=function(e){var t=e.loading,o=e.error,a=void 0===o?Q:o,i=e.apps,u=(0,c.useHistory)(),l=(0,c.useLocation)(),s=(0,c.useParams)().app;if((0,r.useEffect)((function(){if(i[s]&&"function"==typeof i[s].onMount)return i[s].onMount()}),[s]),!i[s])return u.go(-u.length),u.replace("/",{}),null;var f=i[s],p=f.label,y=void 0===p?"":p,b=f.root,d=f.lazyLoad,v=2>=l.pathname.split("/").length,g=Z(Z({},G),{},{handle:s,baseURL:"/".concat(s),label:y,isAppRoot:v}),O=function(){return void 0===d||d};return n().createElement(J.Provider,{value:g},n().createElement(B.Boundary,{alternate:a,key:s},O()&&n().createElement(r.Suspense,{fallback:n().createElement(t,null)},n().createElement(K,_({root:b},g))),!O()&&n().createElement(K,_({root:b},g))))},Y=function(){return n().createElement(W,null,n().createElement("h1",null,"App Not Found"))},K=(0,r.memo)((function(e){var t=e.root,r=D(e,$);return t?n().createElement(t,r):n().createElement(Y,null)})),Q=function(e){var t=z().label;return n().createElement(B.Page,_({title:"There seems to be an issue with the ".concat(t," app.")},e))},W=function(e){var t=e.children;return n().createElement("div",{style:{flex:"1 1 auto",minHeight:0,maxHeight:"100%",display:"flex",flexDirection:"column",justifyContent:"center",alignItems:"center"}},t)},ee={};ee.use=z,ee.Content=function(e){var t=e.apps,r=void 0===t?{}:t,o=e.defaultApp,a=void 0===o?"home":o,i=e.loading,u=void 0===i?q:i,l=(0,c.useLocation)().search;return Object.keys(r).length?n().createElement(c.Switch,null,a&&n().createElement(c.Route,{exact:!0,path:"/"},n().createElement(c.Redirect,{to:"/".concat(a).concat(l)})),n().createElement(c.Route,{path:"/:app",render:function(){return n().createElement(V,{loading:u,apps:r})}})):(console.warn("App Core: You have no apps."),null)},window.FL=window.FL||{},FL.vendors=FL.vendors||{},FL.vendors.BBAppCore=t})();