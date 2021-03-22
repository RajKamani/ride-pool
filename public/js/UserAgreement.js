/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!***************************************!*\
  !*** ./resources/js/UserAgreement.js ***!
  \***************************************/
var checkbox = document.getElementById('agree');
var button = document.querySelector('.flat-button');

checkbox.onchange = function () {
  if (this.checked) {
    button.disabled = false;
    button.classList.remove('disabled-button');
  } else {
    button.disabled = true;
    button.classList.add('disabled-button');
  }
};
/******/ })()
;