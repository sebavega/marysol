
gulp         = require("gulp")
coffee       = require("gulp-coffee")
stylus       = require("gulp-stylus")
watch        = require("gulp-watch")
livereload   = require("gulp-livereload")
include      = require("gulp-include")
prefix       = require("gulp-autoprefixer")
concat       = require("gulp-concat")
addsrc       = require("gulp-add-src")
uglify       = require("gulp-uglify")
csso         = require("gulp-csso")
imagemin     = require("gulp-imagemin")
pngquant     = require("imagemin-pngquant")
changed      = require("gulp-changed")


path_dev     = "front-dev"
path_dist    = "front-dist"


files =

	stylus:
		watch:          path_dev + "/stylus/**/*.styl"
		src:            path_dev + "/stylus/main*.styl"
		modules:        require('./modules.coffee')(path_dev+"/stylus/coreModules", "styl")
		destDist:       path_dist + "/css"
		destDistMin:    path_distmin + "/css"

	coffee:
		watch:          path_dev + "/coffee/**/*.coffee"
		src:            path_dev + "/coffee/app.coffee"
		modules:        require('./modules.coffee')(path_dev+"/coffee/coreModules", "coffee")
		modulesCustom:  path_dev + "/coffee/customModules/*.coffee"
		plugins:        require('./modules.coffee')("plugins")
		destDist:       path_dist + "/js"
		destDistMin:    path_distmin + "/js"

	images:
		watch:          path_dev + "/img/**/*"
		src:            path_dev + "/img/**/*"
		destDist:       path_dist + "/img"
		destDistMin:    path_distmin + "/img"


gulp.task "default", ->

	livereload.listen()
	gulp.watch(path_dist + "/css/*.css").on "change", livereload.changed

	gulp.watch files.stylus.watch,      [ "build:css" ]
	gulp.watch files.coffee.watch,      [ "build:js" ]
	gulp.watch files.images.watch,      [ "build:images" ]

	return


gulp.task 'build', [
	'build:js'
	'build:css'
	'build:images'
]


gulp.task "build:css", ->
	gulp.src(files.stylus.src)
		.pipe(addsrc.append(files.stylus.modules))
		.pipe(concat("main.styl"))
		.pipe(stylus({'include css': true}))
		.pipe(prefix())
		.pipe(gulp.dest(files.stylus.destDist))
		.pipe(csso())
		.pipe(gulp.dest(files.stylus.destDistMin))
	return

gulp.task "build:js", ->
	gulp.src(files.coffee.src)
		.pipe(include())
		.pipe(addsrc.append(files.coffee.modules))
		.pipe(addsrc.append(files.coffee.modulesCustom))
		.pipe(coffee(bare: true))
		.pipe(addsrc.prepend(files.coffee.plugins))
		.pipe(concat("main.js"))
		.pipe(gulp.dest(files.coffee.destDist))
		.pipe(uglify())
		.pipe(gulp.dest(files.coffee.destDistMin))
	return

gulp.task "build:images", ->
	gulp.src(files.images.src)
		.pipe(changed(path_dev,extension: ".jpg|.png|.gif"))
		.pipe(imagemin( progressive: true, use: [ pngquant(quality: "70-80") ] ))
		.pipe(gulp.dest(files.images.destDist))
		.pipe(gulp.dest(files.images.destDistMin))
	return




