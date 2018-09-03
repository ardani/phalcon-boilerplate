let mix = require('laravel-mix');

mix.scripts(['resources/assets/js/app.js'], 'public/js/scripts.js');
   
mix.styles(['resources/assets/css/style.css'], 'public/css/styles.css');

if (mix.inProduction()) {
    mix.version();
}