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
                    primary: "oklch(76% 0.177 163.223)",
                    secondary: "oklch(85% 0.199 91.936)",
                    accent: "oklch(71% 0.203 305.504)",
                    neutral: "oklch(26% 0.007 34.298)",
                    "base-100": "oklch(98% 0.001 106.423)",
                    "base-200": "oklch(97% 0.001 106.424)",
                    "base-300": "oklch(92% 0.003 48.717)",
                    "base-content": "oklch(21% 0.006 56.043)",
                    "primary-content": "oklch(26% 0.051 172.552)",
                    "secondary-content": "oklch(28% 0.066 53.813)",
                    "accent-content": "oklch(29% 0.149 302.717)",
                    "neutral-content": "oklch(98% 0.001 106.423)",
                    info: "oklch(60% 0.126 221.723)",
                    "info-content": "oklch(98% 0.019 200.873)",
                    success: "oklch(60% 0.118 184.704)",
                    "success-content": "oklch(98% 0.014 180.72)",
                    warning: "oklch(64% 0.222 41.116)",
                    "warning-content": "oklch(98% 0.016 73.684)",
                    error: "oklch(58% 0.253 17.585)",
                    "error-content": "oklch(96% 0.015 12.422)",
                },
            },
        ],
    },
};
