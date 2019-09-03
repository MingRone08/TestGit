$(function() {
	$('.nut').click(function() {
		/* Act on the event */
		$('.momo').addClass('momodira');
		$('.noidung').addClass('noidungdira');
	});

	$('.nutdong').click(function() {
		/* Act on the event */
		$('.momo').removeClass('momodira');
		$('.noidung').removeClass('noidungdira');
		$('.noidung_1').removeClass('noidungtruotra');
	});

	$('.momo').click(function() {
		/* Act on the event */
		$('.momo').removeClass('momodira');
		$('.noidung').removeClass('noidungdira');
		$('.noidung_1').removeClass('noidungtruotra');
	});

	$('.traisangphai').click(function() {
		/* Act on the event */
		$('.momo').addClass('momodira');
		$('.noidung_1').addClass('noidungtruotra');
	});
});