app.inputRange =


	init: ->

		lvl = $('.progress-image').length
		percent = 100/lvl
		i = 0
		steps = []

		while i<(lvl)
			steps[i] = percent*(i+1)
			i++
		currentFlag = steps[0]
		
		$(".progress-image").each (e)->
			$(this).attr 'data-progress', steps[e]
	
		$(".progress-image[data-progress='"+steps[0]+"']")
			.removeClass "hide"
			.addClass "on"
		$(document).on 'input', '.progress-bar', ->
			value = $(this).val()
			lvlindex = parseInt(value/percent)
			i=0
			if (value > currentFlag && $('.progress-image.on').attr != currentFlag)
				currentFlag = steps[lvlindex]
				$(".progress-image").addClass "hide"
				$(".progress-image[data-progress='"+currentFlag+"']").removeClass "hide"
			#console.log currentFlag+"-lvlindex"+steps[lvlindex]+"wea"+(steps[lvlindex]-percent)
			#console.log "si "+value+"es menor que "+(steps[lvlindex]-percent)+" imprimir wea"
			if (value < (currentFlag-percent))
				currentFlag = currentFlag-percent
				$(".progress-image").addClass "hide"
				$(".progress-image[data-progress='"+currentFlag+"']").removeClass "hide"
			$('.rval').html( value )

			###
			si el valor esta entre steps[n] y steps[n+1] mostrar el articulo con data-progress steps[n+1]
			como hacer n consultas dependiendo del numero de pasos

			si el nivel pasa un flag, marcar siguiente nivel y cambiar slide

			si el valor actual es mayor que el currentflag (valor en el que se deberia pasar al siguiente)
			y el nivel actual no es el currentFlag
			se deben esconder todos las imagees, igualar el current flag al siguiente nivel 
			y mostrar la image del proximo nivel o currentFlag

			si el valor actual es menor que el 
			###