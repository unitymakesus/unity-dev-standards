---
title: JavaScript Coding Standards
description:
extends: _layouts.main
section: content
---

# JavaScript Coding Standards
ECMAScript 6 (**ES6**, for short) is the current baseline standard for writing  JavaScript code in our projects.

## Style
**ESLint** runs on every build task in our starter theme to help enforce consistent code styling and to catch common errors. [Our current ESLint configuration](https://github.com/unitymakesus/starter-template/blob/master/wp-content/themes/unity-child/.eslintrc.js) can be reviewed so that it can be re-used on other standalone projects.

Code style and linting aside, all JavaScript must be written cleanly, consistently, and easy to read. Whether you are using jQuery or vanilla JavaScript, we ask that you write consistently.

Add comments using **JSDoc** syntax. An example of a JSDoc comment describing a function:
```js
/**
  * Find matches in nodeList.
  *
  * @param {array} nodeList
  * @param {object} options
  */
function getMatchedNodes(nodeList, options) {
  ...
```

## Organization
JavaScript should be pared down into small, resuable modules for better organization using the export and import.

Example:
```js
// assets/scripts/util/prefersReducedMotion.js

/**
 * Check user settings for reduced motion preferences, if available.
 */
const prefersReducedMotion = () => {
  return window.matchMedia('(prefers-reduced-motion)').matches ? true : false;
}

export default prefersReducedMotion;
```

And then our `prefersReducedMotion` function can be used on either the main script file or a DOM-based route (if we are working with our starter theme).
```js
// assets/scripts/main.js

import prefersReducedMotion from './util/prefersReducedMotion';

init() {
  if (prefersReducedMotion()) {
    // Execute code without animation...
  } else {
    // Execute code with animation...
  }
}
...
```

## Libraries
JavaScript libraries may be open-sourced and free but there is always an associated cost for the end user. These choices can directly impact the user experience in positive and negative ways. When considering a library for a project, please consider the end user by invesigating the following criteria:

* Do you actually need this library? For example, instead of downloading a "scroll into viewport" library, consider using the `IntersectionObserver` API.
* What is the library's declared browser support?
* Are there any dependencies? (jQuery, for example)?
* What is the total import cost? Is the library modular (allows for partial importing using Object Destructuring) or does it have to be used in full?
* Does the library have an active or stale release cycle?
* Does the library consider accessibility anywhere in its README or documentation? If so, does it meet or make attempts to meet WCAG 2.0?

When working with JavaScript libraries, a package manager (Yarn or npm) should be used to keep track of each library and its desired version to be used in your project.

## Additional Resources
* [MDN: JavaScript](https://developer.mozilla.org/en-US/docs/Web/JavaScript)
* [WordPress JavaScript Coding Standards](https://make.wordpress.org/core/handbook/best-practices/coding-standards/javascript/)
* [Caniuse?](https://caniuse.com/)