var isOpen = false;

$( document ).ready(function() {
	$('#nav-icon3').click(function(){
		$(this).toggleClass('open');
		if (!isOpen) {
			// Öppnar menyn och gör body mörkare
			$("#mySidenav").css("width", "250px");
		   	$("#main").css("margin-left", "250px");
		    $("body").css("background-color", "rgba(0,0,0,0.4)"); 
		    isOpen = true;  
		} else {

			// Stänger menyn
			$("#mySidenav").css("width", "0");
			$("#main").css("margin-left", "0");
			$("body").css("background-color", "#e5e5e5");
			isOpen = false;
		}
	});



});
