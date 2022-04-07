const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
  ],

  theme: {
    extend: {
      fontFamily: {
        sans: ['Nunito', ...defaultTheme.fontFamily.sans],
      },
      colors: {
        'white': '#FFFFFF',
        'black': '#191919',
        'greenc': '#00BFA5',
      },
      width: {
        '32rem': '32rem',
      },
      height: {
        '70vh': '70vh',
      },
      backgroundImage: {
        'mha': "url('/img/mha.jpg')",
      }
    },
  },

  plugins: [require('@tailwindcss/forms')],
};
