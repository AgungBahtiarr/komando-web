import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    daisyui: {
        themes: [
            "light",
            "dark",
            "cupcake",
            "forest",
            "bumblebee",
            {
                tni: {
                    // Warna utama - Hijau Army TNI
                    primary: "#3D5229", // Hijau Army gelap
                    "primary-content": "#FFFFFF", // Text color untuk primary

                    // Warna sekunder - Coklat PDL TNI
                    secondary: "#8B4513", // Coklat PDL
                    "secondary-content": "#FFFFFF", // Text color untuk secondary

                    // Warna aksen - Merah TNI
                    accent: "#8B0000", // Merah gelap TNI
                    "accent-content": "#FFFFFF", // Text color untuk accent

                    // Warna netral - Abu-abu militer
                    neutral: "#404040", // Abu-abu gelap
                    "neutral-content": "#FFFFFF", // Text color untuk neutral

                    // Warna dasar - Putih bersih
                    "base-100": "#FFFFFF", // Putih bersih
                    "base-200": "#F8F8F8", // Putih sedikit abu
                    "base-300": "#F0F0F0", // Putih lebih abu
                    "base-content": "#1F2937", // Text color default (abu gelap)

                    // Warna status
                    info: "#436B95", // Biru militer
                    "info-content": "#FFFFFF", // Text color untuk info

                    success: "#4F7942", // Hijau Olive
                    "success-content": "#FFFFFF", // Text color untuk success

                    warning: "#CD853F", // Coklat muda
                    "warning-content": "#FFFFFF", // Text color untuk warning

                    error: "#8B0000", // Merah gelap
                    "error-content": "#FFFFFF", // Text color untuk error

                    // Modifikasi
                    "--rounded-box": "0.25rem", // Border radius containers
                    "--rounded-btn": "0.125rem", // Border radius buttons
                    "--rounded-badge": "0.125rem", // Border radius badges

                    // Border
                    "--border-color": "#3D5229", // Warna border
                    "--animation-btn": "0.25s", // Durasi animasi button
                    "--animation-input": "0.2s", // Durasi animasi input

                    // Font
                    "--btn-text-case": "uppercase", // Text transform buttons
                    "--navbar-padding": "0.5rem", // Padding navbar
                    "--btn-focus-scale": "0.95", // Button focus scale
                },
            },
        ],
    },
    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [require("daisyui")],
};
