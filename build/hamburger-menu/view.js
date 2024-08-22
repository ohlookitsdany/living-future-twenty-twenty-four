/******/ (() => { // webpackBootstrap
/*!***************************************!*\
  !*** ./blocks/hamburger-menu/view.js ***!
  \***************************************/
/**
 * Use this file for JavaScript code that you want to run in the front-end
 * on posts/pages that contain this block.
 *
 * When this file is defined as the value of the `viewScript` property
 * in `block.json` it will be enqueued on the front end of the site.
 *
 * Example:
 *
 * ```js
 * {
 *   "viewScript": "file:./view.js"
 * }
 * ```
 *
 * If you're not making any changes to this file because your project doesn't need any
 * JavaScript running in the front-end, then you should delete this file and remove
 * the `viewScript` property from `block.json`.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-metadata/#view-script
 */

/* eslint-disable no-console */
document.addEventListener('DOMContentLoaded', function () {
  $ = jQuery;
  function setupToggles(selector) {
    let toggles = Array.from(document.querySelectorAll(`${selector} .toggleElem`));
    let contents = Array.from(document.querySelectorAll(`${selector} .toggleContent`));
    let closers = Array.from(document.querySelectorAll(`${selector} .toggleClose`));
    toggles.forEach((toggle, i) => {
      if (toggle.classList.contains('toggleIsSetup') && selector !== '.elementor-popup-modal') return;
      toggle.classList.add('toggleIsSetup');
      toggle.addEventListener('click', function (e) {
        e.preventDefault();
        toggle.classList.toggle('toggleIsActive');
        jQuery(contents[i]).slideToggle();
        if (toggle.classList.contains('toggleIsActive')) resizeEvent();
      });
    });
    closers.forEach((closer, i) => {
      if (closer.classList.contains('toggleIsSetup') && selector !== '.elementor-popup-modal') return;
      closer.classList.add('toggleIsSetup');
      closer.addEventListener('click', function (e) {
        e.preventDefault();
        toggles[i].classList.remove('toggleIsActive');
        jQuery(contents[i]).slideUp();
      });
    });
    contents.forEach(content => {
      if (content.classList.contains('toggleIsSetup') && selector !== '.elementor-popup-modal') return;
      content.classList.add('toggleIsSetup');
      content.style.display = 'none';
    });
  }
  setupToggles('');
  jQuery(document).on('elementor/popup/show', () => {
    setupToggles('.elementor-popup-modal');
  });
  function resizeEvent() {
    setTimeout(function () {
      window.dispatchEvent(new Event('resize'));
    }, 400);
  }
});
/* eslint-enable no-console */
/******/ })()
;
//# sourceMappingURL=view.js.map