// webpack.config.js
const path = require('path');

module.exports = {

  entry: {
    'helper-css': './scss/helper-css.scss',
    // 'helper-bootstrap': './scss/helper-bootstrap.scss',
  },
  output: {
    filename: '[name].js',
    path: path.resolve(__dirname, './css')
  },
    module: {
        rules: [{
            test: /\.scss$/,
            use: [{
                loader: "style-loader"
            }, {
                loader: "css-loader"
            }, {
                loader: "sass-loader",
                options: {
                    // includePaths: ["node_modules"]
                    // includePaths: require('path').resolve(__dirname, 'node_modules')
                }
            }]
        }]
    }
};
