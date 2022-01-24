module.exports = {
  content: [
      './src/**/*.{html,js}',
      './node_modules/tw-elements/dist/js/*.js',
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
  },
  plugins: [
      require('tw-elements/dist/plugin')
  ],
}
