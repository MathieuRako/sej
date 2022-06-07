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
    .sass('resources/sass/admin/adminstyle.scss', 'public/css/adminstyle.css')
    .sass('resources/sass/pages/app.scss', 'public/css/style.css');

mix.browserSync({
    proxy: 'sej_website.test',
    port: 3000
});    