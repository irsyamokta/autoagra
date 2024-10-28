import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./node_modules/flowbite/**/*.js"
    ],

    theme: {
        extend: {
            fontFamily: {
                poppins: ['Poppins', 'sans-serif'],
            },
            screens: {
                ...defaultTheme.screens,
            },
            colors: {
                primary: '#207139',
                grey: '#EFEFEF',
            },
            boxShadow: {
                primary: '0 35px 60px -15px rgba(0, 0, 0, 0.3)',
            },
            backgroundImage: {
                'hero-bg': "url('assets/img/img-bg.png')",
            }

        },
    },

    plugins: [
        forms,
        require('flowbite/plugin')
    ],
};
