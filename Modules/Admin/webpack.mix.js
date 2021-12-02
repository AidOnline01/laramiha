const dotenvExpand = require('dotenv-expand');
dotenvExpand(require('dotenv').config({ path: '../../.env'/*, debug: true*/}));

const publicPath = '../../public';
const resourcePath = __dirname + '/Resources';

const mix = require('laravel-mix');
require('laravel-mix-merge-manifest');

mix.setPublicPath(publicPath).mergeManifest();

mix.js(__dirname + '/Resources/assets/app.js', publicPath + '/admin/js/admin.js')
    .sass( __dirname + '/Resources/assets/app.scss', publicPath + '/admin/css/admin.css');

mix.copyDirectory(__dirname + '/Resources/assets/images', publicPath + '/admin/images');


/* Modules */
mix.js(resourcePath + '/components/counter/index.js', publicPath + '/admin/counter.js')
mix.sass(resourcePath + '/components/counter/index.scss', publicPath + '/admin/counter.css');

mix.js(resourcePath + '/components/list/index.js', publicPath + '/admin/list.js')
mix.sass(resourcePath + '/components/list/index.scss', publicPath + '/admin/list.css');
/* Modules END */


if (mix.inProduction()) {
    mix.version();
}
