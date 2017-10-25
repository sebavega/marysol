app.javihidraulica =
	init: ->
		console.log "hidraulica"
		$(".scrollable-section").height($(window).height())
		$(window).resize ->
			$(".scrollable-section").height($(window).height())