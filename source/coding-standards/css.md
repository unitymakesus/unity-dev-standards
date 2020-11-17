---
title: CSS Coding Standards
description:
extends: _layouts.main
section: content
---

# CSS Coding Standards
We primarily author stylesheets using [Sass](https://sass-lang.com/) as a pre-processor.

## Style
**Stylelint** runs on every build task in our starter theme to enforce consistent code styling and to avoid common errors. [Our current Stylelint configuration](https://github.com/unitymakesus/starter-template/blob/master/wp-content/themes/unity-child/.stylelintrc.js) can be reviewed so that it can be re-used on other standalone projects. Code style and linting aside, all stylesheets must be written cleanly, consistently, and easy to read.

## Organization

## Accessibility
This is not an exhaustive resource for ensuring accessibility across the project when it comes to stylesheets. However, there are some noteworthy techniques we would like to highlight here and we highly encourage their usage.

### Link Wrapping
This technique requires a relative parent.
```scss
.a11y-link-wrap::after {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  content: '';
  z-index: 11;
}
```

Example of a common card / blog excerpt pattern:
```html
<!-- Instead of this... -->
<a class="card" href="#">
  <img src="..." alt="This image has some alt text that would show up in the link context." />
  <h2>Example Title</h2>
  <p>Lorem ipsum...</p>
</a>

<!-- Try this! -->
<div class="card relative-class">
  <img src="..." alt="This image has some alt text that would be outside of the link context." />
  <h2>
    <a class="a11y-link-wrap" href="#">Example Title</a>
  </h2>
  <p>Lorem ipsum...</p>
</a>
```

### Screen Reader Text
This is an excellent utility class that can be applied on elements, such as an anchor link, for additional context.
```scss
.screen-reader-text,
.sr-only {
  clip: rect(1px, 1px, 1px, 1px);
  clip-path: polygon(0 0, 0 0, 0 0, 0 0);
  position: absolute !important;
  white-space: nowrap;
  height: 1px;
  width: 1px;
  overflow: hidden;

  &:focus {
    clip: auto;
    clip-path: none;
    display: block;
    height: auto;
    left: 5px;
    top: 5px;
    width: auto;
    z-index: 100000;
  }
}
```

Example using an anchor tag:
```html
<a href="#">Learn more <span class="screen-reader-text">about how to write accessible link text.</span></a>
```

## Libraries
TBD...

## Additional Resources
* [MDN: CSS](https://developer.mozilla.org/en-US/docs/Web/CSS)
* [Caniuse?](https://caniuse.com/)