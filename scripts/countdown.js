 (function countdownOne(){
   var today = new Date();
   var end = new Date(2018, 0, 15);

   var current = today.getTime();
   var event = end.getTime();
   var remaining = event - current;

   var s = Math.floor(remaining / 1000);
   var m = Math.floor(s / 60);
   var h = Math.floor(m / 60);
   var d = Math.floor(h / 24);

   h %= 24;
   m %= 60;
   s %= 60;

   if(h < 10){
     h = "0" + h;
   }
   if(m < 10){
     m = "0" + m;
   }
   if(s < 10){
     s = "0" + s;
   }

   $('#days').html(d);
   $('#hours').html(h);
   $('#minutes').html(m);
   $('#seconds').html(s);

   var start = setTimeout(countdownOne, 1000);

   if (remaining <= 0) {
     clearTimeout(start);
     $('#days').html("D");
     $('#hours').html("O");
     $('#minutes').html("N");
     $('#seconds').html("E");
   }



 })();

 (function countdownTwo(){
   var today = new Date();
   var end = new Date(2018, 4, 31);

   var current = today.getTime();
   var event = end.getTime();
   var remaining = event - current;

   var s = Math.floor(remaining / 1000);
   var m = Math.floor(s / 60);
   var h = Math.floor(m / 60);
   var d = Math.floor(h / 24);

   h %= 24;
   m %= 60;
   s %= 60;

   if(h < 10){
     h = "0" + h;
   }
   if(m < 10){
     m = "0" + m;
   }
   if(s < 10){
     s = "0" + s;
   }

   $('#daysTwo').html(d);
   $('#hoursTwo').html(h);
   $('#minutesTwo').html(m);
   $('#secondsTwo').html(s);

   setTimeout(countdownTwo, 1000);

   if (remaining <= 0) {
     clearTimeout(start);
     $('#daysTwo').html("D");
     $('#hoursTwo').html("O");
     $('#minutesTwo').html("N");
     $('#secondsTwo').html("E");
   }

 })();