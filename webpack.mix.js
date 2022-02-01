const mix = require('laravel-mix');


mix.js('./src/index.js', './index.js').vue({
    "extractStyles":"./index.css"
});