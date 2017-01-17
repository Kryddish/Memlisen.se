var images = [
	"css/images/meobella.JPG",
	"css/images/meohest.JPG",
	"css/images/ronjaobamse.JPG",
	"css/images/lillata.JPG",
	"css/images/miniofalcon.JPG"

	];

$(document).ready(function() {

	// console.log(images.length - 1);

	var index = 0;

	$("#next").click(function() {
		nextImage();
	});
	$("#last").click(function() {
		lastImage();
	});

	function nextImage() {
		index = (index+1) % (images.length);
		$("#myimage").prop('src', images[index]);
	}

	function lastImage() {
		index = (index + images.length -1) % (images.length);
		$("#myimage").prop('src', images[index]);
	}
});