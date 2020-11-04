module.exports = {
  purge: {
    content: [
      'source/**/*.html',
      'source/**/*.md',
      'source/**/*.js',
      'source/**/*.php',
      'source/**/*.vue',
    ],
    options: {
      whitelist: [
        /language/,
        /hljs/,
      ],
    },
  },
  theme: {
    extend: {
      colors: {
        'unity-purple': '#382f77',
        'unity-yellow': '#f4911e',
        'unity-orange': '#d35400',
      },
      fontFamily: {
        sans: [
          'Chivo, Helvetica, Arial, sans-serif',
        ],
      },
      maxWidth: {
        none: 'none',
        '7xl': '80rem',
        '8xl': '88rem'
      },
    },
  },
  variants: {
    position: ['responsive', 'hover', 'focus'],
  },
  plugins: [],
}
