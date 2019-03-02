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
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! ./main */ "./resources/js/main.js");

/***/ }),

/***/ "./resources/js/main.js":
/*!******************************!*\
  !*** ./resources/js/main.js ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(document).ready(function () {
  $('.add-group').click(function (event) {
    event.preventDefault();
    $('.li-add').css("transform", "scale(1)");
  });
  $('.btn-edit-check').click(function () {
    var id = $(this).attr('data-id');
    var name = $('#input-data-' + id).val();
    $.ajax({
      url: "/categories/" + id,
      type: "POST",
      data: {
        name: name,
        _method: 'PUT'
      },
      success: function success(data) {
        console.log(data);
      },
      error: function error() {
        alert('1');
      }
    });
  }); // $('.buttonAddWork').click(function(){
  //     $x = $('dataAdd').val();
  //     console.log($x);
  // });

  $('.buttonAddWork').click(function (event) {
    event.preventDefault();
    var name = $('#list').val();
    $.ajax({
      url: "/categories",
      type: "POST",
      data: {
        name: name
      },
      success: function success(response) {// console.log(response.Category[1]);
      }
    });
  });
  $('.btn-edit').click(function (event) {
    event.preventDefault();
    $a = $(this).attr('data-id');
    $('.input-edit-' + $a).fadeToggle();
    $('.data-edit-' + $a).fadeToggle();
    $('.btn-edit-check-' + $a).fadeToggle();
    $(this).fadeToggle();
  });
});

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

throw new Error("Module build failed (from ./node_modules/css-loader/index.js):\nModuleBuildError: Module build failed (from ./node_modules/sass-loader/lib/loader.js):\n\n@import 'variables';\n       ^\n      Can't find stylesheet to import.\n  ╷\n5 │ @import 'variables';\n  │         ^^^^^^^^^^^\n  ╵\n  stdin 5:9  root stylesheet\n      in /Users/Vokiet/Projects/work/resources/sass/app.scss (line 5, column 9)\n    at runLoaders (/Users/Vokiet/Projects/work/node_modules/webpack/lib/NormalModule.js:301:20)\n    at /Users/Vokiet/Projects/work/node_modules/loader-runner/lib/LoaderRunner.js:367:11\n    at /Users/Vokiet/Projects/work/node_modules/loader-runner/lib/LoaderRunner.js:233:18\n    at context.callback (/Users/Vokiet/Projects/work/node_modules/loader-runner/lib/LoaderRunner.js:111:13)\n    at render (/Users/Vokiet/Projects/work/node_modules/sass-loader/lib/loader.js:52:13)\n    at Function.$2 (/Users/Vokiet/Projects/work/node_modules/sass/sass.dart.js:24106:48)\n    at w6.$2 (/Users/Vokiet/Projects/work/node_modules/sass/sass.dart.js:15161:15)\n    at u6.v7 (/Users/Vokiet/Projects/work/node_modules/sass/sass.dart.js:9031:42)\n    at u6.v6 (/Users/Vokiet/Projects/work/node_modules/sass/sass.dart.js:9033:32)\n    at ik.uh (/Users/Vokiet/Projects/work/node_modules/sass/sass.dart.js:8373:46)\n    at tF.$0 (/Users/Vokiet/Projects/work/node_modules/sass/sass.dart.js:8515:7)\n    at Object.ex (/Users/Vokiet/Projects/work/node_modules/sass/sass.dart.js:1532:80)\n    at aj.bb (/Users/Vokiet/Projects/work/node_modules/sass/sass.dart.js:8436:3)\n    at iz.bb (/Users/Vokiet/Projects/work/node_modules/sass/sass.dart.js:8366:25)\n    at iz.cA (/Users/Vokiet/Projects/work/node_modules/sass/sass.dart.js:8353:6)\n    at p8.cA (/Users/Vokiet/Projects/work/node_modules/sass/sass.dart.js:8143:35)\n    at Object.n (/Users/Vokiet/Projects/work/node_modules/sass/sass.dart.js:1405:19)\n    at /Users/Vokiet/Projects/work/node_modules/sass/sass.dart.js:5110:51\n    at ww.a (/Users/Vokiet/Projects/work/node_modules/sass/sass.dart.js:1416:71)\n    at ww.$2 (/Users/Vokiet/Projects/work/node_modules/sass/sass.dart.js:8158:23)\n    at v9.$2 (/Users/Vokiet/Projects/work/node_modules/sass/sass.dart.js:8153:25)\n    at u6.v7 (/Users/Vokiet/Projects/work/node_modules/sass/sass.dart.js:9031:42)\n    at u6.v6 (/Users/Vokiet/Projects/work/node_modules/sass/sass.dart.js:9033:32)\n    at ik.uh (/Users/Vokiet/Projects/work/node_modules/sass/sass.dart.js:8373:46)\n    at tF.$0 (/Users/Vokiet/Projects/work/node_modules/sass/sass.dart.js:8515:7)\n    at Object.ex (/Users/Vokiet/Projects/work/node_modules/sass/sass.dart.js:1532:80)\n    at aj.bb (/Users/Vokiet/Projects/work/node_modules/sass/sass.dart.js:8436:3)\n    at iz.bb (/Users/Vokiet/Projects/work/node_modules/sass/sass.dart.js:8366:25)\n    at iz.cA (/Users/Vokiet/Projects/work/node_modules/sass/sass.dart.js:8353:6)\n    at Object.eval (eval at BU (/Users/Vokiet/Projects/work/node_modules/sass/sass.dart.js:656:15), <anonymous>:3:37)\n    at u6.v7 (/Users/Vokiet/Projects/work/node_modules/sass/sass.dart.js:9031:42)\n    at u6.v6 (/Users/Vokiet/Projects/work/node_modules/sass/sass.dart.js:9033:32)\n    at ik.uh (/Users/Vokiet/Projects/work/node_modules/sass/sass.dart.js:8373:46)\n    at tF.$0 (/Users/Vokiet/Projects/work/node_modules/sass/sass.dart.js:8515:7)\n    at Object.ex (/Users/Vokiet/Projects/work/node_modules/sass/sass.dart.js:1532:80)\n    at aj.bb (/Users/Vokiet/Projects/work/node_modules/sass/sass.dart.js:8436:3)");

/***/ }),

/***/ 0:
/*!*************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/sass/app.scss ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /Users/Vokiet/Projects/work/resources/js/app.js */"./resources/js/app.js");
module.exports = __webpack_require__(/*! /Users/Vokiet/Projects/work/resources/sass/app.scss */"./resources/sass/app.scss");


/***/ })

/******/ });