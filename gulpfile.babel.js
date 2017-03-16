import gulp     from 'gulp';
import plugins  from 'gulp-load-plugins';
import browser  from 'browser-sync';
import rimraf   from 'rimraf';
import panini   from 'panini';
import yargs    from 'yargs';
import lazypipe from 'lazypipe';
import inky     from 'inky';
import fs       from 'fs';
import siphon   from 'siphon-media-query';
import path     from 'path';
import merge    from 'merge-stream';
import beep     from 'beepbeep';
import colors   from 'colors';

const $ = plugins();

// Look for the --production flag
const PRODUCTION = !!(yargs.argv.production);
const EMAIL = yargs.argv.to;

// Declar var so that both AWS and Litmus task can use it.
var CONFIG;

// Build the "templates" folder by running all of the above tasks
gulp.task('build',
  gulp.series(clean, pages, sass, images));

// Build emails, run the server, and watch for file changes
gulp.task('default',
  gulp.series('build', server, watch));

// Delete the "templates" folder
// This happens every time a build starts
function clean(done) {
  rimraf('templates', done);
}

// Compile layouts, pages, and partials into flat HTML files
// Then parse using Inky templates
function pages() {
  return gulp.src('src/templates/**/*.tpl.html')
    .pipe(panini({
      root: 'src/templates',
      layouts: 'src/layouts',
      partials: 'src/partials',
      helpers: 'src/helpers'
    }))
    .pipe(inky())
    .pipe($.extReplace('.php'))
    .pipe(gulp.dest('templates'))

    // Update compiled file timestamp.
    .pipe($.shell([
      'touch <%= file.path %>'
    ]));
}

// Reset Panini's cache of layouts and partials
function resetPages(done) {
  panini.refresh();
  done();
}

// Compile Sass into CSS
function sass() {
  return gulp.src('src/assets/scss/mail.scss')
    .pipe($.if(!PRODUCTION, $.sourcemaps.init()))
    .pipe($.sass({
      includePaths: ['node_modules/foundation-emails/scss']
    }).on('error', $.sass.logError))
    .pipe($.if(!PRODUCTION, $.sourcemaps.write()))
    .pipe(gulp.dest('./'));
}

// Copy and compress images
function images() {
  return gulp.src('src/assets/img/**/*')
    .pipe($.imagemin())
    .pipe(gulp.dest('./images'));
}

// Start a server with LiveReload to preview the site in browser
function server(done) {
  browser.init({
    // proxy: 'http://local.dev/blueoi/themed-email' // set this to your development url
  });
  done();
}

// Watch for file changes
function watch() {
  gulp.watch('src/templates/**/*.tpl.html').on('all', gulp.series(pages, browser.reload));
  gulp.watch(['src/layouts/**/*', 'src/partials/**/*']).on('all', gulp.series(resetPages, pages, browser.reload));
  gulp.watch(['../scss/**/*.scss', 'src/assets/scss/**/*.scss']).on('all', gulp.series(resetPages, sass, pages, browser.reload));
  gulp.watch('src/assets/img/**/*').on('all', gulp.series(images, browser.reload));
}