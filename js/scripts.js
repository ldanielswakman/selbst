$(document).ready(function() {
	$('body').addClass('isLoaded');

	$('a:not([href^="#"])').click(function() {
		$('body').removeClass('isLoaded');

		setTimeout(function() { $('body').addClass('isLoaded'); }, 3000);
	});
});
