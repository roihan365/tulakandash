import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                border: 'hsl(214.3 31.8% 91.4%)',
                input: 'hsl(214.3 31.8% 91.4%)',
                ring: 'hsl(221 83% 53%)',
                background: 'hsl(210 50% 98%)',
                foreground: 'hsl(222 47% 11%)',
                primary: {
                    DEFAULT: 'hsl(221 83% 53%)',
                    foreground: 'hsl(210 40% 98%)'
                },
                secondary: {
                    DEFAULT: 'hsl(210 40% 96.1%)',
                    foreground: 'hsl(222 47% 11.2%)'
                },
                destructive: {
                    DEFAULT: 'hsl(0 84.2% 60.2%)',
                    foreground: 'hsl(210 40% 98%)'
                },
                muted: {
                    DEFAULT: 'hsl(210 40% 96.1%)',
                    foreground: 'hsl(215.4 16.3% 46.9%)'
                },
                accent: {
                    DEFAULT: 'hsl(210 40% 90%)',
                    foreground: 'hsl(222 47% 11.2%)'
                },
                popover: {
                    DEFAULT: 'hsl(0 0% 100%)',
                    foreground: 'hsl(222 47% 11%)'
                },
                card: {
                    DEFAULT: 'hsl(0 0% 100%)',
                    foreground: 'hsl(222 47% 11%)'
                },
                sidebar: {
                    DEFAULT: 'hsl(210 40% 98%)',
                    foreground: 'hsl(222 47% 11.2%)',
                    primary: 'hsl(221 83% 53%)',
                    'primary-foreground': 'hsl(0 0% 100%)',
                    accent: 'hsl(210 40% 96.1%)',
                    'accent-foreground': 'hsl(222 47% 11.2%)',
                    border: 'hsl(214.3 31.8% 91.4%)',
                    ring: 'hsl(221 83% 53%)'
                }
            },
        },
    },
    plugins: [forms],
}
