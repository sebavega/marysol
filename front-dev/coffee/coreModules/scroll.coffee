

app.scroll =

	init: ->

		$(".cols>*").addClass("dscroll")

		if !app.isMobile() && $(window).width()>=960

			app.scroll.dscroll(0)
			app.scroll.titlescroll(0)

			setInterval ->
				app.scroll.dscroll $(window).scrollTop()
				app.scroll.titlescroll $(window).scrollTop()
			,100

			scroll_prev = 0

			#app.scroll.navscroll.init $("section")

			$(window).scroll ->	
				scroll = $(window).scrollTop()
				app.scroll.dscroll(scroll)
				app.scroll.titlescroll(scroll)

		else
			$(".dscroll").addClass("dscroll-in")
			$(".section-title").addClass("section-title-in")


		# Go to
		$("[data-goto]").click (e) ->
			to = $(this).attr "data-goto"
			app.scroll.goto to
			e.preventDefault()


	dscroll: (scroll) ->

		# Mostrar en scroll

		if $(".dscroll").length
			element_top_prev  = 0
			element_top_delay = 0
			$(".dscroll:visible:not(.dscroll-in)").each ->
				element = $(this)
				element_top = element.offset().top
				if scroll + $(window).height() > element_top + 100
					element.addClass "dscroll-in"

					if element_top == element_top_prev
						element_top_delay++
						delay = element_top_delay*0.2
						element.css
							'-webkit-animation-delay': delay+"s"
							'animation-delay': delay+"s"
					else
						element_top_delay=0


					element_top_prev = element_top

	titlescroll: (scroll) ->

		# Mostrar en scroll

		if $(".section-title").length
			element_top_prev  = 0
			element_top_delay = 0
			$(".section-title:visible:not(.section-title-in)").each ->
				element = $(this)
				element_top = element.offset().top
				if scroll + $(window).height() > element_top + 100
					element.addClass "section-title-in"

					if element_top == element_top_prev
						element_top_delay++
						delay = element_top_delay*0.2
						element.css
							'-webkit-animation-delay': delay+"s"
							'animation-delay': delay+"s"
					else
						element_top_delay=0


					element_top_prev = element_top



	goto: (to,add=false,seconds=1000) ->
		add = $("header").height() + 20 if !add
		top = to.offset().top - add
		$("body").animate
			scrollTop: top
		,seconds


