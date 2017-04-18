// Load Gulp
var gulp   = require('gulp');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var cssmin = require('gulp-cssmin');
//var postcss    = require('gulp-postcss');

var plumber = require('gulp-plumber');


// Start Watching: Run "gulp"
gulp.task('default', ['watch']);



// SCSS to CSS: Run manually with: "gulp build-css"
gulp.task('build-css', function() {
    return gulp.src('public/css/*.scss')
        .pipe(plumber())
        .pipe(sass())
        .on('error', sass.logError)
        .pipe(autoprefixer({
            browsers: [

                '> 1%',
                'last 2 versions',
                'firefox >= 4',
                'safari 7',
                'safari 8',
                'IE 8',
                'IE 9',
                'IE 10',
                'IE 11'
            ],
            cascade: false
        }))
        .pipe(gulp.dest('public/dist/css')).on('error', sass.logError)
   
});

// Default task
gulp.task('watch', function() {
    //livereload.listen();
     gulp.watch('public/css/**/*.scss', ['build-css']);
});