const { src, dest, watch, parallel } = require('gulp');

// Imagenes
const cache = require('gulp-cache');
const imagemin = require('gulp-imagemin');
const webp = require('gulp-webp');
const avif = require('gulp-avif');

const paths = {
    scss: 'src/scss/**/*.scss',
    js: 'src/js/**/*.js',
    imagenes: 'src/img/**/*',
	img_dest: 'no-sub/build/img'
}

function imagenes() {
    return src(paths.imagenes)
        .pipe( cache(imagemin({ optimizationLevel: 3})))
        .pipe( dest(paths.img_dest))
}

function versionWebp( done ) {
    const opciones = {
        quality: 50
    };
    src(paths.imagenes + '.{png,jpg}')
        .pipe( webp(opciones) )
        .pipe( dest(paths.img_dest) )
    done();
}

function versionAvif( done ) {
    const opciones = {
        quality: 50
    };
    src(paths.imagenes + '.{png,jpg}')
        .pipe( avif(opciones) )
        .pipe( dest(paths.img_dest) )
    done();
}

function dev(done) {
    watch( paths.imagenes, imagenes)
    watch( paths.imagenes, versionWebp)
    watch( paths.imagenes, versionAvif)
    done()
}


exports.imagenes = imagenes;
exports.versionWebp = versionWebp;
exports.versionAvif = versionAvif;
exports.dev = parallel( imagenes, versionWebp, versionAvif, dev) ;
exports.default = parallel( imagenes, versionWebp, versionAvif, dev) ;