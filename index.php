<?php 
// $database = mysqli_connect('memlisendb-219317.mysql.binero.se', '219317_ul80784', 'mjaumaow123', '219317-memlisendb' );
error_reporting(0);
session_start();
// mysqli_query($link, 'SET NAMES utf8');

if ($_SESSION['loggedin'] == true) {
echo "
<link rel='stylesheet' href='css/admin.css'>
<div class='fixed'>
  <h2>Välkommen admin!</h2>
  <form method='post'>
    <input type='submit' name='logout' value='Logout'>
  </form></div>
  ";
}
if (isset($_POST['logout'])) {
$_SESSION['loggedin'] = false;
}

echo "
<!DOCTYPE html>
<html>
<head>
  <title>Memlisen.se | Emmelie Sundell | Portfolio | Student KYH</title>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' href='css/style.css'>
  <link rel='stylesheet' type='text/css' href='css/menu.css'>
  <!--   <link rel='stylesheet' type='text/css' href='css/hangman.css'> -->
  <script src='scripts/jquery.min.js'></script>
  <script src='scripts/menu.js'></script>
  <!--   <script src='scripts/hangman.js'></script> -->
</head>
<body>

  <!--facebook share plugin, hämtad kod-->
  <div id='fb-root'></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = '//connect.facebook.net/sv_SE/sdk.js#xfbml=1&version=v2.8';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
  ";

  $page = $_GET['page'];

  switch ($page) {

  case 'index':
  include("index.php");
  break;

  case 'about':
  include("aboutme.php");
  break;

  case 'resume':
  include("mittcv.php");
  break;

  case 'portfolio':
  include("portfolio.php");
  break;

  case 'admin':
  include("portfolio.php");
  break;
  
  default:

  echo "

  <article class='start'>
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

<div class='block'>
  <div id='main'>
    <div class='introduction'>
      <h1 id='portfolio-loggo'>Emmelies Sundell</h1>
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


<div class='project-info'>
  <h1>About me</h1>
  <ul class='about-menu'>
    <li><button class='selected' id='bio' href='#'>Bio</button></li>
    <li><button id='skills' href='#'>Skills</button></li>
    <li><button id='experience' href='#'>Experience</button></li>
  </ul>

    <div class='content about'>
      <p>
        Hej! Kul att du hittade hit! Mitt namn är Emmelie och jag är 19 år gammal och studerar på kyh i odenplan till front end devolper. Denna sida ingår alltså som en del i utbildningen som kallas för 'induviduella projektet'. </p> 

        <p>
        Vi ska alltså skapa en sida och under dessa år utvecckla denna med hjälp av kunskaperna vi får och sedan blir detta vårat examenarbete som vi i framtiden kommer visa upp för att söka jobb. detta betyder alltså att denna sida är ett projektet som hela tiden byggs på nya saker vilket gör att allt kanske inte fungerar som det ska.</p>

        <p>
        upptäcker du något eller vill ge feedback så tveka inte att höra av dig! men tänk också på att visa buggar kanske ska finnas där och att sidorna är långt ifrån klara. Ta därför denna sida med lite ro. Jag hoppas ändå att du gillar min sida och jag är glad att du titta förbi!

      </p>

        <button class='btna-style'>Gå till sidan mer om mig</button><button class='btn-style'>Kontaka mig!</button> 
    </div>

    <div class='content skills'>
      <div id='skillbars'>

        <div class='skill_name' id='skill_php'>PHP</div>
        <div class='skillbar_wrapper'>
          <div class='skillbar_bar' id='skillbar_php'></div>
          <div class='skill_bar_percent'>85%</div>
        </div>

        <div class='skill_name' id='skill_asp'>Sleep</div>
        <div class='skillbar_wrapper'>
          <div class='skillbar_bar' id='skillbar_asp'></div>
          <div class='skill_bar_percent'>100%</div>
        </div>

        <div class='skill_name' id='skill_jsp'>JSP</div>
        <div class='skillbar_wrapper'>
          <div class='skillbar_bar' id='skillbar_jsp'></div>
          <div class='skill_bar_percent'>75%</div>
        </div>

     </div>
    </div>

  <div class='content'>

   <p>
    Experience upptäcker du något eller vill ge feedback så tveka inte att höra av dig! men tänk också på att visa buggar kanske ska finnas där och att sidorna är långt ifrån klara. Ta därför denna sida med lite ro. Jag hoppas ändå att du gillar min sida och jag är glad att du titta förbi!. 


    Vi ska alltså skapa en sida och under dessa år utvecckla denna med hjälp av kunskaperna vi får och sedan blir detta vårat examenarbete som vi i framtiden kommer visa upp för att söka jobb. detta betyder alltså att denna sida är ett projektet som hela tiden byggs på nya saker vilket gör att allt kanske inte fungerar som det ska.

    upptäcker du något eller vill ge feedback så tveka inte att höra av dig! men tänk också på att visa buggar kanske ska finnas där och att sidorna är långt ifrån klara. Ta därför denna sida med lite ro. Jag hoppas ändå att du gillar min sida och jag är glad att du titta förbi!
  </p>
</div>
<h2 class='bild'>Bild</h2>
</div>





<!-- 
<div class='hangman'>
  <div class='wrapper'>
    <h1>Hänga gubbe</h1>
    <h4>Använd alfabetet nedan för att kunna gissa. Fastnar du så klicka på ledtråd för att få hjälp.</h4>
    <p id='catagoryName'></p>
  </div>
  <div class='wrapper'>
    <div id='buttons'></div>  
  </div>
  <div id='hold'></div>
  <p id='mylives'></p>
  <p id='clue'>Ledtråden -</p>  
  <canvas id='stickman'>This Text will show if the Browser does NOT support HTML5 Canvas tag</canvas>
  <div class='container'>
    <button id='hint'>Ledtråd</button>
    <button id='reset'>Spela igen!</button>
  </div>
</div> -->



<!-- /* ========================================
Mobile screen
======================================== */ -->


<script type='text/javascript' src='//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5818b18185638455'></script> 
<script src='scripts/index.js'></script>
</body>
</html>
";
break;
}
?>
