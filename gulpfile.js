const { src, dest, watch, series } = require('gulp'),
    cleanCSS = require('gulp-clean-css'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    autoprefixer = require('gulp-autoprefixer'),
    sass = require('gulp-sass')(require('sass'));

function generateCSS(cb) {
    src('assets/scss/style.scss')
        .pipe(sass())
        .pipe(autoprefixer('last 2 versions'))
        .pipe(cleanCSS())
        .pipe(dest('.'))
    cb();
}

function minifyJs(cb) {
    src('assets/js/parts/**.js')
        .pipe(concat('scripts.min.js'))
        .pipe(uglify())
        .pipe(dest('./assets/js/'))
    cb();
}

function watchFiles(cb) {
    watch('assets/scss/**/**.scss', generateCSS);
    watch('assets/js/parts/**.js', minifyJs);
}

exports.css = generateCSS;
exports.js = minifyJs;
exports.watch = watchFiles;

exports.default = series(generateCSS);