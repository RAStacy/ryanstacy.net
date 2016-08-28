// Include Gulp //
//////////////////
var gulp = require('gulp');

// Include Our Plugins //
/////////////////////////

// Sass Plugins
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');

// JavaScript Performance Plugins
var concat = require('gulp-concat');
var minify = require('gulp-minify');

// CSS Performance Plugins
var concatCSS = require('gulp-concat-css');
var cleanCSS = require('gulp-clean-css');

// Other Plugins
var rename = require('gulp-rename');

// Gulp Tasks //
////////////////

// Compile Our Sass
gulp.task('sass', function() {
    return gulp.src('wp-content/themes/rs_web_dev/assets/sass/main.scss')
        .pipe(sourcemaps.init())
        .pipe(sass({outputStyle: 'compressed'}))
        .pipe(sourcemaps.write('./'))
        .pipe(gulp.dest('wp-content/themes/rs_web_dev/assets/css'));
});

// Concatenate Our JS Files
gulp.task('concatenateJS', function() {
    return gulp.src(['wp-content/themes/rs_web_dev/assets/js/vendor/jquery-3.1.0.min.js'])
        .pipe(concat('wp-content/themes/rs_web_dev/assets/js/main.js'))
        .pipe(gulp.dest('./'));
});

// Minify Our JS File
gulp.task('minifyJS', ['concatenateJS'], function() {
    return gulp.src('wp-content/themes/rs_web_dev/assets/js/main.js')
        .pipe(minify({
            ext: {
                min: '.min.js'
            }
        }))
        .pipe(gulp.dest('wp-content/themes/rs_web_dev/assets/build/js'));
});

// Concatenate and Minify JS Files
gulp.task('js', ['concatenateJS', 'minifyJS']);

// Concatenate Our CSS Files
gulp.task('concatenateCSS', function() {
    return gulp.src(['wp-content/themes/rs_web_dev/assets/css/normalize.css',
    				 'wp-content/themes/rs_web_dev/assets/css/fonts.css',
					 'wp-content/themes/rs_web_dev/assets/css/solar.css',
                     'wp-content/themes/rs_web_dev/assets/css/projects.css',
                     'wp-content/themes/rs_web_dev/style.css',
                     'wp-content/themes/rs_web_dev/assets/css/main.css'])
        .pipe(concatCSS('wp-content/themes/rs_web_dev/assets/build/css/main.css'))
        .pipe(gulp.dest('./'));
});

// Minify Our CSS File
gulp.task('minifyCSS', ['concatenateCSS'], function() {
    return gulp.src('wp-content/themes/rs_web_dev/assets/build/css/main.css')
        .pipe(cleanCSS())
        .pipe(rename({ suffix: '.min' }))
        .pipe(gulp.dest('wp-content/themes/rs_web_dev/assets/build/css'));
});

// Concatenate and Minify CSS Files
gulp.task('css', ['concatenateCSS', 'minifyCSS']);

// Watch Files For Changes
gulp.task('watch', function() {
    gulp.watch('wp-content/themes/rs_web_dev/assets/sass/**/*.scss', ['sass']);
});

// Default Task
gulp.task('default', ['watch', 'css', 'js' ]);