$(function() {
	/*
	var ml = ['More', 'Less'];
	
	// Attach to the more links.
	$('div.testimonials a.more-link').click(function() {
		var moreLink = $(this);
		var moreSpan = moreLink.parent().children('span.more');
			moreSpan.slideToggle();
			
			moreLink.text( moreLink.text() == ml[0] ? ml[1] : ml[0] );
			
			
	});
	*/
	
	//startSlideShow($(".slideshow img"), 5000);
	
	function startSlideShow(items, interval) {
		setInterval(function nextSlide() {
			var curr = $(".slideshow img.show");
			var next = curr.next();
			
			if(next.length === 0) {
				next = $(".slideshow img:first");
			}
			
			curr.fadeOut(1500, function() { 
				$(this).removeClass('show'); 
			});
			
			setTimeout(function() {
				next.fadeIn('slow', function() { $(this).addClass('show') });
			}, 1300);
			
		}, interval);
	}	
});

