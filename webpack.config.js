const {merge} = require('webpack-merge');
const base = require('pckg-app-frontend/webpack.base.js');
//const base = require('pckg-app-frontend/full.loader.js');

module.exports = merge(base, {
    entry: {},
    output: {
        path: __dirname + '/build/js',
    }
});
//module.exports = base.exports({entry:{}});
