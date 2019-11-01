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
  .sass('resources/sass/site/site.scss', 'public/site/css/site.css')
  .combine([
    'resources/css/bootstrap-datepicker.css',
    'resources/css/jquery.fancybox.min.css',
    'resources/css/owl.carousel.min.css',
    'resources/css/owl.theme.default.min.css',
    'resources/css/aos.css'
  ], 'public/site/css/base.css')
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
