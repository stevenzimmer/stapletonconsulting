var gulp = require('gulp'),
	svg_sprite = require('gulp-svg-sprite'),
	rename = require('gulp-rename'),
	del = require('del');

var config = {

	mode: {

		css: {

			sprite: 'sprite.svg',

			render: {

				css: {

					template: './gulp/templates/sprite.css'
				}
			}
		}
	}
};

gulp.task('begin_clean', function() {
	return del(['./buld/svg/temp', './prod/sprite']);
});

gulp.task('create_sprite', ['begin_clean'], function() {
	return gulp.src('./build/svg/theme-svg/*.svg')
		.pipe(svg_sprite(config))
		.pipe(gulp.dest('./build/svg/temp'));
});

gulp.task('copy_sprite_graphic', ['create_sprite'], function() {
	return gulp.src('./build/svg/temp/css/**/*.svg')
		.pipe(gulp.dest('./prod/sprite'))
})

gulp.task('copy_sprite_css', ['create_sprite'], function() {
	return gulp.src('./build/svg/temp/css/*.css')
		.pipe(rename('_sprite.css'))
		.pipe(gulp.dest('./build/css'))
});

gulp.task('end_clean', ['copy_sprite_graphic', 'copy_sprite_css'], function() {
	return del('./build/svg/temp');
});

gulp.task('icons', ['begin_clean','create_sprite', 'copy_sprite_graphic', 'copy_sprite_css']);