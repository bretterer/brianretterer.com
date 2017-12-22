const mix = require('laravel-mix');

mix.sass('assets/sass/app.scss', './css/main.css')
    .js('assets/js/app.js', './js/app.js')
    .sourceMaps();