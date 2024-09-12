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
                'primary': '#1162DB',
                'sidebar-logo': '#FBFBFB',
                'body': '#F0F2F9'
            },
        },
    },
    plugins: [],
}