import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

import fs from "fs-extra";
import path from "path";

const folder = {
    src: "resources/", // source files
    src_assets: "resources/", // source assets files
    dist: "public/", // build files
    dist_assets: "public/build/", //build assets files
};

export default defineConfig({
    build: {
        manifest: true,
        rtl: true,
        outDir: "public/build/",
        cssCodeSplit: true,
    },
    plugins: [
        laravel({
            input: ["resources/css/style.css", "resources/js/init.js"],
            refresh: true,
        }),
        {
            name: "copy-specific-packages",
            async writeBundle() {
                try {
                    // Copy images, json, fonts, and js
                    await Promise.all([
                        fs.copy(
                            folder.src_assets + "css",
                            folder.dist_assets + "css"
                        ),
                        fs.copy(
                            folder.src_assets + "img",
                            folder.dist_assets + "img"
                        ),
                        fs.copy(
                            folder.src_assets + "js",
                            folder.dist_assets + "js"
                        ),
                        fs.copy(
                            folder.src_assets + "svg",
                            folder.dist_assets + "svg"
                        ),
                    ]);
                } catch (error) {
                    console.error("Error copying assets:", error);
                }
            },
        },
    ],
});
