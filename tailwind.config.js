module.exports = {
  purge: [],
  darkMode: ["class"], // or 'media' or 'class'
  content: [

    './resources/**/**/**/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  theme: {

    extend: {
        boxShadow: {
            'custom': '0px 0px 10px 1px rgba(0, 0, 0, 0.1)',
            'dark': '0px 0px 10px 1px rgba(0, 0, 0, 0.3)',

          },

    },
  },
  variants: {
    extend: {},
  },
  plugins: [],

}
