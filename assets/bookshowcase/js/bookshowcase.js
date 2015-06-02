$(function() {
	var book = $('#book');

	$('.coverImg').click(function() { 
		$(this).addClass('cur').siblings().removeClass('cur');
		book.removeClass().addClass('open-book');

	});
	$('.book-cover-back').click(function() {
		$(this).removeClass('cur');
		$('#view-cover').addClass('cur');
		book.removeClass().addClass('view-cover');
	})
	$('.open-page-1').click(function() {
		$('#page-2').hide();
		$('#page-1').show();
	});

	$('.open-page-2').click(function() {
		$('#page-1').hide();
		$('#page-2').show();
	});
	
	$('.goto-page-4').click(function() {
		$('#page-3').hide();
		$('#page-4').show();
	});
	$('.goto-page-3').click(function() {
		$('#page-2').hide();
		$('#page-4').hide();
		$('#page-3').show();
	});
	$('.goto-page-2').click(function() {
		$('#page-3').hide();
		$('#page-2').show();
	});
});