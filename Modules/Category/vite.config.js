import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    build: {
        outDir: '../../public/build-category',
        emptyOutDir: true,
        manifest: true,
    },
    plugins: [
        laravel({
            publicDirectory: '../../public',
            buildDirectory: 'build-category',
            input: [
                'Modules/Category/resources/assets/sass/tailwindCss.css', // مسیر فایل CSS
                __dirname + '/resources/assets/sass/app.scss',
                __dirname + '/resources/assets/js/app.js'
            ],
            refresh: true,
        }),
    ],
});

//export const paths = [
//    'Modules/Category/resources/assets/sass/app.scss',
//    'Modules/Category/resources/assets/js/app.js',
//];
