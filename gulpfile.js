var elixir = require('laravel-elixir');
var BrowserSync = require('laravel-elixir-browsersync');


var paths = {
'bourbon': './node_modules/bourbon/app/assets/stylesheets/',
'susy': './bower_components/susy/sass/'
}


elixir(function (mix) {
    mix.sass('app.scss', './public/css/app.css', {includePaths: [paths.bourbon, paths.susy]})
//        .styles(['app.css'], null, 'public/css')
//        .version('public/css/all.css')
        .browserSync({
            files: [
                'public/css/*.css',
                'public/build/css/*.css',
                'resources/views/**/*.blade.php',       
                'app/**/*.php'                      
            ],
            proxy: 'vue.app',
            logPrefix: "Laravel Eixir BrowserSync",
            logConnections: false,
            reloadOnRestart: false,
            notify: false,
            open: false
        });
    
});