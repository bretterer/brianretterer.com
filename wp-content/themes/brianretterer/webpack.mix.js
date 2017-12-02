const mix = require('laravel-mix');

mix.sass('resources/assets/sass/app.scss', './css/main.css')
    .sass('resources/assets/sass/default-color.scss', './css/color-default.css')
    .sass('resources/assets/sass/orange-color.scss', './css/color-orange.css')
    .options({
        processCssUrls: false
    })
    .js('resources/assets/js/app.js', './js/app.js')
    .copy('resources/assets/img', './img')
    .copy('resources/assets/fonts', './fonts')
    .copy('resources/assets/js/customizer-toggle-control.js', './js/customizer-toggle-control.js')
    .copy('resources/assets/css/pure-css-togle-buttons.css', './css/pure-css-togle-buttons.css')
    .sourceMaps();