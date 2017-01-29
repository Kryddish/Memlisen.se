<?php


echo "
<!DOCTYPE html>
<html>
<head>
<link rel='stylesheet' type='text/css' href='css/portfolio.css'>
	<title></title>
</head>
<body class='portfolio-body'>
<article style='height: 100vh;' class='start'>
  <div id='mySidenav' class='sidenav'>
     <ul class='navbar' id='myNavbar'>
      <li><a href='?page=index'>Startsida</a></li>
      <li><a href='?page=about'>Om mig</a></li>        
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
        Hej! Kul att du hittade hit! Mitt namn är Emmelie och jag är 19 år gammal och studerar på kyh i odenplan till front end devolper. Har du testat att trycka på enter och h?
      </p>
      <p>
        <button class='btnp-style'>Klicka på mig!</button>
      </p>
    </div>
  </div>
</article>
</div>

<article class='box-style'>
  <div class='p-info' style='padding-top: 10%;'>
    <p class='portfolio-title'>Den Glada Geten</p>
        <p class='portfolio-text'>
          Detta var ett gruppprojekt vi hade i skolan där i skulle göra en bkoningssida efter en kunds önskemål. Vi höll på me dprojektet ganska länge och detta är resultatet. Klicka på knappen nedan för att se liveversionen.
        </p>
    <a href='http://memlisen.se/gladageten/' class='portfolio-btn'>
        Gladageten.se
    </a>
  </div><img src='css/images/gladagetstart.png'>
</article>

</body>
</html>
";





















?>
