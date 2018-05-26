// Global JS
$(function(){ 
	// Done using JS because its a server side component
	setSelectedTab();


	var slides = $("#review-slides");
	if(slides) {
		slides.slick({
			autoplay:true
		});
	}

	$("#facebook-container")
		.append('<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fpawblemsolved%2F&tabs=timeline&width=300&height=400&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=false&appId=1710284432544466" width="300" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>');
});

function setSelectedTab() {
	// Get navigation link based on current page.
	var split = window.location.pathname.split('/');
	var page = split[split.length-1];
	$(".nav a[href='" + page + "']").parent().addClass("selected");
}