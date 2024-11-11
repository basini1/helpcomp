/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _components_navbarButtons__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./components/navbarButtons */ "./resources/js/components/navbarButtons.js");
/* harmony import */ var _components_navbarToggler__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./components/navbarToggler */ "./resources/js/components/navbarToggler.js");
/* harmony import */ var _components_scrollToTop__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./components/scrollToTop */ "./resources/js/components/scrollToTop.js");



document.addEventListener("DOMContentLoaded", function () {
  (0,_components_navbarButtons__WEBPACK_IMPORTED_MODULE_0__["default"])();
  (0,_components_navbarToggler__WEBPACK_IMPORTED_MODULE_1__["default"])();
  (0,_components_scrollToTop__WEBPACK_IMPORTED_MODULE_2__["default"])();
});

/***/ }),

/***/ "./resources/js/components/navbarButtons.js":
/*!**************************************************!*\
  !*** ./resources/js/components/navbarButtons.js ***!
  \**************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* export default binding */ __WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony default export */ function __WEBPACK_DEFAULT_EXPORT__() {
  var queryDesktop = window.matchMedia("(max-width: 1279.98px)");
  var submenuParent = document.querySelectorAll(".menu-item-has-children");
  function showSubmenu() {
    submenuParent.forEach(function (parent) {
      var toggler = document.createElement("button");
      toggler.innerHTML = '<svg xmlns ="http://www.w3.org/2000/svg" width="13.129" height="7.501" viewBox="0 0 13.129 7.501"><path id="Path_23" data-name="Path 23" d="M-.662-1.213a.939.939,0,0,0,1.327,0L6.29-6.838a.939.939,0,0,0,0-1.327.939.939,0,0,0-1.327,0L0-3.2l-4.963-4.96a.939.939,0,0,0-1.327,0,.939.939,0,0,0,0,1.327L-.665-1.21Z" transform="translate(6.565 8.44)" fill="#e73031" /></svg>';
      toggler.setAttribute("data-element", "submenu-toggler");
      parent.appendChild(toggler);
      parent.querySelector("a").addEventListener("click", function (event) {
        event.preventDefault();
      });
    });
  }
  function adjustShowMenu() {
    submenuParent.forEach(function (parent) {
      var submenu = parent.querySelector('[data-element="submenu"]');
      var toggler = parent.querySelector('[data-element="submenu-toggler"]');
      if (queryDesktop.matches) {
        toggler.addEventListener("click", function () {
          jQuery(submenu).stop().slideToggle(300);
          toggler.classList.toggle("max-xl:rotate-180");
        });
      } else {
        toggler.removeEventListener("click", function () {
          jQuery(submenu).stop().slideToggle(300);
          toggler.classList.toggle("max-xl:rotate-180");
        });
      }
    });
  }
  showSubmenu();
  adjustShowMenu();
  jQuery(window).resize(function () {
    adjustShowMenu();
  });
}

/***/ }),

/***/ "./resources/js/components/navbarToggler.js":
/*!**************************************************!*\
  !*** ./resources/js/components/navbarToggler.js ***!
  \**************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* export default binding */ __WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony default export */ function __WEBPACK_DEFAULT_EXPORT__() {
  var queryDesktop = window.matchMedia("(min-width: 1280px)");
  var mainMenuToggler = jQuery('[data-element="main-menu-toggler"]');
  var mainMenu = jQuery('[data-element="main-menu"]');
  var submenuToggler = [jQuery(".menu-item-has-children")];
  function showMenu() {
    mainMenuToggler.click(function () {
      document.body.classList.toggle("max-xl:overflow-hidden");
      jQuery(this).toggleClass("text-helpcompRed");
      jQuery(mainMenu).toggleClass("max-xl:-translate-y-8 max-xl:opacity-0 max-xl:pointer-events-none");
      jQuery(mainMenu).find('[data-element="main-menu-wrap"]').toggleClass("max-xl:-translate-y-8");
      jQuery(mainMenu).find('[data-element="main-menu-contact"]').toggleClass("max-xl:translate-y-16");
    });
  }
  function showSubmenu() {
    submenuToggler.forEach(function (toggler) {
      toggler.mouseenter(function () {
        jQuery(toggler).find('[data-element="submenu"]').stop().fadeIn(250);
      });
      toggler.mouseleave(function () {
        jQuery(toggler).find('[data-element="submenu"]').stop().fadeOut(250);
      });
    });
  }
  function adjustShowMenu() {
    if (queryDesktop.matches) {
      showSubmenu();
    } else {
      submenuToggler.forEach(function (toggler) {
        toggler.unbind("mouseenter");
        toggler.unbind("mouseleave");
      });
    }
  }
  showMenu();
  adjustShowMenu();
  jQuery(window).resize(function () {
    adjustShowMenu();
  });
}

/***/ }),

/***/ "./resources/js/components/scrollToTop.js":
/*!************************************************!*\
  !*** ./resources/js/components/scrollToTop.js ***!
  \************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* export default binding */ __WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony default export */ function __WEBPACK_DEFAULT_EXPORT__() {
  var scrollBtn = document.querySelector('[data-element="scroll-to-top"]');
  if (scrollBtn) {
    scrollBtn.addEventListener("click", function () {
      window.scroll({
        top: 0,
        left: 0,
        behavior: "smooth"
      });
    });
  }
}

/***/ }),

/***/ "./resources/css/app.css":
/*!*******************************!*\
  !*** ./resources/css/app.css ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./resources/css/editor-style.css":
/*!****************************************!*\
  !*** ./resources/css/editor-style.css ***!
  \****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/app": 0,
/******/ 			"css/editor-style": 0,
/******/ 			"css/app": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunkhelpcomp"] = self["webpackChunkhelpcomp"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["css/editor-style","css/app"], () => (__webpack_require__("./resources/js/app.js")))
/******/ 	__webpack_require__.O(undefined, ["css/editor-style","css/app"], () => (__webpack_require__("./resources/css/app.css")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/editor-style","css/app"], () => (__webpack_require__("./resources/css/editor-style.css")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;