$(function(){
	// initialize mixitup
	$('#Grid').mixitup({
		resizeContainer: false,
		showOnLoad: 'nav'
	});
	// only display the wheels on load
	//$('div[data-filter=wheel]').click();
    $(".sticky-element").sticky({ topSpacing: 0});
});