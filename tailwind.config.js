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
        '45rem': '45rem',
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
        'naruto': "url('/img/naruto.jpg')",
        'opm': "url('/img/opm.jpg')",
        'dt': "url('/img/dt.jpg')",
        'bleach': "url('/img/bleach.jpg')",
        'opp': "url('/img/opp.jpg')",
        'ft': "url('/img/ft.jpg')",
        'fma': "url('/img/fma.jpg')",
        'solol': "url('/img/solol.jpg')",
        'tpn': "url('/img/tpn.jpg')",
        'cm': "url('/img/cm.jpg')",
        'slamdunk31': "url('/img/slamdunk31.jpg')",
        'kuroko17': "url('/img/kuroko17.jpg')",
        'haikyu24': "url('/img/haikyu24.jpg')",
        'e2121': "url('/img/e2121.jpg')",
        'ippo4': "url('/img/ippo4.jpg')",
        'ag7': "url('/img/ag7.jpg')",
        'bluelock': "url('/img/bluelock.jpg')",
        'climber15': "url('/img/climber15.jpg')",
        'ballroom': "url('/img/ballroom.jpg')",
        'aod20': "url('/img/aod20.jpg')",
        'pedal17': "url('/img/pedal17.jpg')",
        'sumo': "url('/img/sumo.jpg')",
        'dreamteam29': "url('/img/dreamteam29.jpg')",
        'real14': "url('/img/real14.jpg')",
        'tennis33': "url('/img/tennis33.jpg')",
        'chihayafuru': "url('/img/chihayafuru.jpg')",
        'sl': "url('/img/sl.jpg')",
        'jujutsu': "url('/img/jujutsu.jpg')",
        'kny': "url('/img/kny.jpg')",
        'haikyu': "url('/img/haikyu.jpg')",
        'vs': "url('/img/vs.jpg')",
        'genres': "url('/img/back.png')",
        'manga': "url('/img/manga.jpg')",
        'drstonesuggest': "url('/img/drstonesuggest.jpg')",
        'opmsuggest': "url('/img/opmsuggest.jpg')",
        'tpnsuggest': "url('/img/tpnsuggest.jpg')",
        'dbzsuggest': "url('/img/dbzsuggest.jpg')",
      },
      backgroundSize: {
        '100%': '100%',
        '105%': '105%',
      },
    },
  },

  plugins: [require('@tailwindcss/forms')],
};
