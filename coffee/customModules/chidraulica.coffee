app.chidraulica =
	init: ->
		if $(document).width()>=720
				$('.section-about-us .titles').height($('.section-about-us .content').height())
		$(window).on 'resize', ->
			if $(document).width()>=720
				$('.section-about-us .titles').height($('.section-about-us .content').height())
			else
				$('.section-about-us .titles').css "height", "auto"
		
		$(document).on 'click', 'body', ->
			if $('.header-ham').hasClass 'on'
				$('.header-ham').trigger 'click'