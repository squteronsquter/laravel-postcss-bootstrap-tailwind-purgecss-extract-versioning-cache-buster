const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');
require('laravel-mix-purgecss');

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .options({
        processCssUrls: false,
        autoprefixer: {
            options: {
                browsers: ['last 40 versions'],
                grid: true
            }
        },
        postCss: [tailwindcss('./tailwind.config.js')]
    })
    .extract()
    .version()
    .purgeCss();
