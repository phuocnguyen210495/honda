const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: ['./storage/framework/views/*.php', './resources/views/**/*.blade.php'],
    darkMode: false,
    theme: {
        extend: {},
    },
    variants: {
        extend: {
            fontFamily: {
                sans: ['Gilroy', ...defaultTheme.fontFamily.sans]
            }
        },
    },
    plugins: [
        require('@tailwindcss/ui')
    ],
}
