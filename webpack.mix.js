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

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/navigation.js','public/js')
    .js('resources/js/UserAgreement.js','public/js')
    .vue()
    .sass('resources/sass/app.scss', 'public/css')
    .css('resources/css/index.css','public/css')
    .css('resources/css/main.css','public/css')
    .css('resources/css/forms.css','public/css');
