'use strict';

var gulp 			= require('gulp'),
	sass 			= require('gulp-sass'),
	autoprefixer 	= require('gulp-autoprefixer');

var paths = {
	css: 	'./',
	scss: 	'./sass/**/*.scss',
};

gulp.task('styles', function() {
	return gulp.src(paths.scss)
		.pipe(sass({
			precision: 10,
			outputStyle: 'compressed',
			// outputStyle: 'expanded',
			// outputStyle: 'nested',
			// outputStyle: 'compact',
			onError: console.error.bind(console, 'Sass error:'),
		}))
		.pipe(autoprefixer({
			// browsers: ['last 2 versions']
		}))
		.pipe(gulp.dest(paths.css));
});

gulp.task('watch', function() {
	gulp.watch([paths.scss], ['styles']);
});

gulp.task('default', function() {
	gulp.start('watch');
});