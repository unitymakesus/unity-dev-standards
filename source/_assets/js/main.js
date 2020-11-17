import hljs from 'highlight.js/lib/core';
import html from 'highlight.js/lib/languages/xml';
import css from 'highlight.js/lib/languages/css';
import scss from 'highlight.js/lib/languages/scss';
import javascript from 'highlight.js/lib/languages/javascript';
import php from 'highlight.js/lib/languages/php';
import bash from 'highlight.js/lib/languages/bash';

/**
 * Menu state / interaction.
 */
const menuToggle = document.getElementById('nav-menu-toggle');
const menu = document.getElementById('js-nav-menu');

menuToggle.addEventListener('click', () => {
  let expanded = menuToggle.getAttribute('aria-expanded') === 'true' || false;
  menuToggle.setAttribute('aria-expanded', !expanded);
  menu.classList.toggle('hidden');
});

/**
 * Highlight code blocks.
 */
hljs.registerLanguage('html', html);
hljs.registerLanguage('scss', scss);
hljs.registerLanguage('css', css);
hljs.registerLanguage('javascript', javascript);
hljs.registerLanguage('php', php);
hljs.registerLanguage('bash', bash);

/**
 *
 */
document.querySelectorAll('pre code').forEach((block) => {
  hljs.highlightBlock(block);
});
