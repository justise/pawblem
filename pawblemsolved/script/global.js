// Global JS
$(function(){ 
	// Done using JS because its a server side component
	setSelectedTab();
});



function setSelectedTab() {
	// Get navigation link based on current page.
	var split = window.location.pathname.split('/');
	var page = split[split.length-1];
	$(".nav a[href='" + page + "']").parent().addClass("selected");
}