/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        cyan: {
          brand: '#0098DA',
          DEFAULT: '#0098DA',
        },
        blue: {
          hero: '#1CA0FF',
        },
      },
      fontFamily: {
        heading: ['"Permanent Marker"', 'cursive'],
        body: ['Inter', 'sans-serif'],
      },
    },
  },
  plugins: [],
}
