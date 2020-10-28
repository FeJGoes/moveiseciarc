const mix = require("laravel-mix");

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

mix.scripts("resources/js/app.js", "public/js/app.js").version();
mix.sass("resources/sass/style.scss", "public/css").version();
mix.sass("resources/sass/error.scss", "public/css").version();
mix.copyDirectory('resources/images','public/images')
    .copy([
        "vendor/uikit/uikit/dist/js/uikit.min.js",
        "vendor/uikit/uikit/dist/js/uikit-icons.min.js",
    ], "public/js" )
    .copy("vendor/uikit/uikit/dist/css/uikit.min.css", "public/css/")
