const {src, dest, parallel, series, watch} = require('gulp')
const concat = require('gulp-concat')
const minify = require("gulp-babel-minify")
const sass = require('gulp-sass')
const autoprefixer = require('gulp-autoprefixer')
const cleanCSS = require('gulp-clean-css')
const imagemin = require('gulp-imagemin')

function js(){
    return src('assets/js/script.js')
        .pipe(concat('script.min.js'))
        .pipe(minify({
            mangle: {
                keepClassName: true
            }
    }))
    .pipe(dest('src/js/'))
}

function styles() {
    return src('assets/css/style.scss')
    .pipe(sass())
    .pipe(concat('style.min.css'))
    .pipe(autoprefixer({
        grid: true
    }))
    .pipe(cleanCSS())
    .pipe(dest('src/css/'))
}

function fonts() {
    return src('assets/fonts/**/*')
    .pipe(dest('src/fonts/'))
}

function gwatch() {
    watch('assets/js/*.js', js)
    watch('assets/css/*.scss', styles)
    watch('assets/fonts/**/*', fonts)
    watch('assets/img/**/*', img)
}

function img() {
    return src('assets/img/**/*')
        .pipe(imagemin([
            imagemin.optipng({optimizationLevel: 5})
        ]))
        .pipe(dest('src/img/'))
}

exports.js = js
exports.css = styles
exports.fonts = fonts
exports.default = series(parallel(js, styles, fonts, img, gwatch))