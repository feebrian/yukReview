/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            container: {
                center: true,
                padding: "3rem",
            },
            colors: {
                "soft-red": "#EC4C56",
                "soft-dark": "#242933",
            },
        },
    },
    plugins: [],
};
