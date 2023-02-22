const colors = require('tailwindcss/colors');


module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    // textColor: theme => theme('colors'),
    backgroundColor: (theme) => theme('colors'),
    extend: {
      colors: {
        blue: {
          1: '#989FFE',
          2: '#5372e7',
        },
        red: {
          1: '#e8264f',
        },
        green: {
          1: '#1D907E',
        },
        yellow: {
          1: '#FDB815',
        }

      },
    },
    colors: {
      transparent: 'transparent',
      black: colors.black,
      white: colors.white,
      purple: colors.purple,
      green: colors.green,
      blue: colors.blue,
      gray: colors.trueGray,
      indigo: colors.indigo,
      rose: colors.rose,
      yellow: colors.amber,
      lime: colors.lime,
      red: colors.red,
      warmGray: colors.warmGray,
    },
    zIndex: {
      '0': 0,
     '10': 10,
     '20': 20,
     '30': 30,
     '40': 40,
     '50': 50,
     '25': 25,
     '75': 75,
     '100': 100,
     '999': 999,
      'auto': 'auto',
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
