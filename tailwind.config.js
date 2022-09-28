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
        primary: '#0d9488'
      },
      container: {
        center: true
      }
    },
  },
  plugins: [
    require('@tailwindcss/forms')
  ],
}
