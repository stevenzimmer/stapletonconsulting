var path = require('path');
var webpack = require('webpack');

module.exports = {
	entry: './build/js/scripts.js',
	output: {
		path: path.resolve(__dirname, './build/js/temp'),
		filename: 'scripts.js'
	},
	module: {
		loaders: [
			{
				loader: 'babel-loader',
				query: {
					presets: ['es2015']
				},
				test: /\.js$/,
				exclude: /node_modules/
			}
		]
	},
	plugins: [
		new webpack.ProvidePlugin({
			$: 'jquery',
			jQuery: 'jquery'
		})
	]

}