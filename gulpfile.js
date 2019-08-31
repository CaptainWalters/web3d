const gulp        = require('gulp');
const browserSync = require('browser-sync').create();
const sass        = require('gulp-sass');

gulp.task('html', function() {
    return gulp.src(['./src/**/*.html'])
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
    return gulp.src(['src/js/*.js'])
        .pipe(gulp.dest('./dist/js'))
        .pipe(browserSync.stream());
});

gulp.task('serve', gulp.series('html', 'sass', 'js', function() {
    browserSync.init({
        server: './dist/'
    });
    gulp.watch('./scss/*.scss', gulp.series('sass'));
    gulp.watch('./js/*.js', gulp.series('js'))
    gulp.watch('./*.html').on('change', browserSync.reload);
}));

gulp.task('default', gulp.parallel('serve'));
