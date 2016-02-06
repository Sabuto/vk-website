var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss')
        .styles(['tether.min.css'], 'public/css/tether.css')
        .styles(['sweetalert.css', 'dropzone.css'], 'public/css/styles.css')
        .scripts(['tether.min.js', 'bootstrap.min.js', 'sweetalert-dev.js', 'dropzone.js'], 'public/js/scripts.js');
});
