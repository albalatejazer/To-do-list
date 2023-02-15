/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        fontSize: {
            small: ["14px"],
            regular: ["16px"],
            medium: ["18px"],
            large: ["24px"],
        },
        extend: {},
    },
    plugins: [],
};
