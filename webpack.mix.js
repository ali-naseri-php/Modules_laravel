const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('tailwindcss'),
        require('autoprefixer'),
    ])
    .sass('resources/sass/app.scss', 'public/css'); // اگر از SASS استفاده می‌کنید
