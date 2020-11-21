const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss')

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
  .js('resources/js/app.js', 'public/js')
  .js('resources/js/admin.js', 'public/js')
  .sass('resources/scss/app.scss', 'public/css')
  .options({
    processCssUrls: false,
    postCss: [ tailwindcss('./tailwind.config.js') ],
  })
  .browserSync('hechi.localhost');

mix.copyDirectory('node_modules/tinymce/icons', 'public/tinymce/icons');
mix.copyDirectory('node_modules/tinymce/plugins', 'public/tinymce/plugins');
mix.copyDirectory('node_modules/tinymce/skins', 'public/tinymce/skins');
mix.copyDirectory('node_modules/tinymce/themes', 'public/tinymce/themes');
mix.copy('node_modules/tinymce/jquery.tinymce.js', 'public/tinymce/jquery.tinymce.js');
mix.copy('node_modules/tinymce/jquery.tinymce.min.js', 'public/tinymce/jquery.tinymce.min.js');
mix.copy('node_modules/tinymce/tinymce.js', 'public/tinymce/tinymce.js');
mix.copy('node_modules/tinymce/tinymce.min.js', 'public/tinymce/tinymce.min.js');

if (mix.inProduction()) {
    mix.version();
}
