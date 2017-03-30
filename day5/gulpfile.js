// this is a javascript line comment, everything after two slashes is not doing anything, comments end with end of the line
// load gulp
var gulp = require('gulp');
var browserSync = require('browser-sync').create();

gulp.task('default', function(){
    browserSync.init({
        server: {
            baseDir: './'
        },
        files: ['*.css', '*.html']
    });
});



