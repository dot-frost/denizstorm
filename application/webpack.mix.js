const mix = require('laravel-mix');
const path = require("path");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */
mix.alias({
    "~" : path.join(__dirname, 'node_modules/'),
})

// Dashboard Template Start
mix.sass('resources/scss/dashboard/style.scss','public/dashboard/css')

mix.js('resources/js/dashboard/plugins.js','public/dashboard/js')
mix.js('resources/js/dashboard/editor.js','public/dashboard/js')
mix.js('resources/js/dashboard/main.js','public/dashboard/js')

mix.combine([
    'node_modules/@mdi/font/css/materialdesignicons.min.css',
    'node_modules/perfect-scrollbar/css/perfect-scrollbar.css'
], 'public/dashboard/css/plugins.css')

mix.combine(['node_modules/trumbowyg/dist/ui/trumbowyg.css'], 'public/dashboard/css/editor.css')

mix.copy('node_modules/@mdi/font/fonts', 'public/dashboard/fonts');
// Dashboard Template End


// Client Template Start
mix.css('resources/css/style.css' , 'public/css')
mix.css('resources/css/order.css' , 'public/css')

mix.combine([
    'node_modules/bootstrap-v4-rtl/dist/css/bootstrap-rtl.css',
    'node_modules/@fortawesome/fontawesome-free/css/all.css',
] , 'public/css/plugins.css')

mix.copy('node_modules/@fortawesome/fontawesome-free/webfonts' , 'public/webfonts')

mix.js('resources/js/plugins.js', 'public/js')

mix.js('resources/js/main.js' , 'public/js')
// Client Template End

if (process.env.APP_ENV !== 'production') {
    mix.browserSync({
        proxy: 'denizstorm',
        port: '80',
        open: false,
    })
}

