import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    theme: {
        extend: {
            colors: {
                background: '#070914',
                foreground: '#F4F2FF',
                card: { DEFAULT: '#0E1222', foreground: '#F4F2FF' },
                primary: { DEFAULT: '#9B7CFF', foreground: '#080614' },
                secondary: { DEFAULT: '#171B2E', foreground: '#F4F2FF' },
                muted: { DEFAULT: '#171B2E', foreground: '#969AB2' },
                accent: { DEFAULT: '#F4B860', foreground: '#1A1104' },
                border: 'rgba(255,255,255,0.09)',
                input: 'rgba(255,255,255,0.12)',
                ring: '#9B7CFF',
            },
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
                display: ['Space Grotesk', 'Inter', ...defaultTheme.fontFamily.sans],
                mono: ['JetBrains Mono', 'ui-monospace', ...defaultTheme.fontFamily.mono],
            },
            borderRadius: { '4xl': '2rem' },
            boxShadow: {
                violet: '0 24px 80px -35px rgba(155,124,255,.75)',
                amber: '0 24px 80px -35px rgba(244,184,96,.5)',
            },
            animation: {
                'float-slow': 'floatSlow 7s ease-in-out infinite',
                'pulse-soft': 'pulseSoft 3s ease-in-out infinite',
                'marquee': 'marquee 24s linear infinite',
                'caret-blink': 'caretBlink 1s step-end infinite',
            },
            keyframes: {
                floatSlow: { '0%,100%': { transform: 'translateY(0)' }, '50%': { transform: 'translateY(-12px)' } },
                pulseSoft: { '0%,100%': { opacity: '.35' }, '50%': { opacity: '.85' } },
                marquee: { '0%': { transform: 'translateX(0)' }, '100%': { transform: 'translateX(-50%)' } },
                caretBlink: { '0%,45%': { opacity: '1' }, '50%,95%': { opacity: '0' } },
            },
        },
    },
    plugins: [forms],
};
