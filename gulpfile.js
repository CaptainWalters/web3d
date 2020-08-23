const browserSync = require('browser-sync').create();
const gulp = require('gulp');
const concat = require('gulp-concat');
const connect = require('gulp-connect-php');
const clean = require('gulp-rimraf');
const sass = require('gulp-sass');

gulp.task('clean', () => gulp.src('build/*', { read: false }).pipe(clean()));

// Copying html
gulp.task('html', () =>
  gulp.src('./src/**/*.html').pipe(gulp.dest('./build')).pipe(browserSync.stream())
);

// Copying php
gulp.task('php', () =>
  gulp.src('./src/**/*.php').pipe(gulp.dest('./build')).pipe(browserSync.stream())
);

// Compile sass to css into and inject live changes
gulp.task('sass', () => {
  return gulp
    .src('./src/scss/**/*.scss')
    .pipe(sass())
    .pipe(gulp.dest('./build/css'))
    .pipe(browserSync.stream());
});

// Copying JS
gulp.task('js', () =>
  gulp.src('./src/js/**/*.js').pipe(concat('all.js')).pipe(gulp.dest('./build/js'))
);

gulp.task('assets', () => gulp.src('./src/assets/**/*').pipe(gulp.dest('./build/assets')));

gulp.task('db', () => gulp.src('./src/db/*').pipe(gulp.dest('./build/db')));

// Copying fonts
gulp.task('fonts', () => gulp.src('./src/fonts/**/*').pipe(gulp.dest('./build/fonts')));

// So the thing
gulp.task(
  'serve',
  gulp.series('clean', 'html', 'php', 'sass', 'js', 'fonts', 'assets', 'db', function () {
    connect.server(
      {
        port: 8000,
        base: './build/',
        keepalive: true,
      },
      () => {
        browserSync.init({
          proxy: 'localhost:8000/index.php',
          notify: false,
        });
      }
    );
    gulp.watch('./src/**/*.html', gulp.series('html')).on('change', browserSync.reload);
    gulp.watch('./src/**/*.php', gulp.series('php')).on('change', browserSync.reload);
    gulp.watch('./src/scss/**/*.scss', gulp.series('sass'));
    gulp.watch('./src/js/**/*.js', gulp.series('js')).on('change', browserSync.reload);
  })
);

gulp.task('default', gulp.parallel('serve'));
