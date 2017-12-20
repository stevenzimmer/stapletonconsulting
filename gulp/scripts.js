var gulp 	= require('gulp'),
	uglify 	= require('gulp-uglify'),
	rename	= require('gulp-rename'),
	plumber = require('gulp-plumber'),
	webpack = require('webpack');

gulp.task('webpack', function(callback) {
	webpack( require('../webpack.config.js'), function(err, stats) {
		if (err) {
			console.log(err.toString());
		}
		console.log(stats.toString());
		console.log('webpack completed');
		callback();
	});
});

gulp.task('scripts', ['webpack'], function() {
	gulp.src('./build/js/temp/*.js')
	.pipe(plumber())
	.pipe(uglify())
	.pipe(rename('scripts.min.js'))
    .pipe(gulp.dest('prod/js'));
});