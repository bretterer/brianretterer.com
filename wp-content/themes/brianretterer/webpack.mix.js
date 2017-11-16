const mix = require('laravel-mix');

mix.sass('resources/assets/sass/app.scss', './css/main.css')
    .sass('resources/assets/sass/default-color.scss', './css/color-default.css')
    .sass('resources/assets/sass/orange-color.scss', './css/color-orange.css')
    .options({
        processCssUrls: false
    })
    .js('resources/assets/js/app.js', './js/app.js')
    .copy('resources/assets/img', './img')
    .sourceMaps();