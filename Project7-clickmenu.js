$(function() {
	$('.nutmora').click(function(event) {
		/* Act on the event */
		$('.menutrai').toggleClass('divao');
	});

	$('.nutxuong').click(function(event) {
		/* Act on the event */
		$('.menutren').toggleClass('dixuong');
		$('.nutxuong').toggleClass('xuong');
		$('.nutmora').toggleClass('xuong');
	});
});