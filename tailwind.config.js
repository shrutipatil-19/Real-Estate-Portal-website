import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Georgia', 'serif'], // Use Georgia as the primary font
            },
            colors: {
                customBorder: '#666666',
                customGray: '#3C3B3B',
                primary:'#2A4D69'
              },
        },
    },

    plugins: [forms],
};
