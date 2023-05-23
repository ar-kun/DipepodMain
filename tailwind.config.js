import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        container: {
            center: true,
            padding: "16px",
        },
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: "#132A59",
                dark: "#0f172a",
                secondary: "#324F8C",
                third: "#FF4C00",
            },
            borderRadius: {
                large: "150px",
                medium: "50px",
            },
            screens: {
                "2xl": "1320px",
            },
        },
    },

    plugins: [forms],
};
