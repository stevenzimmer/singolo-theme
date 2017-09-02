var path = require('path');
var UglifyJS = require('uglifyjs-webpack-plugin');
var webpack = require('webpack');

module.exports = {

	entry: './scripts/main.js',

	output: {
		path: path.resolve(__dirname, './build/scripts'),
		filename: 'scripts.js'
	},
	plugins: [
		new UglifyJS(),
		new webpack.ProvidePlugin({
			jQuery: 'jquery',
			$: 'jquery',
			jquery: 'jquery'
		})
	]
}