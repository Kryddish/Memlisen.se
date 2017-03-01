
// Global variables
var content = $('.content');
var chosen = 1;

$(document).ready(function() {



/* ========================================
            Head
======================================== */ 
	

	//Fade out the introduction
$(window).scroll(function(){
	$(".introduction").css({
		"opacity": 1 - $(window).scrollTop() / 200,
		"margin-top": -($(this).scrollTop()/2) + "px"
	});
	$(".project-info").css({
		"opacity": 0 + ($(window).scrollTop() - $(".project-info").offset().top + 400) / 300,
	});
});


	/* ========================================
            About me section
======================================== */ 



	//Show the first text (bio)
	$(content[0]).css("display", "inline-block");

	// when you pushed a link in the menu
	$(".project-info button").click(function(event) {

		// saved the pushed element
		var clickedElement = event.target;

		// add class selceted on clicked element
		$(clickedElement).addClass("selected");

		// remove class selected from the element
		$('.project-info buttton').removeClass("selected");



		// check id on element
		if($(clickedElement).attr("id") == "bio" && chosen != 1) {
			$(content).css("display", "none");
			$(content[0]).css("display", "inline-block");
			chosen = 1;
		}
		if($(clickedElement).attr("id") == "skills" && chosen != 2) {
			$(content).css("display", "none");
			$(content[1]).css("display", "inline-block");
			$("#skillbar_php").animate({width:'85%'},850);
			$("#skillbar_asp").animate({width:'100%'},1000);
			$("#skillbar_jsp").animate({width:'75%'},750);
			$("#skillbar_html").animate({width:'80%'},800);
			$("#skillbar_css").animate({width:'80%'},800);

	
			chosen = 2;
		}
		if($(clickedElement).attr("id") == "experience" && chosen != 3) {
			$(content).css("display", "none");
			$(content[2]).css("display", "inline-block");
			chosen = 3;
		}
	});
$('.goat-work').click(function() {
   location.href = 'http://memlisen.se/gladageten';
  });

});