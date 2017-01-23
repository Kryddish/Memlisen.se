
// Globala variabler
var content = $('.project-info p');
var chosen = 1;

$(document).ready(function() {

	// Visar första texten
	$(content[0]).css("display", "inline-block");

	// När man klickar en länk
	$(".project-info button").click(function(event) {

		// Sparar det klickade elementet
		var clickedElement = event.target;

		// Tar bort klassen "selected" från varje länk
		$('.project-info buttton').removeClass("selected");

		// Lägger till klassen "selected" på klickat element
		$(clickedElement).addClass("selected");

		// Kolla id på klickade element
		if($(clickedElement).attr("id") == "bio" && chosen != 1) {
			$(content).css("display", "none");
			$(content[0]).css("display", "inline-block");
			chosen = 1;
		}
		if($(clickedElement).attr("id") == "skills" && chosen != 2) {
			$(content).css("display", "none");
			$(content[1]).css("display", "inline-block");
			chosen = 2;
		}
		if($(clickedElement).attr("id") == "experience" && chosen != 3) {
			$(content).css("display", "none");
			$(content[2]).css("display", "inline-block");
			chosen = 3;
		}
	});
});