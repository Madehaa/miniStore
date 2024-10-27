import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', // Entry point for CSS
                'resources/js/app.js',   // Entry point for JavaScript
            ],
            refresh: true, // Enable automatic browser refresh
        }),
    ],
    server: {
        // Optional: configure Vite dev server
        host: 'localhost',
        port: 3000,
    },
    build: {
        // Optional: configure build options
        outDir: 'public/build', // Directory for the compiled assets
    },
});
