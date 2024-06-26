import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/sass/app.scss",
                "resources/js/app.js",
                "resources/views/themes/toko/assets/css/main.css",
                "resources/views/themes/toko/assets/plugins/jqueryui/jquery-ui.css",

                "resources/views/themes/toko/assets/js/main.js",
                "resources/views/themes/toko/assets/plugins/jqueryui/jquery-ui.min.js",
            ],
            refresh: true,
        }),
    ],
});
