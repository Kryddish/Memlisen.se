$(document).ready(function () {

  var keys = {};
  var found = false;

$(document).keydown(function (e) {
  keys[e.which] = true;

  if (found == false && keys[13] == true && keys[72] == true) {
    
    alert("Grattis! Du har hittat mitt easter egg");

    $(".hangman").css("display", "block");

    $("html, body").animate({
      scrollTop: $(".hangman").offset().top
    }, 1500);

    found = true;
  }

});

$(document).keyup(function (e) {
  delete keys[e.which];
});


  var alphabet = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h',
        'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's',
        't', 'u', 'v', 'w', 'x', 'y', 'z','å', 'ä', 'ö'];
  
  var categories;         // Array of topics
  var chosenCategory;     // Selected catagory
  var getHint ;          // Word getHint
  var word ;              // Selected word
  var guess ;             // Geuss
  var geusses = [ ];      // Stored geusses
  var lives ;             // Lives
  var counter ;           // Count correct geusses
  var space;              // Number of spaces in word '-'

  // Get elements
  var showLives = document.getElementById("mylives");
  var showCatagory = document.getElementById("scatagory");
  var getHint = document.getElementById("hint");
  var showClue = document.getElementById("clue");



  // create alphabet ul
  function buttons() {
    myButtons = document.getElementById('buttons');
    letters = document.createElement('ul');

    for (var i = 0; i < alphabet.length; i++) {
      letters.id = 'alphabet';
      list = document.createElement('li');
      list.id = 'letter';
      list.innerHTML = alphabet[i];
      check();
      myButtons.appendChild(letters);
      letters.appendChild(list);
    }
  }
    
  
  // Select Catagory
  function selectCat() {
    if (chosenCategory === categories[0]) {
      catagoryName.innerHTML = "Kategorin är djurater!";
    } else if (chosenCategory === categories[1]) {
      catagoryName.innerHTML = "Kategorin är engelska tv-serier";
    } else if (chosenCategory === categories[2]) {
      catagoryName.innerHTML = "Kategorin är städer";
    }
  }

  // Create geusses ul
   function result() {
    wordHolder = document.getElementById('hold');
    correct = document.createElement('ul');

    for (var i = 0; i < word.length; i++) {
      correct.setAttribute('id', 'my-word');
      guess = document.createElement('li');
      guess.setAttribute('class', 'guess');
      if (word[i] === "-") {
        guess.innerHTML = "-";
        space = 1;
      } else {
        guess.innerHTML = "_";
      }

      geusses.push(guess);
      wordHolder.appendChild(correct);
      correct.appendChild(guess);
    }
  }
  
  // Show lives
   function comments() {
    showLives.innerHTML = "Du har " + lives + " liv";
    if (lives < 1) {
      showLives.innerHTML = "Spelet är slut";
    }
    for (var i = 0; i < geusses.length; i++) {
      if (counter + space === geusses.length) {
        showLives.innerHTML = "Grattis, du klarade det!";
      }
    }
  }

      // Animate man
  function animate() {
    var drawMe = lives ;
    drawArray[drawMe]();
  }

  
   // Hangman
  function canvas() {

    myStickman = document.getElementById("stickman");
    context = myStickman.getContext('2d');
    context.beginPath();
    context.strokeStyle = "#fff";
    context.lineWidth = 2;
  };
  
    function head() {
      myStickman = document.getElementById("stickman");
      context = myStickman.getContext('2d');
      context.beginPath();
      context.arc(60, 25, 10, 0, Math.PI*2, true);
      context.stroke();
    }
    
  function draw($pathFromx, $pathFromy, $pathTox, $pathToy) {
    
    context.moveTo($pathFromx, $pathFromy);
    context.lineTo($pathTox, $pathToy);
    context.stroke(); 
}

function frame1() {
  draw (0, 150, 150, 150);
}
 
function frame2() {
  draw (10, 0, 10, 600);
}

function frame3() {
  draw (0, 5, 70, 5);
}

function frame4() {
  draw (60, 5, 60, 15);
}

function torso() {
  draw (60, 36, 60, 70);
}

function rightArm() {
  draw (60, 46, 100, 50);
}

function leftArm() {
  draw (60, 46, 20, 50);
}

function rightLeg() {
  draw (60, 70, 100, 100);
}

function leftLeg() {
  draw (60, 70, 20, 100);
}
  
  drawArray = [rightLeg, leftLeg, rightArm, leftArm,  torso,  head, frame4, frame3, frame2, frame1]; 


  // OnClick Function
  function check() {
    $(list).click(function() {
      var geuss = (this.innerHTML);
      this.setAttribute("class", "active");
      this.onclick = null;
      for (var i = 0; i < word.length; i++) {
        if (word[i] === geuss) {
          geusses[i].innerHTML = geuss;
          counter += 1;
        } 
      }
      var j = (word.indexOf(geuss));
      if (j === -1) {
        lives -= 1;
        comments();
        animate();
      } else {
        comments();
      }
    });
  };

    
  // Play
  function play() {
    categories = [
        ["flodhäst", "zebra", "mygga", "fjäril", "ekorre", "leopardgecko", "sköldpadda"],
        ["dr who", "breaking bad", "the walking dead", "game of thrones", "one tree hill", "luke cage", "war and peace", "daredevil", "stranger things", "halt and catch fire" ],
        ["manchester", "london", "madrid", "amsterdam", "stockholm", "paris", "osaka", "alingsås", "chicago", "kairo", "bombay", "dehli", "peking", "sydney", "melbourne", "söderköping"] 
    ];

    chosenCategory = categories[Math.floor(Math.random() * categories.length)];
    word = chosenCategory[Math.floor(Math.random() * chosenCategory.length)];
    word = word.replace(/\s/g, "-");
    buttons();

    geusses = [ ];
    lives = 10;
    counter = 0;
    space = 0;
    result();
    comments();
    selectCat();
    canvas();
  }

  play();
  
  // Hint

    $("#hint").click(function() {

      var hints = [
        ["Gillar vatten", "Liten och surrar", "Kan flyga, färgglad", "Klättrar i träd", "Liten ödla", "Långsam med ett skal", "Ett kattdjur", "Stor och farlig med 4 ramar",
         "Gillar lera", "röd, lever bland träden", "lever i vatten", "knubbig, lever i djupare vatten", "gillar att slå upp sin stjärt", "har stora horn" ],

        ["En mystisk doktor", "Skapar froger", "Världen har gått under..", "winter is comming..", "High school och basket", "Skygg men skottsäker marvel hjälte", 
        "Baserad på en novell  under franska invasionen", "Blind brottskämpe", "Pojkes försvinnande i India", "80-talet, mordern teknik"],

        ["Nordlig stad i UK", "Har en drottning", "Ligger i Spanien", "Stad i Nederländerna", "Czech Republic capital", "Stor stad i Sverige", "Stort torn, fin kultur"]
    ];

    var catagoryIndex = categories.indexOf(chosenCategory);
    var hintIndex = chosenCategory.indexOf(word);
    showClue.innerHTML = "Ledtråd: - " +  hints [catagoryIndex][hintIndex];
  });

   // Reset

  $("#reset").click(function() {
    correct.parentNode.removeChild(correct);
    letters.parentNode.removeChild(letters);
    showClue.innerHTML = "";
    context.clearRect(0, 0, 400, 400);
    play();
  });
});