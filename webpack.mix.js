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

mix.styles([
  'resources/listeo/bootstrap-grid.css',
  'resources/listeo/icons.css',
  'resources/listeo/plugins/revolutionslider.css',
  'resources/listeo/style.css',
   'resources/listeo/main-color.css'], 'public/css/all.css').version()
