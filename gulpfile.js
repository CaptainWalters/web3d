const gulp        = require('gulp');
const browserSync = require('browser-sync').create();
const sass        = require('gulp-sass');
const php         = require('gulp-connect-php');

// Copying html
gulp.task('html', function() {
    return gulp.src('./src/**/*.html')
        .pipe(gulp.dest('./build'))
        .pipe(browserSync.stream());
});

// Copying php
gulp.task('php', function() {
    return gulp.src('./src/**/*.php')
        .pipe(gulp.dest('./build'))
        .pipe(browserSync.stream());
});

// Compile sass to css into and inject live changes
gulp.task('sass', function () {
    return gulp.src('./src/scss/**/*.scss')
        .pipe(sass())
        .pipe(gulp.dest('./build/css'))
        .pipe(browserSync.stream());
});

// Copying JS
gulp.task('js', function() {
    return gulp.src('./src/js/**/*.js')
        .pipe(gulp.dest('./build/js'))
});

gulp.task('assets', () => (
    gulp.src('./src/assets/**/*')
        .pipe(gulp.dest('./build/assets'))
))

gulp.task('db', () => (
    gulp.src('./src/db/*')
        .pipe(gulp.dest('./build/db'))
))

// Copying fonts 
gulp.task('fonts', function() {
    return gulp.src('./src/fonts/**/*')
        .pipe(gulp.dest('./build/fonts'))
});

// So the thing
gulp.task('serve', gulp.series('html','php','sass','js','fonts','assets','db', function() {
    php.server({
        port:8000,
        base:'./build/',
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
