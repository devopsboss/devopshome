{
    "dependencies": {},
    "devDependencies": {
        "@symfony/webpack-encore": "^0.20.1",   // asset builder
        "bootstrap": "^4.1.2",                  // bootstrap for ui design
        "jquery": "^3.3.1",                     // required for bootstrap
        "node-sass": "^4.9.2",                  // sass into css
        "popper.js": "^1.14.3",                 // required for bootstrap
        "prismjs": "^1.15.0",                   // syntax highlighting styles
        "sass-loader": "^7.0.3",                // compile sass into css
        "ts-loader": "^4.4.2",                  // typescript
        "typescript": "^2.9.2",                 // typescript
        "webpack-notifier": "^1.6.0"            // required for webpack-encode
    },
    "license": "UNLICENSED",
    "private": true,
    "scripts": {
        "dev-server": "encore dev-server",
        "dev": "encore dev",
        "watch": "encore dev --watch",
        "build": "encore production"
    },

}
