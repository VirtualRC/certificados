import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
const APP_URL = process.env.APP_URL || '';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
        
    ],

});
