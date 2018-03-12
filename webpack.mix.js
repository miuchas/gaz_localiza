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

mix.js('resources/assets/js/app.js',                       'public/js')
  .js('resources/assets/js/jquery-3.2.1.min.js',           'public/js')
  .js('resources/assets/js/bootstrap/bootstrap.bundle.js', 'public/js')
  .js('resources/assets/js/bootstrap/popper.js',           'public/js')
  .js('resources/assets/js/bootstrap/bootstrap.js',        'public/js')
  .js('resources/assets/js/quiz.js',                       'public/js')
  .sass('resources/assets/sass/app.scss', 'public/css');
