const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

mix.postCss('resources/assets/css/app.css', 'public/css', [
    tailwindcss('./tailwind.js')
]);
