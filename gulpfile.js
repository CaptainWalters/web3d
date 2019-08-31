const gulp        = require('gulp');
const browserSync = require('browser-sync');
const sass        = require('gulp-sass');
const php         = require('gulp-connect-php');

gulp.task('html', function() {
    return gulp.src(['./src/**/*.html'])
        .pipe(gulp.dest('./dist'))
        .pipe(browserSync.stream());
});

gulp.task('php', function() {
    return gulp.src(['./src/**/*.php'])
        .pipe(gulp.dest('./dist'))
        .pipe(browserSync.stream());
});

gulp.task('sass', function () {
    return gulp.src(['./src/scss/*.scss'])
        .pipe(sass())
        .pipe(gulp.dest('./dist/css'))
        .pipe(browserSync.stream());
});

gulp.task('js', function() {
    return gulp.src(['./src/js/*.js'])
        .pipe(gulp.dest('./dist/js'))
        .pipe(browserSync.stream());
});

gulp.task('serve', gulp.series('html','php','sass','js', function() {
    php.server({
        port:8000,
        base:'./dist/',
        keepalive: true
    }, function() {
        browserSync({
            proxy: '127.0.0.1:8000'
        });
    });
    gulp.watch('./src/**/*.html', gulp.series('html')).on('change', browserSync.reload);
    gulp.watch('./src/**/*.php', gulp.series('php')).on('change', browserSync.reload);
    gulp.watch('./src/scss/*.scss', gulp.series('sass')).on('change', browserSync.reload);
    gulp.watch('./src/js/*.js', gulp.series('js'))
}));

gulp.task('default', gulp.parallel('serve'));
