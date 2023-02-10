const mix = require('laravel-mix');
const config = require('./webpack.config')
mix.webpackConfig(config)

mix.ts('resources/js/app.ts', 'public/js')
    .vue()
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
        require('autoprefixer'),
]);


