/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!************************************!*\
  !*** ./resources/js/navigation.js ***!
  \************************************/
var drawerToggle = document.querySelector('.main-header__drawer-toggle');
var sideDrawer = document.querySelector('.main-header__sidedrawer');
drawerToggle.addEventListener('click', function () {
  sideDrawer.classList.add('open');
});
sideDrawer.addEventListener('click', function () {
  sideDrawer.classList.remove('open');
});
/******/ })()
;