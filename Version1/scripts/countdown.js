//Count down to Internship
var internship = 'January 15 2018 08:00:00 GMT+0100';
initializeClock('clockLIA', internship);

//Count down to Graduation
var graduation = 'May 31 2018 12:00:00 GMT+0100';
initializeClock('clockGraduation', graduation);

function initializeClock(clockID, endtime){
  var clock = document.getElementById(clockID);
  var daysSpan = clock.querySelector('.days');
  var hoursSpan = clock.querySelector('.hours');
  //var minutesSpan = clock.querySelector('.minutes');
  //var secondsSpan = clock.querySelector('.seconds');

 function updateClock(){
    var time = getTimeRemaining(endtime);
    daysSpan.innerHTML = time.days;
    hoursSpan.innerHTML = ('0' + time.hours).slice(-2);
      //minutesSpan.innerHTML = ('0' + time.minutes).slice(-2);
      //secondsSpan.innerHTML = ('0' + time.seconds).slice(-2);

    if (time.total<=0) {
      clearInterval(timeinterval);
    }
  }

  updateClock(); // run function once at first to avoid delay
  var timeinterval = setInterval(updateClock, 1000);
}

function getTimeRemaining(endtime){
  var time = Date.parse(endtime) - Date.parse(new Date());
    //var seconds = Math.floor(( time / 1000) % 60);
    //var minutes = Math.floor((time / 1000 / 60) % 60);
    var hours = Math.floor((time / (1000 * 60 * 60)) % 24);
    var days = Math.floor(time / (1000 * 60 * 60 * 24));

    return {
      'total':time,
      'days':days,
      'hours':hours,
      //'minutes':minutes,
      //'seconds':seconds
  };
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName('close')[0];
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    expandWindow.style.display = 'none';
}

// When the user clicks anywhere outside of the expandWindow, close it
window.onclick = function(event) {
    if (event.target == expandWindow && expanded == true) {
        expandWindow.style.display = 'none';
        expanded = false;
    }
}
