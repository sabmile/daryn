import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

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
    server: {
        host:true,
        hmr: {
            host: 'localhost',
            clientPort: 5175,
        },
        port: 5173,
        watch: {
            usePolling: true,
        }
    },
});
