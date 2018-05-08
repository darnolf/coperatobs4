var gulp = require('gulp');
var browserSync = require('browser-sync').create();
var sass = require('gulp-sass');
var php = require('gulp-connect-php');

// Static Server + watching scss/html files
gulp.task('serve', ['sass'], function() {

    browserSync.init({
        proxy: 'http://coperatovirtual.zip/'
    });

    gulp.watch("app/scss/*.scss", ['sass']);
    gulp.watch("app/*.php").on('change', browserSync.reload);
    gulp.watch("app/**/*.php").on('change', browserSync.reload);
    gulp.watch("app/*.html").on('change', browserSync.reload);
});

// Compile sass into CSS & auto-inject into browsers
gulp.task('sass', function() {
    return gulp.src("app/scss/*.scss")
        .pipe(sass())
        .pipe(gulp.dest("app/css"))
        .pipe(browserSync.stream());
});

gulp.task('default', ['serve']);