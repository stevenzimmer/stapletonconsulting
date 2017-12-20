var gulp = require('gulp'),
	postcss = require('gulp-postcss'),
	autoprefixer = require('autoprefixer'),
	cssvars = require('postcss-simple-vars'),
	nested = require('postcss-nested'),
	cssimport = require('postcss-import'),
	cleanCss 		= require('gulp-clean-css'),
	rename			= require('gulp-rename'),
	mixins				= require('postcss-mixins'),
	plumber = require('gulp-plumber');


gulp.task('style', function() {
	return gulp.src('style.css')
		.pipe(plumber())
		.pipe(postcss([ cssimport, mixins, cssvars, nested, autoprefixer ]))
		.pipe(cleanCss({
			compatibility: 'ie8',
			debug: true
		}))
		.pipe(rename('style.min.css'))
		.pipe(gulp.dest('prod/css'));
});