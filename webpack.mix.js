const mix = require('laravel-mix');

// PurgeCSS: remove unused CSS in production to shrink stylesheets
const production = mix.inProduction();
let purgecss = null;
if (production) {
    purgecss = require('@fullhuman/postcss-purgecss')({
        content: [
            './resources/views/**/*.blade.php',
            './resources/js/**/*.js',
            './public/**/*.html'
        ],
        defaultExtractor: content => content.match(/[A-Za-z0-9-_:/]+/g) || []
    });
}

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

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', production && purgecss ? [purgecss] : []);

// Compile custom Bootstrap SCSS into a trimmed CSS file
mix.sass('resources/sass/bootstrap-custom.scss', 'public/frontend/css')
    .options({
        processCssUrls: false
    });

// Vendor bundle: third-party libraries that change rarely and can be cached long-term
mix.scripts([
    'public/frontend/js/jquery.min.js',
    'public/frontend/js/bootstrap.min.js',
    'public/frontend/js/swiper-bundle.min.js',
    'public/frontend/js/bootstrap-select.min.js',
    'public/frontend/js/lazysize.min.js',
    'public/frontend/js/wow.min.js'
], 'public/frontend/js/vendor.bundle.js');

// App bundle: site-specific scripts that may change more frequently
mix.scripts([
    'public/frontend/js/carousel.js',
    'public/frontend/js/count-down.js',
    'public/frontend/js/multiple-modal.js',
    'public/frontend/js/main.js'
], 'public/frontend/js/frontend.bundle.js');
