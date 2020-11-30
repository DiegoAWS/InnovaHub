const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
    //Fonts
    .copy([
        'resources/ui-template/fonts',
    ], 'public/fonts')

    //  Images
    .copy([
        'resources/ui-template/images/favicon.png',
    ], 'public/images/')


    // VENDOR CSS
    .combine(['resources/ui-template/css/bootstrap.css',
        'resources/ui-template/plugins/revolution/css/settings.css',
        'resources/ui-template/plugins/revolution/css/layers.css',
        'resources/ui-template/plugins/revolution/css/navigation.css',
        'resources/ui-template/css/style.css',
        'resources/ui-template/css/responsive.css',
    ], 'public/css/vendor.css').version()

    // CUSTOM CSS
    .copy(['resources/css/custom.css'], 'public/css/').version()


    // VENDOR JS
    .combine(['resources/ui-template/js/jquery.js',
        'resources/ui-template/js/bootstrap.min.js',
        // Start Revolution Slider
        'resources/ui-template/plugins/revolution/js/jquery.themepunch.revolution.min.js',
        'resources/ui-template/plugins/revolution/js/jquery.themepunch.tools.min.js',
        'resources/ui-template/plugins/revolution/js/extensions/revolution.extension.actions.min.js',
        'resources/ui-template/plugins/revolution/js/extensions/revolution.extension.carousel.min.js',
        'resources/ui-template/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js',
        'resources/ui-template/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js',
        'resources/ui-template/plugins/revolution/js/extensions/revolution.extension.migration.min.js',
        'resources/ui-template/plugins/revolution/js/extensions/revolution.extension.navigation.min.js',
        'resources/ui-template/plugins/revolution/js/extensions/revolution.extension.parallax.min.js',
        'resources/ui-template/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js',
        'resources/ui-template/plugins/revolution/js/extensions/revolution.extension.video.min.js',
        'resources/ui-template/js/main-slider-script.js',
        // END Revolution Slider
        'resources/ui-template/js/jquery-ui.js',
        'resources/ui-template/js/jquery.fancybox.pack.js',
        'resources/ui-template/js/jquery.fancybox-media.js',
        'resources/ui-template/js/owl.js',
        'resources/ui-template/js/appear.js',
        'resources/ui-template/js/wow.js',
        'resources/ui-template/js/mixitup.js',
        'resources/ui-template/js/main-slider-script.js',
        'resources/ui-template/js/script.js',
    ], 'public/js/vendor.js').version()



    .js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps();
