const mix = require('laravel-mix');

mix.setPublicPath(`./`);

mix.sass('assets/sass/app.scss', 'css')
    .js('assets/js/app.js', 'js')
    .sourceMaps()
    .version();