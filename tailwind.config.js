/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        fontFamily: {
            body : ['Poppins']
        },
        extend: {
          colors :{
            'primary' : '#f12711',
            'primary-dark' : '#800C00',
            'primary-light' : '#FF1900'
          },
        },
    },
    plugins: [require("flowbite/plugin")],
};
