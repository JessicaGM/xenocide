module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
  ],
  theme: {
    extend: {
      colors: {
        'shamrock': '#46d4ad',
        'keppel': '#38b4a1',
        'mariner': '#396cd1',
      },
      fontFamily: {
        'sans': ['Poppins', 'sans-serif'] 
      },
    },
  },
  variants: {},
  plugins: [
    require('@tailwindcss/ui'),
  ]
}
