/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
    },
    plugins: [require("daisyui")],
    daisyui: {
        themes: [
            "light",
            "dark",
            "cupcake",
            {
                komando: {
                    primary: "oklch(76% 0.233 130.85)",
                    secondary: "oklch(72% 0.219 149.579)",
                    accent: "oklch(69% 0.17 162.48)",
                    neutral: "oklch(44% 0.011 73.639)",
                    "base-100": "oklch(98% 0.001 106.423)",
                    "base-200": "oklch(97% 0.001 106.424)",
                    "base-300": "oklch(92% 0.003 48.717)",
                    info: "oklch(78% 0.154 211.53)",
                    success: "oklch(76% 0.177 163.223)",
                    warning: "oklch(75% 0.183 55.934)",
                    error: "oklch(71% 0.202 349.761)",
                },
            },
        ],
    },
};
