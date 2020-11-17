---
title: Coding Standards
description:
extends: _layouts.main
section: content
---

# Coding Standards

## Browser & Device Support
Unless otherwise noted, all front-end code should be written to support the following browsers:

* Microsoft Edge
* Firefox
* Google Chrome
* Safari

If any code is partially or fully unsupported in these browsers, please consider using a polyfill or progressive enhancement to provide a suitable baseline experience for users. While we do not have device specific project requirements, we follow a mobile-first approach to responsive web design.

## Documentation
For scripting languages, please document all files, classes, methods and functions, and properties with [JSDoc](https://jsdoc.app/index.html) (for JavaScript) comments or a [DocBlock](https://docs.phpdoc.org/latest/) (for PHP). Either comment type is a piece of documentation in your source code that informs you what the function of a certain class, method or other Structural Element is. These should only be added if it provides value to the understanding of the code it is describing.

Inline comments (use `//`) should also be used but be brief.

Additionally, temporary comments, such as removed code statements, error logging, or TODOs, should be removed once they are no longer required in the project. Please treat a codebase like it's your dinnertable and clean up after you're done.
