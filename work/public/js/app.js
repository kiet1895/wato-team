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
  $('body').on('click', '.add-group', function (event) {
    event.preventDefault(); //    $('.group').append($('.div-li-add').html())

    $('.li-add').css("transform", "scale(1)");
  }); //delete

  $('body').on('click', '.delete', function () {
    var id = $(this).data('id');
    $.ajax({
      url: "/categories/" + id,
      type: 'DELETE',
      data: {
        "id": id
      },
      success: function success(data) {// if(data.success == true){ 
        //     setTimeout(function(){
        //          location.reload();
        //     }, 100); 
        //  }
      },
      error: function error() {
        alert('1');
      }
    });
    $('.li-' + id).css('display', 'none');
  }); //story

  $('body').on('click', '.buttonAddWork', function (event) {
    event.preventDefault();
    var name = $('#list').val();
    $.ajax({
      url: "/categories",
      type: "POST",
      data: {
        name: name
      },
      success: function success(data) {
        $('.data-edit-id').addClass('data-edit-' + data.id);
        $('.input-edit-id').addClass('input-edit-' + data.id);
        $('.btn-edit-id').attr('data-id', data.id);
        $('.btn-edit-check-id').attr('data-id', data.id);
        $('.input-data-id').addClass('input-data-' + data.id);
        $('.btn-edit-check-id').addClass('btn-edit-check-' + data.id);
        $('.delete').attr('data-id', data.id);
        $('.li-id').addClass('li-' + data.id);
      }
    });
    $('.input-data-id').attr('value', name);
    $('.group').append($('.add-new-list').html());
    $('.name-add').append(name);
    $('.li-add').css('display', 'none');
  }); //update

  $('body').on('click', '.btn-edit-check', function () {
    var id = $(this).attr('data-id');
    var name = $('.input-data-' + id).val();
    console.log(name);
    $.ajax({
      url: "/categories/" + id,
      type: "POST",
      data: {
        name: name,
        _method: 'PUT'
      },
      success: function success(data) {// if(data.success == true){ 
        //     setTimeout(function(){
        //          location.reload();
        //     }, 100); 
        //  }   
      },
      error: function error() {
        alert('error');
      }
    });
  });
  $('body').on('click', '.btn-edit', function () {
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

// removed by extract-text-webpack-plugin

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