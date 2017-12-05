var gulp = require('gulp') ;
var concat = require('gulp-concat');
var rename = require('gulp-rename');

// SASS
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');


gulp.task('sass-dev', function () {
  return gulp.src('./sass/helper-css.scss')
    .pipe(sass({outputStyle: 'compressed'}))
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(sourcemaps.write('./maps'))
    .pipe(gulp.dest('./css'));

});

gulp.task('sass-prod', function () {
  return gulp.src('./sass/helper-css.scss')
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest('./css'));
});


gulp.task('prod', function () {
  return gulp.src('./sass/helper-css.scss')
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest('./'));
});

