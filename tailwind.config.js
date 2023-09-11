/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        primary: '#185A4E',
        secondary: '#51C6B0',
        background:'rgba(24, 90, 78,0.05)',
        card_1: '#185A4E',
        card_1_icon: '#D3FBC0',
        card_2_icon: '#B0CBEC',
        card_3_icon: '#E9B7CC',
      },
      fontFamily: {
        "lato": ['Lato', 'sans-serif'],
        "poppin": ['Poppins' , 'sans-serif']
     }
    },
  },
  plugins: [],
}

