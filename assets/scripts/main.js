/* ========================================================================
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */
(function($) {
setTimeout(function(){
document.getElementById("navbarLeft").classList.add("delayed-transitions")
}, 400
)

$('[data-toggle="popover"]').popover()
$('[data-toggle="popover"]').click(function(){
	e.preventDefault();
}) 
	
$('#navbarLeft [data-toggle="tooltip"]').tooltip().each(function() {
		$(this).data('bs.tooltip').tip().addClass('tooltip-conditional');
});
	
$("#shade").click(function(){
	$("#navbarLeft").toggleClass('closed');
	$("#main").toggleClass('navLeftClosed');
	$("body").toggleClass('hide-conditional-tooltips');
});

$("#navbarLeftToggle").click(function(){	
	$("#navbarLeft").toggleClass('closed');
	$("#main").toggleClass('navLeftClosed');
	$("body").toggleClass('hide-conditional-tooltips');
	$("#navbar").removeClass('in');
});

window.addEventListener("resize", handleNavOnResize);

function handleNavOnResize() {
	var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
	if(!$("#navbarLeft").hasClass('closed')){
		if( w <= 767){
			$("#navbarLeft").addClass('closed');
			$("#main").addClass('navLeftClosed');
			$("body").addClass('hide-conditional-tooltips');
			
		}else{
			$("#navbarLeft").removeClass('closed');
			$("#main").removeClass('navLeftClosed');
			$("body").removeClass('hide-conditional-tooltips');
		}
	}
}

})(jQuery); // Fully reference jQuery after this point.
