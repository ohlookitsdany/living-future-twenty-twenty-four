/******/ (() => { // webpackBootstrap
/*!**************************************!*\
  !*** ./blocks/outline-block/view.js ***!
  \**************************************/
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
document.addEventListener("DOMContentLoaded", function () {
  // Function to sanitize the heading text to create an ID
  function generateAnchor(text) {
    return text.toLowerCase() // Convert to lowercase
    .trim() // Remove leading/trailing whitespace
    .replace(/[^\w\s-]/g, '') // Remove all special characters except hyphens and spaces
    .replace(/\s+/g, '-') // Replace spaces with hyphens
    .replace(/-+/g, '-'); // Ensure there are no multiple hyphens in a row
  }

  // Select all h2 tags
  const headings = document.querySelectorAll('h2');

  // Loop through each heading
  headings.forEach(function (heading) {
    // Check if the heading already has an ID
    if (!heading.id) {
      // Generate an ID based on the heading text content
      const id = generateAnchor(heading.textContent || heading.innerText);
      // Set the generated ID as the heading's ID attribute
      heading.id = id;
    }
  });
});

/* eslint-enable no-console */
/******/ })()
;
//# sourceMappingURL=view.js.map