/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily:{
        'helvetica-light':['Helvetica-light','serif'],
        'helvetica-medium':['Helvetica-medium','serif'],
        'helvetica-roman':['Helvetica-roman','serif'],
        'helvesti-spike-regular':['Helvesti-spike-regular','serif'],
        'helvetica-bold-con':['Helvetica-bold-con','serif'],
        'helvetica-heavy-con':['Helvetica-heavy-con','serif'],
      }
    },
  },
  plugins: [],
}

