var gulp = require('gulp');
var livereload = require('gulp-livereload')
var uglify = require('gulp-uglifyjs');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var sourcemaps = require('gulp-sourcemaps');
var imagemin = require('gulp-imagemin');
var pngquant = require('imagemin-pngquant');




gulp.task('imagemin', function () {
    return gulp.src('./wp-content/themes/kreartivci/images/*')
        .pipe(imagemin({
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use: [pngquant()]
        }))
        .pipe(gulp.dest('./wp-content/themes/kreartivci/images'));
});


gulp.task('sass', function () {
  gulp.src('./wp-content/themes/kreartivci/sass/**/*.scss')
    .pipe(sourcemaps.init())
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 7', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('./wp-content/themes/kreartivci'));
});


gulp.task('uglify', function() {
  gulp.src('./wp-content/themes/kreartivci/lib/*.js')
    .pipe(uglify('kreartivci.min.js'))
    .pipe(gulp.dest('./wp-content/themes/kreartivci/js'))
});

gulp.task('watch', function(){
    livereload.listen();

    gulp.watch('./wp-content/themes/kreartivci/sass/**/*.scss', ['sass']);
    gulp.watch('./wp-content/themes/kreartivci/lib/*.js', ['uglify']);
    gulp.watch(['./wp-content/themes/kreartivci/style.css', './wp-content/themes/kreartivci/*.php', './wp-content/themes/kreartivci/js/*.js', './wp-content/themes/kreartivci/parts/**/*.php'], function (files){
        livereload.changed(files)
    });
});
