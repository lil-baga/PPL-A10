/** @type {import('tailwindcss').Config} */
export default {
  content: ["./resources/views/**/*.{html,js}", "./node_modules/flowbite/**/*.js"],
  theme: {
    extend: {
    }
  },
  plugins: [require('flowbite/plugin')],
}
