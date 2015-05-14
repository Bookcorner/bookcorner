$(function(){
	var book = $('#book');

	$('#open-book').click(function(){
		if ( book.attr('class') !='open-book') {
			$(this).addClass('cur').siblings().removeClass('cur');
			book.removeClass().addClass('open-book');
		}else{
			$(this).removeClass('cur');
			$('#view-cover').addClass('cur');
			book.removeClass().addClass('view-cover');
		}
	});
});