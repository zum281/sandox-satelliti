const mix = require("laravel-mix");
require("laravel-mix-purgecss");

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

mix.copy("resources/assets/plugins/vanilla-calendar.min.css", "public/css");
mix.copy("resources/assets/plugins/vanilla-calendar.min.js", "public/js");

mix.js("resources/js/app.js", "public/js")
    .js("resources/js/main.js", "public/js")
    .js("resources/js/range.js", "public/js")
    .js("resources/js/foundationInit.js", "public/js");

mix.sass("resources/sass/main.scss", "public/css", {
    additionalData: `$test: ${process.env.TEST};`,
});

mix.purgeCss({
    enabled: true,
    safelist: [
        // "mappaListing",
        // "pirulino1",
        // "pirulino2",
        // "infoWinMap",
        // "boxDxiw",
        // "arrowdown",
        // "gm-style-iw",
        // /si-/,
    ],
});

mix.browserSync({
    proxy: "http://localhost:8000",
    injectChanges: false,
    reloadOnRestart: false,
});
