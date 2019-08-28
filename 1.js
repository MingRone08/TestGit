$(function() {
	$('.btn').click(function() {
		/* Act on the event */
		$('.nenden').animate({marginLeft: 0, opacity: 0.3}, 0.4);
		$('.icon').animate({opacity: 1 }, 0.5);
	});

	$('.esc').click(function(event) {
		/* Act on the event */
			$('.nenden').animate({ opacity: 0});
			$('.icon').animate({opacity: 0 });		
	});
});
