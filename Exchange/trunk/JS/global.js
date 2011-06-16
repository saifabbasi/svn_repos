jQuery(document).ready(function($) {
	
	$('.blink').focus(function () {
		$(this).parent('.field-holder').addClass('field-active');
		if ($(this).val() == $(this).attr('title')) {
			$(this).val('');
		}
	}).blur(function () {
		$(this).parent('.field-holder').removeClass('field-active');
		if ($(this).val() == '') {
			$(this).val($(this).attr('title'));
		}
	});
	
	if ($.browser.msie && $.browser.version.substr(0,1)<7) {
		DD_belatedPNG.fix('h1#logo a, img, .for-networks, .for-affiliates, .field-holder, .btn-bevo, .txt-grow, .btn-affiliate, .txt-affiliates, .btn-affiliate-portal, .btn-networks, #main .socials a, #main .socials, #footer .logo a');
	};
	
});