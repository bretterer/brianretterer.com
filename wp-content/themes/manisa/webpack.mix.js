const mix = require('laravel-mix');

mix.sass('assets/sass/app.scss', './css/main.css')
    .options({
        processCssUrls: false
    })
    .js('assets/js/app.js', './js/app.js')
    .copy('assets/images', './images')
    .copy('assets/fonts', './fonts')
    .copy('assets/js/jquery-1.12.4.min.js', './js/jquery-1.12.4.min.js')
    .copy('assets/js/popper.min.js', './js/popper.min.js')
    .copy('assets/js/bootstrap.min.js', './js/bootstrap.min.js')
    .copy('assets/js/lightbox.min.js', './js/lightbox.min.js')
    .copy('assets/js/typed.js', './js/typed.js')
    .copy('assets/js/slick.min.js', './js/slick.min.js')
    .copy('assets/js/waypoints.min.js', './js/waypoints.min.js')
    .copy('assets/js/jquery.counterup.min.js', './js/jquery.counterup.min.js')
    .copy('assets/js/custom.js', './js/custom.js')
    .sourceMaps();