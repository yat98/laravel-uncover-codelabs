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

mix.scripts([
    'resources/js/my-script.js',
    'resources/js/my-script-console.js',
], 'public/js/app.js')
    .sass('resources/sass/app.scss', 'public/css/app.css')
    .version();
