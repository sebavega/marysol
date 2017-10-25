app.brotherad =
	init: ->
		$('.modal-button').click ->
			modal = $(this).attr 'data-id'
			console.log modal
			$(".modal[data-id='"+modal+"']").addClass 'in'
		$('.modal-close').click ->
			$(this).closest('.modal').removeClass 'in'

		$('.header.brother a').click ->
			aux = false
			$('.header.brother a').each ->
				if $(this).hasClass 'active'
					aux = true
					$(this).removeClass 'active'
			button = $(this)
			if aux
				setTimeout ->
					button.addClass 'active'
				,150
			else
				button.addClass 'active'