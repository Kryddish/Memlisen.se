<?php 
$database = mysqli_connect('memlisendb-219317.mysql.binero.se', '219317_ul80784', 'mjaumaow123', '219317-memlisendb' );
error_reporting(0);
session_start();
// mysqli_query($link, 'SET NAMES utf8');
 
if ($_SESSION['loggedin'] == true) {
  echo "
  <link rel='stylesheet' href='css/admin-page.css'>
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
  <title>Memlisen.se | Emmelie Sundell | Hem | Student KYH</title>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' href='css/index.css'>
  <link rel='stylesheet' type='text/css' href='css/mobilemenu.css'>
  <link rel='stylesheet' type='text/css' href='css/hangman.css'>
  <script src='scripts/jquery.min.js'></script>
  <script src='scripts/new-pic.js'></script>
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


  <div class='menu-position'>
    <ul class='navbar' id='myNavbar'>
      <li><a href='/'>Startsida</a></li>
      <li><a href='?page=about'>Om mig</a></li>        
      <li><a href='?page=resume'>CV</a></li>
      <li><a href='?page=portfolio'>Portfolio</a></li>
    </li>
  </ul>
</div>

<div id='nav-container'>
  <div class='toggle-icon'>
    <span class='bar'></span>
    <span class='bar'></span>
    <span class='bar'></span>
  </div><!-- /toggle-icon -->
</div><!-- /nav-container -->
";

$page = $_GET['page'];

switch ($page) {
  case 'about':
    ob_end_clean();
    include("aboutme.php");
    break;

    case 'resume':
    ob_end_clean();
    include("mittcv.php");
    break;

    case 'portfolio':
    include("portfolio.php");
    break;
  
  default:
  echo "

<!-- First Parallax Image with Logo Text -->
<div class='bgimg-1 pitcure-position'>
  <div class='picture-header' style='white-space:nowrap;'>
    <h2>Välkommen till memlisen.se!</h2>
    <a class='scrollbutton' href='scroll'><img id='arrow-down' src='css/images/arrow-down.png'></a>
    </div>
</div>


                <!-- /* ========================================
                   Mobile screen
                   ======================================== */ -->

<div class='only-on-mobile' id='m-scroll'>
  <h1 class='mobile-head'>Hello There!<h1>
    <p>Welcome to my invidual project at KYH Stockholm! This site is under construcation, please check out my cool menu button :)</p>
      <a class='scrollbutton' href='#aboutme-mobile'><img id='arrow-down-m' src='css/images/arrow-down.png'></a>
</div>

<div id='aboutme-mobile'>
  <div class='header-m'>
      <h1>Who am I?</h1>
  </div>
 

  <p id='last'><</p>
   <img id='myimage' src='css/images/jaag.png'>
  <p id='next'>></p>
  <h5><em>Emmelie Sundell</em></h5>
  
 
  
  <p>
  My name is Emmelie and right now im studiyng on KYH to become a front end devoloper. I have graduate as an animal caretaaker year 2016. 
  I'm 19 years old living with my mom in a town called Järfälla in sweden.
  bla bla bla bla bla bla bla lite text sen kommer mera text och då blir det en massa text och nu blev det svengelska.
  </p>
  <a id='more-m' href='notfound.php'>click here to learn more about me!--></a>

</div>

<div id='portfolio-m'>
  <div class='header-m'>
      <h1>My work</h1>
      <p>bla bla bla bla bla bla bla lite text sen kommer mera text och då blir det en massa text och nu blev det svengelska.bla bla bla bla bla bla bla lite text sen kommer mera text och då blir det en massa text och nu blev det svengelska.bla bla bla bla bla bla bla lite text sen kommer mera text och då blir det en massa text och nu blev det svengelska.</p>


  </div>
</div>


  



<!-- Container (About Section) -->
<div id='body'>
<div class='content padding'>
  <h3 class='heading' id='scroll'>Om mig</h3>
  <p class='heading'><em>I love Animals</em></p>
  <p>
    Hej! Kul att du hittade hit! Mitt namn är Emmelie och jag är 19 år gammal och studerar på kyh i odenplan till front end devolper. 
  </p>
  <div class='w3-row'>
    <div class='w3-col m6 heading margin'>
      <p><b>Emmelie</b></p><br>
      <img src='css/images/jaag.png' class='img-me' alt='Photo of Me'>
    </div>
    <a href='mittcv.html' target='_blank'>Klicka här för att lästa mitt cv!</a>

    <!-- Hide this text on small devices -->
    <div class='w3-col m6 w3-hide-small margin'>
      <p>Hej! Kul att du hittade hit! Mitt namn är Emmelie och jag är 18 år gammal och studerar på kyh i odenplan till front end devolper. Denna sida ingår alltså som en del i utbildningen som kallas för 'induviduella projektet'. Vi ska alltså skapa en sida och under dessa år utvecckla denna med hjälp av kunskaperna vi får och sedan blir detta vårat examenarbete som vi i framtiden kommer visa upp för att söka jobb. detta betyder alltså att denna sida är ett projektet som hela tiden byggs på nya saker vilket gör att allt kanske inte fungerar som det ska. upptäcker du något eller vill ge feedback så tveka inte att höra av dig! men tänk också på att visa buggar kanske ska finnas där och att sidorna är långt ifrån klara. Ta därför denna sida med lite ro. Jag hoppas ändå att du gillar min sida och jag är glad att du titta förbi! </p>
      <a href='aboutme.html'>klicka här för att gå till sidan 'mer om mig'</a>
    </div>
  </div>
</div>


<!-- Second Parallax Image with Portfolio Text -->
<div class='bgimg-2 pitcure-position'>
  <div class='picture-header'>
    <span class='rubrik'>Portfolio</span>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div class='content  padding'>
  <h3 class='heading'>Mina arbeten</h3>
  <p class='heading'><em>Här är några protyper på mina senaste arbeten<br> klicka på bilden för att göra dem större!</em></p><br>

  <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
  <div class='w3-row-padding'>
    <div class='w3-col m3'>
      <img src='css/images/fagelnastet.jpg' style='width:100%' onclick='onClick(this)'>
    </div>

    <div class='w3-col m3'>
      <img src='css/images/gamlawside.jpg' style='width:100%' onclick='onClick(this)'>
    </div>

    <div class='w3-col m3'>
      <img src='https://www.daysoftheyear.com/wp-content/images/bird-day-1-e1450957454568-808x380.jpg' style='width:100%' onclick='onClick(this)'>
    </div>

    <div class='w3-col m3'>
      <img src='https://www.daysoftheyear.com/wp-content/images/bird-day-1-e1450957454568-808x380.jpg' style='width:100%' onclick='onClick(this)'>
    </div>
  </div>

  <div class='w3-row-padding heading margin'>
    <div class='w3-col m3'>
      <img src='https://www.daysoftheyear.com/wp-content/images/bird-day-1-e1450957454568-808x380.jpg' style='width:100%' onclick='onClick(this)'>
    </div>

    <div class='w3-col m3'>
      <img src='https://www.daysoftheyear.com/wp-content/images/bird-day-1-e1450957454568-808x380.jpg' style='width:100%' onclick='onClick(this)'>
    </div>

    <div class='w3-col m3'>
      <img src='https://www.daysoftheyear.com/wp-content/images/bird-day-1-e1450957454568-808x380.jpg' style='width:100%' onclick='onClick(this)'>
    </div>

    <div class='w3-col m3'>
      <img src='https://www.daysoftheyear.com/wp-content/images/bird-day-1-e1450957454568-808x380.jpg' style='width:100%' onclick='onClick(this)'>
      <a id='projekt' href='notfound.html'>klicka här för att se mer information! --></a>
    </div>
  </div>
</div>


<!-- Modal for full size images on click-->
<div id='fullsize-image' class='img-fullsize' onclick='this.style.display='none''>
  <span class='close-btn btn-style'>×</span>
  <div class='heading padding'>
    <img id='img01' style='max-width:100%'>
  </div>
</div>

<!-- Third Parallax Image with Portfolio Text -->
<div class='bgimg-3 pitcure-position'>
  <div class='picture-header'>
   <span class='rubrik'>Kontakt</span>
 </div>
</div>

</div> <!--body-->

<!-- Container (Contact Section) -->
<div class='content  padding'>
 <h3 class='heading'>Kontakta mig!!</h3>
 <p class='heading'><em>Ge mig gärna lite feedback!</em></p>      

 <div class='w3-row margin'>
  <div class='w3-col m4'>
  </div>


  <div class='contact-div'>
      Järfälla, Sweden<br>
      Mobil: 0708769638<br>
      Email: emmelie.sundell@hotmail.com<br>
    <p>Swing by for a cup of coffee, or leave me a note:</p>
    <form method='post'>
      <input name='name' class='input-style input-border ' type='text' placeholder='Namn'>
      <input name='email' class='input-style input-border' type='email' placeholder='Email'>
      <input name='phone' class='input-style input-border ' type='text' placeholder='Telefonnummer'>
      <input name='text' class='input-style input-border' type='text' placeholder='skriv din text här...'>
      <input type='submit' class='send-btn margin w3-right'>

      <div class='fb-like' data-href='https://memlisen.se' data-width='200' data-layout='standard' data-action='like' data-show-faces='true' data-share='true'></div>

      <script src='//platform.linkedin.com/in.js' type='text/javascript'></script>
      <script type='IN/MemberProfile' data-id='https://www.linkedin.com/in/emmelie-sundell-41bba2128' data-format='hover' data-text='Emmelie Sundell'></script>
        
    </form>
  </div>


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
</div>

";

if($_POST) {
  $to = "emmelie.sundell@hotmail.com";
  $subject = "From www.memlisen.se";

  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['text'];

  $query = "
     
      INSERT INTO messages
      (
        meddelande,
        avsändare, 
        telefonnummer,
        epost
      )

      VALUES 
      (
        '$message',
        '$name',
        '$phone',
        '$email'
      )

    ";

    mysqli_query($database, $query);

  $message = <<<EMAIL
 
 Sent from; $name , $email
  Meddelande;
  $message
EMAIL;
  mail($to, $subject, $message);
  $feedback = 'Your message has been sent!';
  echo $feedback;
  $headers .= 'Content-type: text/html; charset=UTF-8';

}




echo "
<script type='text/javascript'> 
// Modal Image Gallery
  function onClick(element) {
    document.getElementById('img01').src = element.src;
    document.getElementById('fullsize-image').style.display = 'block';
  }

</script>

<script type='text/javascript' src='//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5818b18185638455'></script> 
<script src='scripts/jquery_scroll_down.js'></script>
<script src='hangman/hangman.js'></script>
<script src='scripts/script.js'></script>
</body>
</html>
";
    break;
}


?>