/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
  ],
  theme: {
      colors: {
          white: '#edf2f4',
          black: '#000',
      },
    extend: {},
  },
  plugins: [],
}
