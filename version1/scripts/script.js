$(document).ready(function() { 

	$('.toggle-icon').click(function() {

		// lägger till/tar bort klass från knappen
    	$('#nav-container').toggleClass('pushed');

    	// lägger till/tar bort klass från menyn
    	$('.navbar').toggleClass('responsive');
  	});
});