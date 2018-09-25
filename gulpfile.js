const gulp = require('gulp');
const sass = require('gulp-sass');

gulp.task('default', ['sass']);

gulp.task('sass', [], function(){
   return gulp.src('_scss/**/*.scss')
      .pipe(sass())
      .pipe(gulp.dest('_css/'));
});

gulp.task('watch', ['sass'], function(){
   gulp.watch('_scss/*.scss', ['sass'], function(){});
});
