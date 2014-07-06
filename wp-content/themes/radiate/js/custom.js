jQuery(document).ready(function($) {
	if( radiateScriptParam.radiate_image_link == ''){
		var divheight = $('.header-wrap').height()+'px';
		$('body').css({ "margin-top": divheight });
	}

	$(".header-search-icon").click(function(){
		$("#masthead .search-form").toggleClass('move');
		$("#masthead .socials").toggleClass('move');

	});

	// Back to top	
	$(window).bind('scroll', function(e) {
		header_image_effect();
		if ($(window).scrollTop() > 1000 || $(window).scrollTop() > 1000) {
	       $('.back-to-top-container').fadeIn(800);
	    } else {
	       $('.back-to-top-container').fadeOut(800);
	    }
	});

	$('.back-to-top-container').bind('click', function(e) {
		$("html, body").animate({scrollTop: 0}, 1000);
	});

	$('.back-top').bind('click', function(e) {
		e.preventDefault();
		$("html, body").animate({scrollTop: 0}, 1000);

	});

	// Related posts
	var related_post_title = $('.wp_rp_content .related_post_title');
	if (related_post_title.text()) {
		related_post_title.text('Vous aimerez aussi');
		// Add header image
		var img = $('<img id="related-post-header-img">');
		var template_directory = $('#template-directory').text();

		img.attr('src', template_directory+'/images/heart.png');
		img.prependTo('.wp_rp_content');
	}

	// Popular posts
	var popular_post_title = $('.widget.popular-posts .widget-title');
	if (popular_post_title) {
		popular_post_title.html('<span>vous avez aimé</span>');
	}
});
    	
function header_image_effect() {
	var scrollPosition = jQuery(window).scrollTop();
	jQuery('#parallax-bg').css('top', (0 - (scrollPosition * .2)) + 'px');
}	