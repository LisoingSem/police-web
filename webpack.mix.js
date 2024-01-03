const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

mix.js('resources/website/js/app.js')
      .sass('resources/website/sass/app.scss')
      .options({
            processCssUrls: false,
            postCss: [tailwindcss('./tailwind.config.js')],
      });
