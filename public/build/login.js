"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["login"],{

/***/ "./assets/js/login.js":
/*!****************************!*\
  !*** ./assets/js/login.js ***!
  \****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.regexp.exec.js */ "./node_modules/core-js/modules/es.regexp.exec.js");
/* harmony import */ var core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_string_replace_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.string.replace.js */ "./node_modules/core-js/modules/es.string.replace.js");
/* harmony import */ var core_js_modules_es_string_replace_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_replace_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _styles_login_css__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../styles/login.css */ "./assets/styles/login.css");


 // Wrap every letter in a span

var textWrapper = document.querySelector('.ml10 .letters');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
anime.timeline({
  loop: true
}).add({
  targets: '.ml10 .letter',
  rotateY: [-90, 0],
  duration: 1300,
  delay: function delay(el, i) {
    return 45 * i;
  }
}).add({
  targets: '.ml10',
  opacity: 0,
  duration: 1000,
  easing: "easeOutExpo",
  delay: 1000
});

/***/ }),

/***/ "./assets/styles/login.css":
/*!*********************************!*\
  !*** ./assets/styles/login.css ***!
  \*********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["vendors-node_modules_core-js_internals_export_js-node_modules_core-js_internals_function-appl-5a1e08","vendors-node_modules_core-js_modules_es_string_replace_js"], () => (__webpack_exec__("./assets/js/login.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoibG9naW4uanMiLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7Ozs7Ozs7Ozs7Q0FHQTs7QUFDQSxJQUFJQSxXQUFXLEdBQUdDLFFBQVEsQ0FBQ0MsYUFBVCxDQUF1QixnQkFBdkIsQ0FBbEI7QUFDQUYsV0FBVyxDQUFDRyxTQUFaLEdBQXdCSCxXQUFXLENBQUNJLFdBQVosQ0FBd0JDLE9BQXhCLENBQWdDLEtBQWhDLEVBQXVDLGdDQUF2QyxDQUF4QjtBQUVBQyxLQUFLLENBQUNDLFFBQU4sQ0FBZTtFQUFDQyxJQUFJLEVBQUU7QUFBUCxDQUFmLEVBQ0dDLEdBREgsQ0FDTztFQUNIQyxPQUFPLEVBQUUsZUFETjtFQUVIQyxPQUFPLEVBQUUsQ0FBQyxDQUFDLEVBQUYsRUFBTSxDQUFOLENBRk47RUFHSEMsUUFBUSxFQUFFLElBSFA7RUFJSEMsS0FBSyxFQUFFLGVBQUNDLEVBQUQsRUFBS0MsQ0FBTDtJQUFBLE9BQVcsS0FBS0EsQ0FBaEI7RUFBQTtBQUpKLENBRFAsRUFNS04sR0FOTCxDQU1TO0VBQ0xDLE9BQU8sRUFBRSxPQURKO0VBRUxNLE9BQU8sRUFBRSxDQUZKO0VBR0xKLFFBQVEsRUFBRSxJQUhMO0VBSUxLLE1BQU0sRUFBRSxhQUpIO0VBS0xKLEtBQUssRUFBRTtBQUxGLENBTlQ7Ozs7Ozs7Ozs7O0FDUEEiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvanMvbG9naW4uanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL3N0eWxlcy9sb2dpbi5jc3M/MTZmMSJdLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQgJy4uL3N0eWxlcy9sb2dpbi5jc3MnO1xyXG5cclxuXHJcbi8vIFdyYXAgZXZlcnkgbGV0dGVyIGluIGEgc3BhblxyXG52YXIgdGV4dFdyYXBwZXIgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcubWwxMCAubGV0dGVycycpO1xyXG50ZXh0V3JhcHBlci5pbm5lckhUTUwgPSB0ZXh0V3JhcHBlci50ZXh0Q29udGVudC5yZXBsYWNlKC9cXFMvZywgXCI8c3BhbiBjbGFzcz0nbGV0dGVyJz4kJjwvc3Bhbj5cIik7XHJcblxyXG5hbmltZS50aW1lbGluZSh7bG9vcDogdHJ1ZX0pXHJcbiAgLmFkZCh7XHJcbiAgICB0YXJnZXRzOiAnLm1sMTAgLmxldHRlcicsXHJcbiAgICByb3RhdGVZOiBbLTkwLCAwXSxcclxuICAgIGR1cmF0aW9uOiAxMzAwLFxyXG4gICAgZGVsYXk6IChlbCwgaSkgPT4gNDUgKiBpXHJcbiAgfSkuYWRkKHtcclxuICAgIHRhcmdldHM6ICcubWwxMCcsXHJcbiAgICBvcGFjaXR5OiAwLFxyXG4gICAgZHVyYXRpb246IDEwMDAsXHJcbiAgICBlYXNpbmc6IFwiZWFzZU91dEV4cG9cIixcclxuICAgIGRlbGF5OiAxMDAwXHJcbiAgfSk7IiwiLy8gZXh0cmFjdGVkIGJ5IG1pbmktY3NzLWV4dHJhY3QtcGx1Z2luXG5leHBvcnQge307Il0sIm5hbWVzIjpbInRleHRXcmFwcGVyIiwiZG9jdW1lbnQiLCJxdWVyeVNlbGVjdG9yIiwiaW5uZXJIVE1MIiwidGV4dENvbnRlbnQiLCJyZXBsYWNlIiwiYW5pbWUiLCJ0aW1lbGluZSIsImxvb3AiLCJhZGQiLCJ0YXJnZXRzIiwicm90YXRlWSIsImR1cmF0aW9uIiwiZGVsYXkiLCJlbCIsImkiLCJvcGFjaXR5IiwiZWFzaW5nIl0sInNvdXJjZVJvb3QiOiIifQ==