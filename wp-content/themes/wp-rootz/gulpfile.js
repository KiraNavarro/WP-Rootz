var gulp = require('gulp');
	sass = require('gulp-sass');
	watch = require('gulp-watch');
	
gulp.task('sass', () => {
	gulp.src('sass/**/*.scss')
		.pipe(sass().on('error', sass.logError))
		.pipe(gulp.dest('./css/'));
});

gulp.task('default', ['sass'], ()=>{
	return gulp.watch('sass/**/*.scss', ['sass']);
});