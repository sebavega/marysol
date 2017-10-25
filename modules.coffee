
modules =
	"slider":			true
	"modal":			true
	"youtube":			true
	"gmap":				true
	"gallery":			true
	"faq":				true
	"tabs":				true
	"tooltips":			true
	"loader":			true
	"cookie":			true
	"forms":			true
	"scroll":			true
	"browsers":			true
	"shares":			true
	"activelinks":		true
	"verticalalign":	true
	"isotope":			false
	"relayout":			true
	"imagesLoaded":		true

plugins = 
	"jquery":			"bower_components/jquery/dist/jquery.min.js"
	"particles":		"bower_components/particles.js/particles.js"
	"imagesLoaded":		"bower_components/imagesloaded/imagesloaded.pkgd.min.js"
	"hammerjs":			"bower_components/hammerjs/hammer.min.js"
	"isotope":			"bower_components/isotope/dist/isotope.pkgd.min.js"
	"isotopePackery":	"bower_components/isotope-packery/packery-mode.pkgd.min.js"
	"others":           "front-dev/js-plugins/*.js"


module.exports = (path,extension=false) ->

	modulesToExport = []
	pluginsToExport = []
	pluginsToExport.push plugins.jquery
	pluginsToExport.push plugins.particles

	for module,val of modules
		if val

			# Modules
			modulesToExport.push path+"/"+module+"."+extension

			# Plugins dependences

			if module == "slider"
				pluginsToExport.push plugins.hammerjs

			if module == "imagesLoaded"
				pluginsToExport.push plugins.imagesLoaded

			if module == "isotope"
				pluginsToExport.push plugins.isotope
				pluginsToExport.push plugins.isotopePackery

	pluginsToExport.push plugins.others
	
	if path == "plugins"
		return pluginsToExport
	else
		return modulesToExport


