var gulp = require('gulp'),
	imagemin = require('gulp-imagemin'),
	clean = require('gulp-clean'),
	concat = require('gulp-concat'),
	// htmlReplace = require('gulp-html-replace');
	uglify = require ('gulp-uglify');

gulp.task('clean',function(){
	return gulp.src('dist')
	.pipe(clean());
});

gulp.task('copy', ['clean'],function(){
	return gulp.src('src/**/*')
	.pipe(gulp.dest('dist'));
	
});

gulp.task('build-img',function(){
	     gulp.src('src/img/**/*')
		.pipe(imagemin())
		.pipe(gulp.dest('dist/img'));
});	


gulp.task('build-js',function(){

	gulp.src(['dist/js/jquery.js','dist/js/bootstrap.min.js','dist/js/bootstrap-sprockets.js','dist/js/jquery.sliphover.min.js', 'dist/js/scrolando.js','dist/js/animacoes.js'])
	.pipe(concat('all.js'))
	.pipe(uglify())
	.pipe(gulp.dest('dist/js'));
});


gulp.task('default',['copy'],function(){
	gulp.start('build-img','build-js')
});






