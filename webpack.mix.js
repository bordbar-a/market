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

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');


//Start Admin Assets
mix.styles([
    'resources/assets/admin/plugins/bootstrap/css/bootstrap.min.css',
    'resources/assets/admin/css/essentials.css',
    'resources/assets/admin/css/layout.css',
    'resources/assets/admin/css/color_scheme/green.css',
    'resources/assets/admin/plugins/bootstrap/RTL/bootstrap-rtl.min.css',
    'resources/assets/admin/plugins/bootstrap/RTL/bootstrap-flipped.min.css',
    'resources/assets/admin/css/layout-RTL.css',
],'public/backend/css/output.css');

mix.scripts([
    'resources/assets/admin/plugins/jquery/jquery-2.1.4.min.js',
    'resources/assets/admin/js/cms.js',
    'resources/assets/admin/js/app.js'
],'public/backend/js/output.js');


mix.styles([
    'resources/assets/admin/css/layout-nestable.css',
],'public/backend/css/custom/layout-nestable.css');


//End Admin Assets


//Front Assets

mix.styles([
    'resources/assets/front/plugins/bootstrap/css/bootstrap.min.css',
    'resources/assets/front/css/essentials.css',
    'resources/assets/front/css/layout.css',
    'resources/assets/front/plugins/bootstrap/RTL/bootstrap-rtl.min.css',
    'resources/assets/front/plugins/bootstrap/RTL/bootstrap-flipped.min.css',
    'resources/assets/front/css/layout-RTL.css',
    'resources/assets/front/css/myCss.css',
],'public/front/css/base.css');

mix.styles([
    'resources/assets/front/css/header-1.css',
    'resources/assets/front/css/layout-shop.css',
    'resources/assets/front/css/color_scheme/green.css',
],'public/front/css/index.css');




mix.scripts([
    'resources/assets/front/plugins/jquery/jquery-2.1.4.min.js',
    'resources/assets/front/js/scripts.js',
],'public/front/js/base.js');

mix.scripts([
    'resources/assets/front/js/view/demo.shop.js',
], 'public/front/js/index.js');






// End Of Front Assets
