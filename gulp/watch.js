var gulp = require('gulp'),
	watch = require('gulp-watch'),
	browsersync = require('browser-sync').create();

gulp.task('watch', function() {

	gulp.watch(['build/css/*.css', 'style.css'], ['style']);
	gulp.watch(['build/js/modules/*.js', 'build/js/*.js'], ['scripts']);

});

gulp.task('default', ['style', 'webpack', 'watch']);