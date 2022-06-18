const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.copy('resources/backend/assets/css', 'public/backend/css')
    .copy('resources/backend/assets/img', 'public/backend/img')
    .copy('resources/backend/assets/js', 'public/backend/js')
    .copy('resources/backend/assets/vendor', 'public/backend/vendor')
    .postCss
    ;
