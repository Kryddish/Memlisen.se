function memory() {
	document.getElementById("mem-image").style.display = "none";

	var wait = false;
	var image;
	var images = ["292.jpg", "533.jpg", "567.jpg", "1274.jpg", "1277.jpg", "bebisbamse.png",
"cat.jpg", "hest.jpg", "lillata.jpg", "lillataa.jpg"];
	var fullImages = images.concat(images);
	var first;
	nr =0;
	const n = 10;
	var antal = 0; //antal klick 
	var klara  = 0; //antal klara
	const buttons = fullImages.map(x=> `<button class="cards"></button>`);
	const sbuttons= shuffleArray(buttons);
	var main = document.querySelector("main");


	main.innerHTML = buttons.join("");

	var mybuttons = Array.from(document.querySelectorAll(".cards"));

	for (var i = 0; i < mybuttons.length; i++) {
		image = "./css/images/cards/" + fullImages[i];
		mybuttons[i].style.backgroundImage = "url(" + image + ")";
	}

	mybuttons.forEach((x=> x.addEventListener('click', function() {
		compare(this);
	})));

	function compare(obj){
		antal ++;
		if (wait == false) {
			if (nr===0) {

			// Första kortet du klickar på
			first=obj;
			first.style.backgroundSize = "100% 100%";
			nr++;
		} else {

			obj.style.backgroundSize = "100% 100%";
			wait = true;

			setTimeout(function() {
				first.style.backgroundSize = "0 0";
				obj.style.backgroundSize = "0 0";
				wait = false;
			}, 1000);

			// Andra kortet du klickar på
			if(first.style.backgroundImage == obj.style.backgroundImage) { // Träff
				klara ++;
				hit(first, obj);
				if(klara==10) {
					alert ("spelet är slut" + antal);
				}
			}else{
				// Efter du har klickat på två kort som e fel
				miss(first, obj);
			}
			nr=0;
		}
		}
	}

	function hit(first, obj){
		first.classList.add("klar");
		obj.classList.add("klar");

		first.style.backgroundSize = "100% 100%";
		obj.style.backgroundSize = "100% 100%";

		first.disabled=true; //tar ur spelomgången
		obj.disabled=true;
	}

	function miss(first, obj){
		first.style.color = '#800040';
		obj.style.color = '#800040';


		var v= setTimeout(function(){
		first.style.color = '#ff80bf';
		obj.style.color = '#ff80bf';
		},1000)

	}

	function shuffleArray(array){
		var b = array.sort((a,b)=>0.5-Math.random());
		return b;
	}

}