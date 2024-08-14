import gulp from 'gulp';
import dartSass from 'sass';
import gulpSass from 'gulp-sass';
import cleanCSS from 'gulp-clean-css';
import autoprefixer from 'gulp-autoprefixer';
import rename from 'gulp-rename';  // Import the rename plugin

const sass = gulpSass(dartSass);

const paths = {
  scss: {
    src: 'assets/scss/main.scss',
    dest: 'assets/css',
  },
};

function styles() {
  return gulp
    .src(paths.scss.src)
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer({
      cascade: false,
    }))
    .pipe(cleanCSS())
    .pipe(rename('main.min.css'))  // Rename the output file to main.min.css
    .pipe(gulp.dest(paths.scss.dest));
}

function watch() {
  gulp.watch(paths.scss.src, styles);
}

const build = gulp.series(styles, watch);

export { styles, watch, build };
export default build;
