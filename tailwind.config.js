const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
  ],

  theme: {
    extend: {
      container: {
        screens: {
          sm: '640px',
          md: '768px',
          lg: '1024px',
          xl: '1280px'
        }
      },
      animation: {
        'news': 'anim .3s ease-in-out',
      },
      fontFamily: {
        sans: ['Nunito', ...defaultTheme.fontFamily.sans],
      },
      colors: {
        'white': '#FFFFFF',
        'black': '#191919',
        'greenc': '#00BFA5',
        'greenh': '#008C79',
      },
      width: {
        '32rem': '32rem',
        '43rem': '43rem',
      },
      height: {
        '90': '22rem',
        '28rem': '28rem',
        '31rem': '31rem',
        '70vh': '70vh',
        '45vh': '45vh',
      },
      backgroundImage: {
        'mha': "url('/img/mha.jpg')",
        'snk': "url('/img/snk.jpg')",
        'berserk': "url('/img/berserk.jpg')",
        'op': "url('/img/op.jpg')",
        'tg': "url('/img/tg.jpg')",
        'sl': "url('/img/sl.jpg')",
        'jujutsu': "url('/img/jujutsu.jpg')",
        'kny': "url('/img/kny.jpg')",
        'haikyu': "url('/img/haikyu.jpg')",
        'vs': "url('/img/vs.jpg')",
        'genres': "url('/img/back.png')",
        'manga': "url('/img/manga.jpg')",
      },
      backgroundSize: {
        '100%': '100%',
        '105%': '105%',
      },
    },
  },

  plugins: [require('@tailwindcss/forms')],
};
