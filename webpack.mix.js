let mix = require('laravel-mix');
const glob = require('glob-all');
const purgeCss = require('purgecss-webpack-plugin');

mix.js('resources/assets/js/app.js', 'public/js')
	.styles(['public/vendor/css/core.min.css','public/vendor/css/thesaas.css','public/vendor/css/style.css'],'public/css/vendor.css')
   	.sass('resources/assets/sass/app.scss', 'public/css')
   	.combine(['public/vendor/js/core.min.js','public/vendor/js/thesaas.js','public/vendor/js/script.js'],'public/js/vendor.js');
