let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
    .js('resources/assets/js/testimonials.js', 'public/js')
    .combine([
        'node_modules/slick-carousel/slick/slick.js',
        'node_modules/materialize-css/js/parallax.js',
    ], 'public/js/vendors.js')
    .sass('resources/assets/sass/app.scss', 'public/css');
