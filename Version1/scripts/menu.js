$(document).ready(function() { 

    // Globala variabler
    var isOpen = false;

    // Onclick
	$('.toggle-icon').click(function() {

        // Kalla funktionen responsive()
        responsive();
  	});

    function responsive() {
        // Om inte öppnad
        if(!isOpen) {

            // Öppnar menyn och gör body mörkare
            $("#mySidenav").css("width", "250px");
            $("#main").css("margin-left", "250px");
            $("body").css("background-color", "rgba(0,0,0,0.4)");
            $("#nav-container").css("transition", "0.8s");
            $("#nav-container").css("left", "150px");
            isOpen = true;
        } else {

            // Stänger menyn
            $("#mySidenav").css("width", "0");
            $("#main").css("margin-left", "0");
            $("body").css("background-color", "white");
            $("#nav-container").css("left", "0");

            isOpen = false;
        }

        // lägger till/tar bort klass från knappen
        $('#nav-container').toggleClass('pushed');
        
        // lägger till/tar bort klass från menyn
        $('.navbar').toggleClass('responsive');
    }
});