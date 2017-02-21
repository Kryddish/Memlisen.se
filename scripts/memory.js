function memory() {
	document.getElementById("mem-image").style.display = "none";

var first;
	nr =0;
	const n = 10;
	var antal = 0; //antal klick 
	var klara  = 0; //antal klara
	const mainarray=["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L"];
	const halfarray=mainarray.slice(0,n);
	const array = halfarray.concat(halfarray);
	const buttons = array.map(x=> `<button class="cards">${x}</button>`);
	const sbuttons=shuffleArray(buttons);
	var main = document.querySelector("main");


	main.innerHTML = buttons.join("");
	var mybuttons = Array.from(document.querySelectorAll("button"));
	mybuttons.forEach((x=> x.addEventListener('click', function(){
	
	compare(this);

	})));

	function compare(obj){
		antal ++;
		if (nr===0) {
			first=obj;
			nr++;
		}else{						//träff 
			if(first.innerHTML==obj.innerHTML) {
				klara ++;
				hit(first, obj);
				if(klara==10) {
					alert ("spelet är slut" + antal);
				}
			}else{
				miss(first, obj);
			}
			nr=0;
		}
	}

	function hit(first, obj){
		first.classList.add("klar");
				 

		obj.classList.add("klar");
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