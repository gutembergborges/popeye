const path = require('path')
const mix = require('laravel-mix')
require('laravel-mix-versionhash')
// const { BundleAnalyzerPlugin } = require('webpack-bundle-analyzer')

mix
  .options({
    processCssUrls: false
  })
  /** Admin Panel */
  .js('resources/js/app.js', 'public/app/js')
  .sass('resources/sass/app/app.scss', 'public/app/css')
  /** Website */
  .copyDirectory('resources/images', 'public/images')
  .sass('resources/sass/site/main.scss', 'public/site/css/main.css')
  .combine([
    'resources/css/bootstrap-datepicker.css',
    'resources/css/jquery.fancybox.min.css',
    'resources/css/owl.carousel.min.css',
    'resources/css/owl.theme.default.min.css',
    'resources/css/aos.css'
  ], 'public/site/css/base.css')
  .combine([
    'resources/js/site/jquery-3.3.1.min.js',
    'resources/js/site/jquery-migrate-3.0.0.js',
    'resources/js/site/popper.min.js',
    'resources/js/site/bootstrap.min.js',
    'resources/js/site/owl.carousel.min.js',
    'resources/js/site/jquery.sticky.js',
    'resources/js/site/jquery.waypoints.min.js',
    'resources/js/site/jquery.animateNumber.min.js',
    'resources/js/site/jquery.fancybox.min.js',
    'resources/js/site/jquery.stellar.min.js',
    'resources/js/site/jquery.easing.1.3.js',
    'resources/js/site/bootstrap-datepicker.min.js',
    'resources/js/site/aos.js'
  ], 'public/site/js/base.js')
  .js('resources/js/site/main.js', 'public/site/js/main.js')
  .disableNotifications()

if (mix.inProduction()) {
  mix
    // .extract() // Disabled until resolved: https://github.com/JeffreyWay/laravel-mix/issues/1889
    // .version() // Use `laravel-mix-versionhash` for the generating correct Laravel Mix manifest file.
    .versionHash()
} else {
  mix.sourceMaps()
}

mix.webpackConfig({
  plugins: [
    // new BundleAnalyzerPlugin()
  ],
  resolve: {
    extensions: ['.js', '.json', '.vue'],
    alias: {
      '~': path.join(__dirname, './resources/js')
    }
  },
  output: {
    chunkFilename: 'app/js/[chunkhash].js',
    path: mix.config.hmr ? '/' : path.resolve(__dirname, './public/')
  }
})
