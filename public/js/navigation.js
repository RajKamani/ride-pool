/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!************************************!*\
  !*** ./resources/js/navigation.js ***!
  \************************************/
var drawerToggle = document.querySelector('.main-header__drawer-toggle');
var backdrop = document.querySelector('.backdrop');
var sideDrawer = document.querySelector('.main-header__sidedrawer');

var openSideDrawerHandler = function openSideDrawerHandler() {
  backdrop.style.display = 'block';
  setTimeout(function () {
    sideDrawer.classList.add('open');
    backdrop.classList.add('backdrop-enable');
  }, 100);
};

var closeSideDrawerHandler = function closeSideDrawerHandler() {
  backdrop.classList.remove('backdrop-enable');
  setTimeout(function () {
    sideDrawer.classList.remove('open');
    backdrop.style.display = 'none';
  }, 100);
};

drawerToggle.addEventListener('click', openSideDrawerHandler);
sideDrawer.addEventListener('click', closeSideDrawerHandler);
backdrop.addEventListener('click', closeSideDrawerHandler);
/******/ })()
;