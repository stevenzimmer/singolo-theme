var gulp = require('gulp'),
	watch = require('gulp-watch'),
	postcss = require('gulp-postcss'),
	autoprefixer = require('autoprefixer'),
	cssvars = require('postcss-simple-vars'),
	nested = require('postcss-nested'),
	cssimport = require('postcss-import'),
	mixins = require('postcss-mixins'),
	sprite = require('gulp-svg-sprite'),
	rename = require('gulp-rename'),
	del	= require('del'),
	clean = require('gulp-clean-css'),
	webpack = require('webpack');


gulp.task('styles', function() {

	return gulp.src('style.css')
		.pipe( postcss(
				[
					cssimport,
					mixins,
					cssvars,
					nested,
					autoprefixer
				]
			)
		)
		.on('error', function(error) {
			console.log(error.toString());
			this.emit('end');
		})
		.pipe( clean({
			compatibility: 'ie8',
			debug: true
		}))
		.pipe( rename('style.min.css'))
		.pipe( gulp.dest( 'build/styles' ));

});

gulp.task('scripts', function(callback) {
	webpack( require('./webpack.config.js'), function(err, stats) {
		callback();
		if (err) {
			console.log(err.toString());
			console.log(stats.toString());
		}

	});
});


gulp.task('watch', function() {

	watch('style.css', function() {
		gulp.start('styles');
	});

	watch('./scripts/main.js', function() {
		gulp.start('scripts');
	});

});

var config = {

	mode: {

		css: {
			sprite: 'sprite.svg',

			render: {

				css: {
					template: './modules/templates/sprite.css'
				}
			}
		}
	},

	shape: {

		spacing: {

			padding: 2
		}
	}
}

gulp.task('beginClean', function() {

	return del( './build/sprite/css' );

});

gulp.task('createSprite', ['beginClean'], function() {

	return gulp.src('./icons/**/*.svg')
		.pipe( sprite( config ) )
		.pipe( gulp.dest( 'build/sprite' ) )

});

gulp.task('copySpriteCss', ['createSprite'], function() {

	return gulp.src( './build/sprite/css/*.css')
		.pipe( rename('_sprite.css'))
		.pipe( gulp.dest('./modules/global'));

});

gulp.task('icons', ['beginClean', 'createSprite', 'copySpriteCss']);