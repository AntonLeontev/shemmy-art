/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        fontFamily: {
            display: ["Oswald"],
            body: ["Oswald", "sans-serif"],
        },
        extend: {
            backgroundImage: {
                home: "url('/resources/images/bg-home.webp')",
            },
        },
    },
    plugins: [],
};
