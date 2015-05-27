var elixir = require('laravel-elixir');

var paths = {
  'jquery': './resources/vendor/bower_components/jquery/',
  'bootstrap': './resources/vendor/bower_components/bootstrap-sass-official/assets/'
};

elixir(function (mix) {
  mix.sass("main.scss",
           "public/css",
           {includePaths: [paths.bootstrap + 'stylesheets/']}
     )
    .copy(paths.bootstrap + 'fonts/bootstrap/**', 'public/fonts')
    .scripts([
      paths.jquery + "dist/jquery.js",
      paths.bootstrap + "javascripts/bootstrap.js"
    ], 'public/js/app.js', './');
});
