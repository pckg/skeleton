const {merge} = require('webpack-merge');
const base = require('pckg-app-frontend/webpack.base.js');

module.exports = merge(base, {
    entry: {},
    output: {
        path: __dirname + '/build/js',
    }
});
