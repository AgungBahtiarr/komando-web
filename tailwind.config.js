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
                    primary: "oklch(86% 0.022 252.894)",
                    secondary: "oklch(82% 0.12 346.018)",
                    accent: "oklch(0% 0 0)",
                    neutral: "oklch(37% 0.034 259.733)",
                    "base-100": "oklch(98% 0.002 247.839)",
                    "base-200": "oklch(96% 0.003 264.542)",
                    "base-300": "oklch(92% 0.006 264.531)",
                    "base-content": "oklch(21% 0.034 264.665)",
                    "primary-content": "oklch(12% 0.042 264.695)",
                    "secondary-content": "oklch(28% 0.109 3.907)",
                    "accent-content": "oklch(100% 0 0)",
                    "neutral-content": "oklch(98% 0.002 247.839)",
                    info: "oklch(74% 0.16 232.661)",
                    "info-content": "oklch(29% 0.066 243.157)",
                    success: "oklch(77% 0.152 181.912)",
                    "success-content": "oklch(27% 0.046 192.524)",
                    warning: "oklch(82% 0.189 84.429)",
                    "warning-content": "oklch(27% 0.077 45.635)",
                    error: "oklch(70% 0.191 22.216)",
                    "error-content": "oklch(25% 0.092 26.042)",
                },
            },
        ],
    },
};
