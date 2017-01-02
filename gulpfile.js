'use strict';
 
var gulp = require('gulp');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var lib    = require('bower-files')();
var cleanCSS = require('gulp-clean-css');

gulp.task('sass', function () {
  return gulp.src('./assets/css/sass/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./assets/css'));
});

gulp.task('build', function(){
     gulp.src(lib.ext('js').files)
    .pipe(concat('lib.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest('assets/js'));
    
    gulp.src(lib.ext('css').files).pipe(concat('vendor.min.css')).pipe(cleanCSS())
    .pipe(gulp.dest('assets/css'));
});



 
gulp.task('sass:watch', function () {
  gulp.watch('./assets/css/sass/**/*.scss', ['sass']);
});