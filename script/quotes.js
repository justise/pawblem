$(function() {
	//--- Start Quotes Rotation
	startQuotes(5000);
	
});



function startQuotes(slideshowSpeed) {
	//--- Specify which is currently being shown.
	$("#quotes").show();
	$("#quotes li.first").addClass("current");
	var timeoutId = setTimeout(showNextQuote, slideshowSpeed);

	function showNextQuote() {
		//--- Get the current, and then hide it and show the next one.
		var hide = $("#quotes li.current")
		var show = hide.next().length !== 0 ? hide.next() : $("#quotes li:first");
		
		hide.fadeOut(1000, function() {
			$(this).removeClass("current");
			show.fadeIn(500, function() {
				$(this).addClass("current");
				setTimeout(showNextQuote, slideshowSpeed);
			});
		});
	}
}
