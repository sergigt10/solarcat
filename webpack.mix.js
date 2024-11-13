const mix = require("laravel-mix");

mix.browserSync({
    proxy: 'http://127.0.0.1:8000'
});

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

mix.js("resources/js/app.js", "public/js")
    .vue()
    .sass("resources/sass/app.scss", "public/css")
    .postCss('public/backend/css/style.css', 'public/backend/css/mim')
        .options({
            processCssUrls: false
        })
    .sourceMaps();

// mix.browserSync({
//     proxy: 'my-domain.test'
// });
