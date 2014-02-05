$(function(){
	// initialize mixitup
	$('#Grid').mixitup({
		resizeContainer: false,
		showOnLoad: 'nav'
	});
	$("#wheel").click(function() {
		$(this).attr('background-image', 'img/roll_over/Wheels_Rollover.jpg');
	});
    $(".sticky-element").sticky({ topSpacing: 0});
});