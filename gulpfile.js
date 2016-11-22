const elixir = require('laravel-elixir'),
  del = require('del');
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

elixir.extend('remove', function(path) {
    new elixir.Task('remove', function() {
        del(path);
    });
});

elixir((mix) => {
    mix.remove(['public/css/**/*.*', 'public/js/**/*.*', 'public/images/**/*.*'])
       .sass(['app.scss', './resources/assets/vendors/semantic-ui/dist/semantic.css'], 'public/css/app.css')
       .webpack(['app.js', './resources/assets/vendors/semantic-ui/dist/semantic.js'], 'public/js/app.js')
       .browserSync({
      files: [
        'gulpfile.js',
        'public/css/*.css',
        'resources/assets/**/*',                     // This is the one required to get the CSS to inject
        'resources/views/**/*.blade.php',       // Watch the views for changes & force a reload
        'app/**/*.php',
        'routes/**/*.php',                      // Watch the app files for changes & force a reload
      ],
      proxy: "localhost:8000",
      port: 8000
    });
    mix.copy('resources/assets/vendors/semantic-ui/dist/themes/default/assets', 'public/css/themes/default/assets')
       .copy('resources/assets/fonts/*.*', 'public/css/fonts')
       .copy('resources/assets/images/**/*.*', 'public/images');

});
