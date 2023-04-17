
var webpack = require('webpack');

const defaults = require('@wordpress/scripts/config/webpack.config');

const Dotenv = require('dotenv-webpack');

module.exports = {
  ...defaults,
  externals: {
    react: 'React',
    'react-dom': 'ReactDOM',
  },
};
