const gulp        = require('gulp');
const browserSync = require('browser-sync').create();
const sass        = require('gulp-sass');
const php         = require('gulp-connect-php');

// Copying html
gulp.task('html', function() {
    return gulp.src('./src/**/*.html')
        .pipe(gulp.dest('./dist'))
        .pipe(browserSync.stream());
});

// Copying php
gulp.task('php', function() {
    return gulp.src('./src/**/*.php')
        .pipe(gulp.dest('./dist'))
        .pipe(browserSync.stream());
});

// Compile sass to css into and inject live changes
gulp.task('sass', function () {
    return gulp.src('./src/scss/**/*.scss')
        .pipe(sass())
        .pipe(gulp.dest('./dist/css'))
        .pipe(browserSync.stream());
});

// Copying JS
gulp.task('js', function() {
    return gulp.src('./src/js/**/*.js')
        .pipe(gulp.dest('./dist/js'))
});

// Copying fonts 
gulp.task('fonts', function() {
    return gulp.src('./src/fonts/**/*')
      .pipe(gulp.dest('./dist/fonts'))
});

// So the thing
gulp.task('serve', gulp.series('html','php','sass','js','fonts', function() {
    php.server({
        port:8000,
        base:'./dist/',
        keepalive: true
    }, function() {
        browserSync.init({
            proxy: '127.0.0.1:8000'
        });
    });
    gulp.watch('./src/**/*.html', gulp.series('html')).on('change', browserSync.reload);
    gulp.watch('./src/**/*.php', gulp.series('php')).on('change', browserSync.reload);
    gulp.watch('./src/scss/**/*.scss', gulp.series('sass'));
    gulp.watch('./src/js/**/*.js', gulp.series('js')).on('change', browserSync.reload);
}));

gulp.task('default', gulp.parallel('serve'));
