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

/**
 * Disable Notifications
 */
mix.disableSuccessNotifications();

/**
 * Javascripts files
 */
mix.js([
  "node_modules/uikit/dist/js/uikit.min.js",
  "node_modules/uikit/dist/js/uikit-icons.min.js",
  "node_modules/@fortawesome/fontawesome-free/js/all.min.js",
  "resources/js/app.js",
], "public/js/app.js");

/**
 * Sass files
 */
mix.sass("resources/scss/style.scss", "public/css");
mix.sass("resources/scss/error.scss", "public/css");


/**
 * Copy files
 */
mix.copyDirectory('resources/images', 'public/images');



mix.version();
