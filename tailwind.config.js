module.exports = {
    purge: ['./storage/framework/views/*.php', './resources/views/**/*.blade.php'],
    darkMode: false,
    theme: {
        extend: {},
    },
    variants: {
        extend: {
            fontFamily: {
                sans: ['Gilroy', 'sans-serif']
            }
        },
    },
    plugins: [
        require('@tailwindcss/ui')
    ],
}
