var gulp = require('gulp'),
    gutil = require('gulp-util'),
    jshint = require('gulp-jshint'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    sass = require('gulp-sass');

gulp.task('default',function() {
  return gutil.log('Gulp is running!');
});

gulp.task('jshint', function() {
  return gulp.src('assets/js/dev/*.js')
    .pipe(jshint())
    .pipe(jshint.reporter('jshint-stylish'));
});

gulp.task('build-js', function() {
  return gulp.src('assets/js/dev/*.js')
  .pipe(concat('bundle.js'))
  .pipe(uglify())
  .pipe(gulp.dest('assets/js/dist/'));
});

gulp.task('sass',function() {
  return gulp.src('assets/css/*.scss')
  .pipe(sass())
  .pipe(concat('build.css'))
  .pipe(gulp.dest('assets/css/'));
});

gulp.task('watch', function() {
  gulp.watch('assets/js/dev/*.js',['jshint']);
  gulp.watch('assets/js/dev/*.js',['build-js']);
  gulp.watch('assets/css/*.scss',['sass']);
});
