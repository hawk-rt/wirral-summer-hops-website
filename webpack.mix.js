const mix = require('laravel-mix');
require('laravel-mix-jigsaw');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');

mix.jigsaw()
    .js('source/_assets/js/main.js', 'js')
    .sass('source/_assets/css/main.scss', 'css')
    .copy('node_modules/bootstrap-icons/font/fonts', 'source/assets/build/css/fonts')
    .options({
        processCssUrls: false,
    })
    .version();
