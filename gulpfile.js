var elixir = require('laravel-elixir');

var paths = {
  'jquery': './resources/vendor/bower_components/jquery/',
  'bootstrap': './resources/vendor/bower_components/bootstrap-sass-official/assets/',
  'font_awesome': './resources/vendor/bower_components/font-awesome/'
};

elixir(function (mix) {
  mix.sass("main.scss",
           "public/css",
           {includePaths: [paths.bootstrap + 'stylesheets/',
                           paths.font_awesome + 'scss/'
            ]}
     )
    .copy(paths.font_awesome + 'fonts/**', 'public/fonts')
    .scripts([
      paths.jquery + "dist/jquery.js",
      paths.bootstrap + "javascripts/bootstrap.js"
    ], 'public/js/app.js', './');
});
