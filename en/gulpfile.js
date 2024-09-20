var gulp = require('gulp');
var pug = require('gulp-pug');
var sass = require('gulp-sass');
var compass = require('gulp-compass');
var autoprefixer = require('gulp-autoprefixer');
var sourcemaps = require('gulp-sourcemaps');
var browserSync = require('browser-sync');
var changed = require('gulp-changed');
var svgSprite = require('gulp-svg-sprite');
var babel = require("gulp-babel");
var uglify = require('gulp-uglify');
var browserify = require("gulp-browserify");
var webpack = require('webpack-stream');
var nodemon = require('gulp-nodemon');
var named = require('vinyl-named');
var plumber = require('gulp-plumber');

gulp.task('browser-sync', function() {
    browserSync.init({
        proxy: "localhost/koi/en",
        port: 5000,
    });

    gulp.watch('sass/*.scss', ['sass']);
    gulp.watch('src/**', ['js-rebuild']);

    browserSync.watch(['*.html', '*.php', 'language/*.php']).on('change', browserSync.reload);
});
// gulp.task('browser-sync', function() {
//     browserSync.init({
//         // reloadDelay: 500,
//         proxy: "localhost:3000/bcforged",
//         // port: 5000,
//     });

//     gulp.watch('sass/*.scss', ['sass']);
//     gulp.watch('src/**', ['js-rebuild']);

//     browserSync.watch(['*.html', '*.php']).on('change', browserSync.reload);
//     // browserSync.watch('views/**').on('change', browserSync.reload);

// });

gulp.task('babel', function() {
    gulp.src('src/*.js')
        .pipe(plumber())
        .pipe(named())
        .pipe(webpack(require('./webpack.config.js')))
        .pipe(gulp.dest('dist'));
});

gulp.task('js-rebuild', ['babel'], browserSync.reload);

gulp.task('server', function() {
    gulp.src('server.js')
        .pipe(babel({
            presets: ['es2015', 'react'],
            plugins: [
                'async-to-promises'
            ]
        }))
        .pipe(gulp.dest('dist'));
});

gulp.task('nodemon', function() {
    nodemon({
        script: 'dist/server.js',
    }).on('restart', browserSync.reload)
});

gulp.task('pug', function buildHTML() {
    gulp.src('pug/!(_)*.pug')
        .pipe(plumber())
        .pipe(pug({
            // pretty: true
        }))
        .pipe(gulp.dest('./'))
});

gulp.task('pug-rebuild', ['pug'], browserSync.reload);

// gulp.task('sass', function() {
//     gulp.src('sass/*.scss')
//         .pipe(plumber())
//         .pipe(compass({
//             config_file: './config.rb',
//             sass: 'sass',
//             css: 'stylesheets'
//         }))
//         .pipe(sourcemaps.init())
//         .pipe(autoprefixer({
//             browsers: ['last 2 versions', 'ie >= 9', 'and_chr >= 2.3'],
//             cascade: false
//         }))
//         .pipe(sourcemaps.write('./'))
//         .pipe(gulp.dest('stylesheets'))
//         .pipe(browserSync.stream());
// });

gulp.task('sass', function() {
    gulp.src('sass/*.scss')
        .pipe(plumber())
        .pipe(sourcemaps.init())
        .pipe(sass({
            includePaths: ['node_modules/foundation-sites/scss'],
            outputStyle: 'compressed'
        }).on('error', sass.logError))
        .pipe(autoprefixer({
            browsers: [
                'last 2 versions', 'ie >= 9', 'and_chr >= 2.3'
            ],
            cascade: false
        }))
        .pipe(sourcemaps.write('./'))
        .pipe(gulp.dest('stylesheets'))
        .pipe(browserSync.stream());
});

// FIXME: 待修改pug react vue等等
// gulp.task('copy', function() {
//     gulp.src([
//         'css/**',
//         'fonts/**',
//         'images/**',
//         'js/**',
//         'mobile/**',
//         'stylesheets/*.css',
//         '*.php'
//     ], {
//         base: './'
//     })
//     .pipe(changed('public'))
//     .pipe(gulp.dest('public'));
// });

gulp.task('svg', function() {
    gulp.src('svg/*.svg')
        .pipe(svgSprite({
            mode: {
                defs: {
                    dest: './',
                    sprite: "images/all.defs.svg",
                    render: {
                        css: {
                            dest: 'stylesheets/svg-sprites-dims.css'
                        }
                    },
                    inline: true,
                    example: false
                }
            }
        }))
        .pipe(gulp.dest("./"));
});

gulp.task('svg-rebuild', ['svg'], browserSync.reload);

gulp.task('uglify', function() {
    gulp.src('dist/*.js')
        .pipe(uglify())
        .pipe(gulp.dest('dist'));
});

gulp.task('publish', ['uglify']);

gulp.task('default', ['sass', 'babel', 'browser-sync']);