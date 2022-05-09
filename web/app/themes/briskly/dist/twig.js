/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/app/themes/briskly/dist/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./src/twig.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./src sync recursive \\.twig$":
/*!**************************!*\
  !*** ./src sync \.twig$ ***!
  \**************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

var map = {
	"./views/404.twig": "./src/views/404.twig",
	"./views/archive.twig": "./src/views/archive.twig",
	"./views/author.twig": "./src/views/author.twig",
	"./views/base.twig": "./src/views/base.twig",
	"./views/blocks/call-to-action.twig": "./src/views/blocks/call-to-action.twig",
	"./views/blocks/clients.twig": "./src/views/blocks/clients.twig",
	"./views/blocks/feature-case-studies.twig": "./src/views/blocks/feature-case-studies.twig",
	"./views/blocks/feature-icons.twig": "./src/views/blocks/feature-icons.twig",
	"./views/blocks/feature-services.twig": "./src/views/blocks/feature-services.twig",
	"./views/blocks/feature-two-cols.twig": "./src/views/blocks/feature-two-cols.twig",
	"./views/blocks/feature-why.twig": "./src/views/blocks/feature-why.twig",
	"./views/blocks/hero-alt.twig": "./src/views/blocks/hero-alt.twig",
	"./views/blocks/hero.twig": "./src/views/blocks/hero.twig",
	"./views/blocks/testimonial-carousel.twig": "./src/views/blocks/testimonial-carousel.twig",
	"./views/blocks/testimonial.twig": "./src/views/blocks/testimonial.twig",
	"./views/comment-form.twig": "./src/views/comment-form.twig",
	"./views/comment.twig": "./src/views/comment.twig",
	"./views/footer.twig": "./src/views/footer.twig",
	"./views/html-header.twig": "./src/views/html-header.twig",
	"./views/index.twig": "./src/views/index.twig",
	"./views/menu.twig": "./src/views/menu.twig",
	"./views/modal-menu.twig": "./src/views/modal-menu.twig",
	"./views/navbar.twig": "./src/views/navbar.twig",
	"./views/page-plugin.twig": "./src/views/page-plugin.twig",
	"./views/page.twig": "./src/views/page.twig",
	"./views/partial/copy-block.twig": "./src/views/partial/copy-block.twig",
	"./views/partial/cta.twig": "./src/views/partial/cta.twig",
	"./views/partial/media.twig": "./src/views/partial/media.twig",
	"./views/partial/pagination.twig": "./src/views/partial/pagination.twig",
	"./views/partial/section-block.twig": "./src/views/partial/section-block.twig",
	"./views/partial/svg.twig": "./src/views/partial/svg.twig",
	"./views/search.twig": "./src/views/search.twig",
	"./views/sidebar.twig": "./src/views/sidebar.twig",
	"./views/single-password.twig": "./src/views/single-password.twig",
	"./views/single.twig": "./src/views/single.twig",
	"./views/tease-post.twig": "./src/views/tease-post.twig",
	"./views/tease.twig": "./src/views/tease.twig"
};


function webpackContext(req) {
	var id = webpackContextResolve(req);
	return __webpack_require__(id);
}
function webpackContextResolve(req) {
	if(!__webpack_require__.o(map, req)) {
		var e = new Error("Cannot find module '" + req + "'");
		e.code = 'MODULE_NOT_FOUND';
		throw e;
	}
	return map[req];
}
webpackContext.keys = function webpackContextKeys() {
	return Object.keys(map);
};
webpackContext.resolve = webpackContextResolve;
module.exports = webpackContext;
webpackContext.id = "./src sync recursive \\.twig$";

/***/ }),

/***/ "./src/twig.js":
/*!*********************!*\
  !*** ./src/twig.js ***!
  \*********************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// https://stackoverflow.com/questions/29421409/how-to-load-all-files-in-a-directory-using-webpack-without-require-statements
function requireAll(require) {
  require.keys().forEach(require);
}

requireAll(__webpack_require__("./src sync recursive \\.twig$"));

/***/ }),

/***/ "./src/views/404.twig":
/*!****************************!*\
  !*** ./src/views/404.twig ***!
  \****************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__.p + "views/404.twig";

/***/ }),

/***/ "./src/views/archive.twig":
/*!********************************!*\
  !*** ./src/views/archive.twig ***!
  \********************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__.p + "views/archive.twig";

/***/ }),

/***/ "./src/views/author.twig":
/*!*******************************!*\
  !*** ./src/views/author.twig ***!
  \*******************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__.p + "views/author.twig";

/***/ }),

/***/ "./src/views/base.twig":
/*!*****************************!*\
  !*** ./src/views/base.twig ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__.p + "views/base.twig";

/***/ }),

/***/ "./src/views/blocks/call-to-action.twig":
/*!**********************************************!*\
  !*** ./src/views/blocks/call-to-action.twig ***!
  \**********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__.p + "views/blocks/call-to-action.twig";

/***/ }),

/***/ "./src/views/blocks/clients.twig":
/*!***************************************!*\
  !*** ./src/views/blocks/clients.twig ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__.p + "views/blocks/clients.twig";

/***/ }),

/***/ "./src/views/blocks/feature-case-studies.twig":
/*!****************************************************!*\
  !*** ./src/views/blocks/feature-case-studies.twig ***!
  \****************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__.p + "views/blocks/feature-case-studies.twig";

/***/ }),

/***/ "./src/views/blocks/feature-icons.twig":
/*!*********************************************!*\
  !*** ./src/views/blocks/feature-icons.twig ***!
  \*********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__.p + "views/blocks/feature-icons.twig";

/***/ }),

