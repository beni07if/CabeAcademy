import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});


// import { defineConfig } from 'vite';

// export default defineConfig({
//   build: {
//     publicDir: '/home/beni07/public_html/repositories/CabeAcademy/public/build',
//   },
// });

