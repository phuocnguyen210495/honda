const mix = require('laravel-mix');

require('mix-export-tailwind-config')

mix
    .js('resources/js/app.js', 'public/js')
    .copy('resources/fonts', 'public/fonts')
    .postCss('resources/css/app.css', 'public/css', [
        require('tailwindcss')
    ])
    .exportTailwindConfig(
        'tailwind.config.json',
        'storage/app/tailwind.config.json'
    )
