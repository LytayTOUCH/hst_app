const elixir = require('laravel-elixir'),
      php = require('gulp-connect-php');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

elixir((mix) => {
    mix.sass('app.scss')
       .webpack('app.js').browserSync({
      files: [
        'public/css/*.css',
        'resources/assets/**/*',                     // This is the one required to get the CSS to inject
        'resources/views/**/*.blade.php',       // Watch the views for changes & force a reload
        'app/**/*.php',
        'routes/**/*.php',                      // Watch the app files for changes & force a reload
      ],
      proxy: "localhost:8000",
      port: 8000
    });
  php.server({
      base: './'
  });
});
