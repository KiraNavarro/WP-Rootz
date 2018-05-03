var gulp = require('gulp');
	sass = require('gulp-sass');
	watch = require('gulp-watch');
	browserSync = require('browser-sync').create();
	autoprefixer = require('gulp-autoprefixer');

gulp.task('browser-sync', () => {
	var files = [
		'./style.css',
		'./*.php',
		'./img/**'
	]
	// Initialize Browsersync with php server
	browserSync.init(files,{
		proxy: "http://localhost:8888/wp-rootz"
	});
});

gulp.task('sass', () => {
	gulp.src('sass/**/*.scss')
		.pipe(sass().on('error', sass.logError))
		.pipe(autoprefixer({
			browsers: ['last 2 versions'],
			cascade: false
		}))
		.pipe(gulp.dest('./'))
		.pipe(browserSync.stream());
});



gulp.task('default', ['sass', 'browser-sync'], () => {
	return gulp.watch('sass/**/*.scss', ['sass']);
});
