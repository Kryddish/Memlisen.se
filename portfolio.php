<?php

if ($_SESSION['loggedin'] == false){
echo "
<!DOCTYPE html>
<html>
<head>
  <link rel='stylesheet' type='text/css' href='css/portfolio.css'>
  <script src='scripts/memory.js'></script>
	<title></title>
</head>
<body class='portfolio-body'>
<article style='height: 100vh;' class='start'>
  <div id='mySidenav' class='sidenav'>
     <ul class='navbar' id='myNavbar'>
      <li><a href='?page=index'>Startsida</a></li>     
      <li><a href='?page=resume'>CV</a></li>
      <li><a href='?page=portfolio'>Portfolio</a></li>
    </li>
  </ul>
  </div>

  <!-- Knappen -->
  <div id='nav-container'>
      <div class='toggle-icon'>
        <span class='bar'></span>
        <span class='bar'></span>
        <span class='bar'></span>
      </div>
  </div>

  <div id='main'>
    <div class='introduction'>
      <h1 id='portfolio-loggo'>Emmelies Portfolio</h1>
      <p>
        Hej! Kul att du hittade hit! Detta är då min Portfolio sida där du ser mina projekt jag gjort och snart även pågångde projekt. Denna sida är under uppbyggnad!
      </p>
      <p>
        <button class='btnp-style'>Klicka på mig!</button>
      </p>
    </div>
  </div>
</article>
</div>

<article class='box-style'>
  <div class='p-info' style='padding-top: 10%; width: 50%;'>
    <p class='portfolio-title'>Den Glada Geten</p>
        <p class='portfolio-text'>
          Detta var ett gruppprojekt vi hade i skolan där i skulle göra en bkoningssida efter en kunds önskemål. Vi höll på me dprojektet ganska länge och detta är resultatet. Klicka på knappen nedan för att se liveversionen.
        </p>
    <a href='http://memlisen.se/gladageten/' class='portfolio-btn'>
        Gladageten.se
    </a>
  </div><img src='css/images/gladagetstart.png'>
</article>

<article class='box-style'>
<img class='left-img' src='css/images/linett.png'>
  <div class='p-info' style='padding-top: 10%;'>
    <p class='portfolio-title'>Linett Carlsson</p>
        <p class='portfolio-text'>
          En hemsida jag gjorde åt en nära vän till mis som ritaar mycket och har planer på att börja sälja sina bilder. detta är ett pågående projekt jag sysslar med på fritiden! 
        </p>
    <a href='http://memlisen.se/linett/' class='portfolio-btn'>
        Linett.se
    </a>
  </div>
</article>

<article class='box-style'>
  <div class='p-info' style='padding-top: 10%; width: 50%;'>
    <p class='portfolio-title'>Memory Game</p>
        <p class='portfolio-text'>
          Detta är ett spel som vi har skapat i es6. Klicka på 'Start' för att börja! klicka på två kort och se om du lyckas klara spelet! :) Fortfarande inte helt klart och är medveten om vissa buggar. 
        </p>
    <button class='portfolio-btn' onclick='memory()'>
        Starta
    </button>
  </div><img id='mem-image' src='css/images/memory.png'><main></main>
</article>

<article class='box-style'>
<div id='start-screen' class='screen'>
    <h1>Snake game!</h1>
    <img style='height: 40%' src='https://img.clipartfest.com/8629f3563be1059aea7e0ebbd52c577b_cartoon-snakes-clip-art-page-2-snake-png-clipart_320-320.png'>
    <button onclick='newGame();'>Starta</button>
  </div>

  <div id='game-over' class='screen'>
    <h1>Game over!</h1>
    <img style='height: 40%' src='https://img.clipartfox.com/b0893e279f1f8f4f012f9f940a2455ae_long-cute-snake-clipart-cute-snake-clipart-transparent_800-566.png'>
    <button onclick='newGame();'>Kör igen!</button>
    <p id='score'>Score: </p>
  </div>
  <canvas id='canvas' width=500 height=400></canvas>

<!--     <div id='time'>
    <h2>Tid: </h2>
    <div id='hours'></div><div id='minutes'></div><div id='seconds'></div>
  </div> -->
  <div class='p-info' style='padding-top: 10%;'>
    <p class='portfolio-title'>Snake game</p>
    <div class='portfolio-text' id='time'>
        <h2>Tid: </h2>
        <div id='hours'></div><div id='minutes'></div><div id='seconds'></div>
      </div>
    <a href='http://memlisen.se/linett/' class='portfolio-btn'>
      Maow
    </a>
  </div>
</article>



<script src='scripts/snake.js'></script>
</body>
</html>
";

}


if ($_SESSION['loggedin'] == true){
  echo "
  <h1>Under counstraction</h1>





  ";

}
















?>
