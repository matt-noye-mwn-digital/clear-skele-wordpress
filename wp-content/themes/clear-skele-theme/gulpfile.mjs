import gulp from 'gulp';
import dartSass from 'sass';
import gulpSass from 'gulp-sass';
import cleanCSS from 'gulp-clean-css';
import autoprefixer from 'gulp-autoprefixer';
import rename from 'gulp-rename';

const sass = gulpSass(dartSass);

const paths = {
  scss: {
    src: 'assets/scss/**/*.scss',  // Watch all SCSS files in the folder
    main: 'assets/scss/main.scss', // Path to main.scss
    dest: 'assets/css',
  },
};

function styles() {
  return gulp
    .src(paths.scss.main)  // Always compile main.scss
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer({
      cascade: false,
    }))
    .pipe(cleanCSS())
    .pipe(rename('main.min.css'))
    .pipe(gulp.dest(paths.scss.dest));
}

function watch() {
  gulp.watch(paths.scss.src, styles);  // Watch all SCSS files
}

const build = gulp.series(styles, watch);

export { styles, watch, build };
export default build;
