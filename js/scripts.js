$(document).ready(function() {
	$('body').addClass('isLoaded');

	$('a:not([href^="#"], .toggle-aside)').click(function() {
		$('body').removeClass('isLoaded');

		setTimeout(function() { $('body').addClass('isLoaded'); }, 3000);
	});

	// $('a.toggle-aside').click(function() {
	// 	toggleAside();
	// });
});

function toggleAside() {
	$('aside').toggleClass('isExpanded');
}