/***/ "./src/views/blocks/feature-services.twig":
/*!************************************************!*\
  !*** ./src/views/blocks/feature-services.twig ***!
  \************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__.p + "views/blocks/feature-services.twig";

/***/ }),

/***/ "./src/views/blocks/feature-two-cols.twig":
/*!************************************************!*\
  !*** ./src/views/blocks/feature-two-cols.twig ***!
  \************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__.p + "views/blocks/feature-two-cols.twig";

/***/ }),

/***/ "./src/views/blocks/feature-why.twig":
/*!*******************************************!*\
  !*** ./src/views/blocks/feature-why.twig ***!
  \*******************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__.p + "views/blocks/feature-why.twig";

/***/ }),

/***/ "./src/views/blocks/hero-alt.twig":
/*!****************************************!*\
  !*** ./src/views/blocks/hero-alt.twig ***!
  \****************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__.p + "views/blocks/hero-alt.twig";

/***/ }),

/***/ "./src/views/blocks/hero.twig":
/*!************************************!*\
  !*** ./src/views/blocks/hero.twig ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__.p + "views/blocks/hero.twig";

/***/ }),

/***/ "./src/views/blocks/testimonial-carousel.twig":
/*!****************************************************!*\
  !*** ./src/views/blocks/testimonial-carousel.twig ***!
  \****************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__.p + "views/blocks/testimonial-carousel.twig";

/***/ }),

/***/ "./src/views/blocks/testimonial.twig":
/*!*******************************************!*\
  !*** ./src/views/blocks/testimonial.twig ***!
  \*******************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__.p + "views/blocks/testimonial.twig";

/***/ }),

/***/ "./src/views/comment-form.twig":
/*!*************************************!*\
  !*** ./src/views/comment-form.twig ***!
  \*************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__.p + "views/comment-form.twig";

/***/ }),

/***/ "./src/views/comment.twig":
/*!********************************!*\
  !*** ./src/views/comment.twig ***!
  \********************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__.p + "views/comment.twig";

/***/ }),

/***/ "./src/views/footer.twig":
/*!*******************************!*\
  !*** ./src/views/footer.twig ***!
  \*******************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__.p + "views/footer.twig";

/***/ }),

/***/ "./src/views/html-header.twig":
/*!************************************!*\
  !*** ./src/views/html-header.twig ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__.p + "views/html-header.twig";

/***/ }),

/***/ "./src/views/index.twig":
/*!******************************!*\
  !*** ./src/views/index.twig ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__.p + "views/index.twig";

/***/ }),

/***/ "./src/views/menu.twig":
/*!*****************************!*\
  !*** ./src/views/menu.twig ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__.p + "views/menu.twig";

/***/ }),

/***/ "./src/views/modal-menu.twig":
/*!***********************************!*\
  !*** ./src/views/modal-menu.twig ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__.p + "views/modal-menu.twig";

/***/ }),

/***/ "./src/views/navbar.twig":
/*!*******************************!*\
  !*** ./src/views/navbar.twig ***!
  \*******************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__.p + "views/navbar.twig";

/***/ }),

/***/ "./src/views/page-plugin.twig":
/*!************************************!*\
  !*** ./src/views/page-plugin.twig ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__.p + "views/page-plugin.twig";

/***/ }),

/***/ "./src/views/page.twig":
/*!*****************************!*\
  !*** ./src/views/page.twig ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__.p + "views/page.twig";

/***/ }),

/***/ "./src/views/partial/copy-block.twig":
/*!*******************************************!*\
  !*** ./src/views/partial/copy-block.twig ***!
  \*******************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__.p + "views/partial/copy-block.twig";

/***/ }),

/***/ "./src/views/partial/cta.twig":
/*!************************************!*\
  !*** ./src/views/partial/cta.twig ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__.p + "views/partial/cta.twig";

/***/ }),

/***/ "./src/views/partial/media.twig":
/*!**************************************!*\
  !*** ./src/views/partial/media.twig ***!
  \**************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__.p + "views/partial/media.twig";

/***/ }),

/***/ "./src/views/partial/pagination.twig":
/*!*******************************************!*\
  !*** ./src/views/partial/pagination.twig ***!
  \*******************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__.p + "views/partial/pagination.twig";

/***/ }),

/***/ "./src/views/partial/section-block.twig":
/*!**********************************************!*\
  !*** ./src/views/partial/section-block.twig ***!
  \**********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__.p + "views/partial/section-block.twig";

/***/ }),

/***/ "./src/views/partial/svg.twig":
/*!************************************!*\
  !*** ./src/views/partial/svg.twig ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__.p + "views/partial/svg.twig";

/***/ }),

/***/ "./src/views/search.twig":
/*!*******************************!*\
  !*** ./src/views/search.twig ***!
  \*******************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__.p + "views/search.twig";

/***/ }),

/***/ "./src/views/sidebar.twig":
/*!********************************!*\
  !*** ./src/views/sidebar.twig ***!
  \********************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__.p + "views/sidebar.twig";

/***/ }),

/***/ "./src/views/single-password.twig":
/*!****************************************!*\
  !*** ./src/views/single-password.twig ***!
  \****************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__.p + "views/single-password.twig";

/***/ }),

/***/ "./src/views/single.twig":
/*!*******************************!*\
  !*** ./src/views/single.twig ***!
  \*******************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__.p + "views/single.twig";

/***/ }),

/***/ "./src/views/tease-post.twig":
/*!***********************************!*\
  !*** ./src/views/tease-post.twig ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__.p + "views/tease-post.twig";

/***/ }),

/***/ "./src/views/tease.twig":
/*!******************************!*\
  !*** ./src/views/tease.twig ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__.p + "views/tease.twig";

/***/ })

/******/ });
//# sourceMappingURL=twig.js.map