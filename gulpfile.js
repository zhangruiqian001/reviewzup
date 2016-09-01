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

var vendors = '../../vendor/';

var paths = {
    'jquery': vendors + '/jquery/dist',
    'bootstrap': vendors + '/bootstrap/dist',
    'jqueryui':  vendors + '/jquery-ui',
    'fontawesome': vendors + '/font-awesome'
};

elixir.config.sourcemaps = false;

elixir(function(mix) {

    // Copy fonts straight to public
    mix.copy('resources/vendor/bootstrap/dist/fonts/**', 'public/fonts');
    mix.copy('resources/vendor/font-awesome/fonts/**', 'public/fonts');

    // Copy images straight to public
    mix.copy('resources/vendor/jquery-ui/themes/base/images/**', 'public/images');
    mix.copy('resources/assets/images/**', 'public/images');

    // Merge Site CSSs.
    mix.styles([
        paths.bootstrap + '/css/bootstrap.css',
        paths.bootstrap + '/css/bootstrap-theme.css',
        paths.fontawesome + '/css/font-awesome.css',
        'app.css'
    ], 'public/css/site.css');

    // Merge Site scripts.
    mix.scripts([
        paths.jquery + '/jquery.js',
        paths.bootstrap + '/js/bootstrap.js',
    ], 'public/js/site.js');

});
