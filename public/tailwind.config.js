/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js,css}"],
  theme: {
    extend: {
      backgroundImage: {
        pattern: "url('../assets/topography.svg')",
      },
    },
  },
  plugins: [],
};
