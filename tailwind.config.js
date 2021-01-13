module.exports = {
    purge: ['./storage/framework/views/*.php', './resources/views/**/*.blade.php'],
    darkMode: false,
    theme: {
        extend: {
            fontFamily: {
                sans: ['Gilroy', 'sans-serif']
            }
        },  
    },
    variants: {
        opacity: ({ after }) => after(['disabled'])
    },
    plugins: [
        require('@tailwindcss/ui')
    ],
}
