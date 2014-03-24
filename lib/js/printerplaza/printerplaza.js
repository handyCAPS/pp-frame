
$('.input--menu').on('focusin', function() {
	$(this).animate({
		'width': '+=6em'
	});
	$(this).on('focusout', function() {
		$(this).animate({
			'width': '-=6em'
		});
	})
});