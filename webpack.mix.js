const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

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
    .js(['resources/js/uploads/avatar.js'], 'public/js')
    .js(['resources/js/uploads/banner.js'], 'public/js')
    .js(['resources/js/uploads/tweet-image.js'], 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/list.scss', 'public/css')
    .copy('resources/css/menu.css', 'public/css');

mix.sass('resources/sass/main.scss', 'public/css')
    .options({
        postCss: [ tailwindcss('tailwind.config.js') ],
    });
