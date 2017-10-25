
app.common =
	init: ->

		$(".section-code").each ->
			tag = $(this).attr "data-name"
			$(this)
				.prepend("<span class='section-tag dscroll'>&lt;"+tag+"&gt;</span><br>")
				.append("<br><span class='section-tag dscroll'>&lt;/"+tag+"&gt;</span>")

		$('.header-ham').click (e) ->
			e.stopPropagation()
			header = $('.header-menu, .ham-bar, .header-logo')
			if !header.hasClass("on")
				$(this).addClass "on"
				$('body').addClass "on"
				header.addClass "on"
			else
				header
					.removeClass "on"
					.addClass "out"
				$('body').removeClass "on"
				$(this).removeClass "on"
				setTimeout ->
					header.removeClass "out"
				,500
		$('.header-menu ul li a').click ->
			$('.header-ham').trigger 'click'
			
		$('.split-letters a').each( (index) ->
			characters = $(this).text().split("")
			$this = $(this)
			$this.empty()
			$.each(characters, (i, el) ->
				if el == " "
					empty = "empty"
					el = "-"
				else
					empty = ""
				$this.append("<span class='"+empty+" letter'>" + el + "</span");
			)

		)
		particlesJS.load 'particles-js', 'js/particles.json', ->
			console.log('callback - particles.js config loaded')

		$('.wantmysite-button').click ->
			$('.mysite-modal').addClass "on"
		$(".modal-box .modal-close").click ->
			$(this).closest('.modal-container').removeClass 'on'

		$('a[href^="#"]').on 'click', (event) ->
			target = $($(this).attr('href'))
			if target.length
				event.preventDefault()
				$('html, body').animate { scrollTop: target.offset().top-40 }, 500
			return