const mix = require('laravel-mix');

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

mix
    .disableNotifications()
    .js('resources/assets/site/js/app.js', 'public/assets/site/js')
    .postCss('resources/assets/site/css/app.css', 'public/assets/site/css')
    .browserSync('localhost:8000')
