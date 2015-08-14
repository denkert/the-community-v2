'use strict';

var gulp          = require('gulp');
var sass          = require('gulp-sass');
var gutil         = require('gulp-util');
var autoprefixer  = require('gulp-autoprefixer');



// More Info: https://github.com/ai/browserslist
var supportedBrowsers = [
    'last 2 Chrome versions',
    'last 2 IE versions',
    'last 4 Safari versions',
    'last 2 Firefox versions',
    'last 2 iOS versions',
    'last 1 FirefoxAndroid versions',
    'last 1 ie_mob versions',
    'last 1 ChromeAndroid versions'
];

var paths = {
    //coffee:  'static_source/coffee/**/*.litcoffee',
    sass:    'sass/**/*.s*ss',
    //scripts: 'static_source/js/billing/**/*.jsx'
};


gulp.task('sass', function() {
    return gulp.src(paths.sass)
        .pipe(sass({indentedSyntax: true, errLogToConsole: true}))
        .pipe(autoprefixer({browsers: supportedBrowsers}))
        .pipe(gulp.dest('./'));
});




gulp.task('watch', function() {
    gulp.watch(paths.sass, ['sass']);
});


// The default task (called when you run `gulp` from cli)
gulp.task('default', ['sass', 'watch']);
