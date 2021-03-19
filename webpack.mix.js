const mix = require('laravel-mix');
const fs = require('fs')
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

/*
 mix.extend('exportTailwindConfig', function (webpackConfig) {
    let config = require('./tailwind.config');

    fs.writeFileSync(
        __dirname + '/tailwind.json',
        JSON.stringify(config, null, 2)
    );

    return webpackConfig
});*/


mix
    .js('resources/js/app.js', 'public/js')
    .copy('resources/fonts', 'public/fonts')
    .postCss('resources/css/app.css', 'public/css', [
        require('tailwindcss')
    ])
 /*   .exportTailwindConfig() */
