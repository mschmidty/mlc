const { src, dest, watch, series, parallel } = require('gulp');
const sass = require('gulp-sass');
const minifyCSS = require('gulp-csso');
const babel = require('gulp-babel');
const concat = require('gulp-concat');
const browserSync = require('browser-sync').create();
const rename = require('gulp-rename');
const autoprefixer = require('gulp-autoprefixer');
var svgstore = require('gulp-svgstore');
var svgmin = require('gulp-svgmin');
var path = require('path');


//Styles Task
function css() {
    return src('./src/sass/*.sass', { sourcemaps: true })
        .pipe(sass())
        .pipe(autoprefixer({
            overrideBrowserslist: ['last 2 versions'],
            cascade: false
        }))
        .pipe(minifyCSS())
        .pipe(rename('style.css'))
        .pipe(dest('./'), { sourcemaps: true })
        .pipe(browserSync.stream());
}

function js() {
    return src('./src/js/*.js', { sourcemaps: true })
        .pipe(babel({
            presets: ['@babel/env']
        }))
        .pipe(concat('main.min.js'))
        .pipe(dest('./js', { sourcemaps: true }));
}

function browser() {
    browserSync.init({
        proxy: 'mlc:8888',
        files: [
            './**/*.php'
        ]
    });

    watch('./src/sass/**/*', css);
    watch('./src/js/*', js).on('change', browserSync.reload);
}

function svgstore() {
    return gulp
        .src('src/svg/*.svg')
        .pipe(svgmin(function (file) {
            var prefix = path.basename(file.relative, path.extname(file.relative));
            return {
                plugins: [{
                    cleanupIDs: {
                        prefix: prefix + '-',
                        minify: true
                    }
                }]
            }
        }))
        .pipe(svgstore())
        .pipe(gulp.dest('template-parts'));
}

exports.css = css;
exports.js = js;
exports.svg = svgstore;
exports.default = series(css, js, browser, svgstore);