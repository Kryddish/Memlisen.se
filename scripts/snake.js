function newGame(){
			document.getElementById("canvas").style.display = "inline-block";
			document.getElementById("start-screen").style.display = "none";
			document.getElementById("game-over").style.display = "none";
			document.getElementById("time").style.display = "inline-block";

			var seconds = 0;
			var minutes = 0;
			var hours = 0;

			var timer = setInterval(show, 1000); //skapa en timer
			var isRunning = true;
			function show(){
			
				seconds++;
				document.getElementById("seconds").innerHTML = ":" + seconds;
				document.getElementById("minutes").innerHTML = ":" + minutes;
				document.getElementById("hours").innerHTML = hours;
				if(seconds >= 60) {
					minutes++;
					seconds = 0;
				}
			}

			function Start(time){
				timer = setInterval(show, time);
				isRunning = true;

			}

		var points = 0;
		xoffset=10;
		yoffset= 0;
		const canvas=document.getElementById("canvas");
		const ctx =canvas.getContext("2d");
		ctx.fillStyle='#d34ed9';
		const _w=canvas.width;
		const _h=canvas.height;
		ctx.fillRect(0,0, _w, _h);

		xfood();

		var array=[
		{left:50,top:0},
		{left:40,top:0},
		{left:30,top:0},
		{left:20,top:0},
		{left:10,top:0},
		];

		var speed=150
		const mytimer = setInterval(paint, speed);
		function paint(){
	draw(); //skriver ut ormen
	update(); //uppdatera ormen
}

function draw(){
	var tail=array[array.length-1]; //sista segmentet som skall målas blått
	w=10; //segmentbredd
	h=10; //segmenthöjd
	for (var i = 0; i < array.length; i++) {
		var a=array[i];
		ctx.fillStyle ="#43c9e7";
		ctx.fillRect(a.left, a.top, w, h);
	}

	collision(); //kolla om
	ctx.fillStyle = "#d34ed9"
	ctx.fillRect(tail.left, tail.top, w, h);

	if (a.left > 490 || a.top >390 || a.left < 0 ||a.top<0) {
		clearInterval(mytimer);
		clearInterval(timer);
		document.getElementById("canvas").style.display = "none";
		document.getElementById("game-over").style.display = "inline-block";
	} else {
		for (var i = 1; i < array.length-1; i++) {
			if (array[0].left == array[i].left && array[0].top == array[i].top) {
				clearInterval(timer);
				clearInterval(mytimer);
				document.getElementById("canvas").style.display = "none";
				document.getElementById("game-over").style.display = "inline-block";
			}
		}
	}
}

function update() { //uppdatera arrayen
	var head = array[0];
	head= { left: head.left + xoffset, top: head.top + yoffset};
	array.unshift(head); //lägg till först
	array.pop(); //ta bort sista

}

//läs av piltagenterna och navigera ormen
document.onkeydown = checkKey;
function checkKey(e) {
	var key=e.which;

	if (key=="83" || key=="40") { //down
		if (yoffset>=0) {
			yoffset = 10; xoffset = 0;
		}
	}

	if (key=="87" || key=="38") { //up
		if (yoffset <=0) {
			yoffset = -10; xoffset = 0;
		}
	}

	if (key=="65" || key=="37") { //left
		if (xoffset <=0) {
			yoffset = 0; xoffset = -10;
		}
	}

	if (key=="68" || key=="39") { //right
		if (xoffset >=0 ) {
			yoffset =0; xoffset=10;
		}
	}
}

function collision(){
	if (food.x==array[0].left && food.y==array[0].top) {
		console.log("Nomnom");
		eat();
		xfood();
		points+= 1; 
		document.getElementById("score").innerHTML = "Score: " + points;
	}
}

function xfood(){
	food={x:Math.floor(Math.random() * (490 - 0)/10) * 10, y:Math.floor
		(Math.random() * (490 - 0)/10)*10};
		ctx.fillStyle = "red";
		ctx.fillRect(food.x, food.y, 10, 10);
	}

	function eat(){
		var newTail= {
			left: array[array.length - 1].left - 10,
			top: array[array.length-1].top - 10,
		}

		array.push(newTail);
	//ormen växer o  går snabbare
}

}