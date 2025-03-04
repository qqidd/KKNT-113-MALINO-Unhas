import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/**/*.{html,js,php}', // Atur lokasi file Anda yang menggunakan tailwind
        './vendor/**/*.{html,js}', // Jika menggunakan Laravel atau framework lainnya
    ],
    safelist: [
        'fa-solid',
        'fa-home',
        'fa-user',
        'fa-envelope',
        'fa-phone' // Tambahkan ikon lain yang digunakan
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                inter: ['inter', ...defaultTheme.fontFamily.sans],
                sora: ['sora', ...defaultTheme.fontFamily.sans],
                IBMPlexSans: ['IBM Plex Sans', ...defaultTheme.fontFamily.sans]
            },
            colors: {
                hitam:"#272727",
                hijau:"#3BF686",
                biru:"#4CA9FF",
                hitamK:"#323443",
                hitamF:"#887777",
                putihT:"#D4D4D4",
                hitamS:"#3F4152",
                biruK:"#242632",
                kuningR:"#E8B819",
                merahRM:"#D42929",
                orangeM:"#FFA500",
                hijauM:"#32CD32",
                hitamH:"#4D4D4D",
                hitamKTK:"#303030",
                putihA:"#858585 "
            },
            animation: {
                'spin-slow': 'spin 3s linear infinite',
                'scale-up': 'scale-up 0.5s ease-in-out',
            },
            keyframes: {
                'scale-up': {
                  '0%': { transform: 'scale(1)' },
                  '100%': { transform: 'scale(1.1)' },
                },
            },
        },
    },

    plugins: [forms, typography],
};
