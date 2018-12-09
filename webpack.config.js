// webpack.config.js
let Encore = require('@symfony/webpack-encore');

Encore
// the project directory where all compiled assets will be stored
    .setOutputPath('public/build/')
    // the public path used by the web server to access the previous directory
    .setPublicPath('/build')

    // will create public/build/app.js and public/build/app.css
    .addEntry('app', './assets/js/app.js')
    // // will create public/build/js/app.js
    // .addEntry('js/app', './assets/js/app.js')
    // will create public/build/css/dashboard.css
    .addStyleEntry('css/admin', ['./assets/css/admin.scss'])
    // will create public/build/css/auth.css
    .addStyleEntry('css/auth', ['./assets/css/auth.scss'])

    // allow legacy applications to use $/jQuery as a global variable
    .autoProvidejQuery()
    // enable source maps during development
    .enableSourceMaps(!Encore.isProduction())
    // empty the outputPath dir before each build
    .cleanupOutputBeforeBuild()
    // show OS notifications when builds finish/fail
    .enableBuildNotifications()
    // create hashed filenames (e.g. app.abc123.css)
    .enableVersioning(true)
    // allow sass/scss files to be processed
    .enableSassLoader()
    // allow ts files to be processed
    .enableTypeScriptLoader()
    // consider yarn add --dev fork-ts-checker-webpack-plugin (https://symfony.com/doc/current/frontend/encore/typescript.html)
    //.enableForkedTypeScriptTypesChecking()
;

// export the final configuration
module.exports = Encore.getWebpackConfig();
