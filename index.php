<?php 
//$database = mysqli_connect('memlisendb-219317.mysql.binero.se', '219317_ul80784', 'mjaumaow123', '219317-memlisendb' );
error_reporting(0);
session_start();
// mysqli_query($link, 'SET NAMES utf8');

if ($_SESSION['loggedin'] == true) {
echo "
<div><form method='post'>
<a href='?page=admin'>admin-start</a>
<a href='?page=default'>Startsida</a>       
      <a href='?page=resume'>CV</a>
      <a href='?page=portfolio'>Portfolio</a>
    <input type='submit' name='logout' value='Logout'>
  </form></div>
  ";
}
if ($_POST['logout']) {
  if(session_destroy()){
    header("Location: /");
  }
}

if ($_SESSION['loggedin'] == false) {
  echo "
  <!DOCTYPE html>
  <html>
  <head>
    <title>Memlisen.se | Emmelie Sundell | Portfolio | Student KYH</title>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' href='css/style.css'>
    <link rel='stylesheet' type='text/css' href='css/menu.css'>
      <link rel='stylesheet' type='text/css' href='css/hangman.css'>
    <script src='scripts/jquery.min.js'></script>
    <script src='scripts/menu.js'></script>
    <script src='scripts/hangman.js'></script>
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
}

  $page = $_GET['page'];

  switch ($page) {


  case 'resume':
  include("mittcv.php");
  break;

  case 'portfolio':
  include("portfolio.php");
  break;

  case 'admin':
  include("admin.php");
  break;
  
  default:

  if ($_SESSION['loggedin'] == false) {
    echo "
    <article class='start'>
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

  <div class='block'>
    <div id='main'>
      <div class='introduction'>
        <h1 id='portfolio-loggo'>Emmelie Sundell</h1>
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
    <h1>Om mig</h1>
    <ul class='about-menu'>
      <li><button class='selected' id='bio' href='#'>Om</button></li>
      <li><button id='skills' href='#'>Projekt</button></li>
      <li><button id='experience' href='#'>Yrkeserfarenheter</button></li>
    </ul>

    <div class='content about'>
      <p>
        Hej! Kul att du hittade hit! Mitt namn är Emmelie och jag är 19 år gammal och studerar på kyh i odenplan till front end devolper. Denna sida ingår alltså som en del i utbildningen som kallas för 'induviduella projektet'. Vi ska alltså skapa en sida och under dessa år utvecckla denna med hjälp av kunskaperna vi får och sedan blir detta vårat examenarbete som vi i framtiden kommer visa upp för att söka jobb. detta betyder alltså att denna sida är ett projektet som hela tiden byggs på nya saker vilket gör att allt kanske inte fungerar som det ska.
      </p> 
      <br>
        <p>
            upptäcker du något eller vill ge feedback så tveka inte att höra av dig! men tänk också på att visa buggar kanske ska finnas där och att sidorna är långt ifrån klara. Ta därför denna sida med lite ro. Jag hoppas ändå att du gillar min sida och jag är glad att du titta förbi!
        </p><br>
      <img class='icon' src='css/images/instagram.png'>
      <img class='icon' src='css/images/facebook.png'>
      <img class='icon' src='css/images/twitter.png'>
      <img class='icon' src='css/images/gmail.png'><br>

    
      <img class='img-me' style='width: 20%; height: 300px; padding: 2%;' src='css/images/meohest.jpg'>
      <img class='head-img' src='css/images/jaag.png'>
      <img class='img-me' style='width: 20%; height: 300px; padding: 2%;' src='css/images/me.png'>
    

    </div>

  <!--       <div class='content skills'> -->
          <!-- <div id='skillbars'>

            <div class='skill_name' id='skill_php'>PHP</div>
            <div class='skillbar_wrapper'>
              <div class='skillbar_bar' id='skillbar_php'></div>
              <div class='skill_bar_percent'>50%</div>
            </div>

            <div class='skill_name' id='skill_asp'>Sleep</div>
            <div class='skillbar_wrapper'>
              <div class='skillbar_bar' id='skillbar_asp'></div>
              <div class='skill_bar_percent'>100%</div>
            </div>

            <div class='skill_name' id='skill_jsp'>JSP</div>
            <div class='skillbar_wrapper'>
              <div class='skillbar_bar' id='skillbar_jsp'></div>
              <div class='skill_bar_percent'>60%</div>
            </div>

            <div class='skill_name' id='skill_html'>HTML</div>
            <div class='skillbar_wrapper'>
              <div class='skillbar_bar' id='skillbar_html'></div>
              <div class='skill_bar_percent'>80%</div>
            </div>

            <div class='skill_name' id='skill_css'>CSS</div>
            <div class='skillbar_wrapper'>
              <div class='skillbar_bar' id='skillbar_css'></div>
              <div class='skill_bar_percent'>80%</div>
            </div>

          </div> -->
                  <!-- </div> -->
          <div class='content' style='text-align: center; margin: auto;'>
          <iframe width='700' height='500' src='https://www.youtube.com/embed/mZdxFBccimQ' frameborder='0' allowfullscreen></iframe>
          <button class='btn-style'>Klicka här för att se mer</button>
          </div>

        <div class='content experience'>

        <p class='e-headline'>Ykreserfarenheter;</p>
          <div class='spanga_work b_bottom'>
            <img src='css/images/stockholmstad.png' />
            <p>Djurvårdare | sommaren 2016 | Stockholm </br>
              <em>worked with over 1200 animals on Spånga gymnasium.</em></p>
            </div>

            <div class='b_bottom evidensia'>
              <img src='http://evidensia.se/wp-content/uploads/2016/12/evidensia-se.svg' />
              <p>Animal caretakeer | winter 2016 | Stockholm </br>
                <em>worked as an animal caretaker on an animal hospital.</em></p>
              </div>

              <p class='e-headline'>Utbildning;</p>
              <div class='b_bottom'>
                <img src='http://kyh.se/wp-content/uploads/2015/12/logo140.png' />
                <p style='margin-left: 10%;'>Front end devoloper | KYH | Stockholm </br>
                  <em>currently studying at KYH to become front end devoloper</em></p>
                </div>


                <div class='b_bottom'>
                 <img src='css/images/stockholmstad.png' />
                 <p>Spånga gymnasium | 2013-2016 | Djurvårdare</br>
                  <em>graduate in 2016 as an animalcaretakeer</em></p>
                </div>

                <a href='mittcv.php' class='btna-style'>Click here to see more</a>
      </div>
  </div>

    <div class='section_contact'></div>
  <div class='contact'>
      <h1>Kontakta mig!</h1>
    

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
        <input type='submit' class='btn-style'>

        <div class='fb-like' data-href='https://memlisen.se' data-width='200' data-layout='standard' data-action='like' data-show-faces='true' data-share='true'></div>

        <script src='//platform.linkedin.com/in.js' type='text/javascript'></script>
        <script type='IN/MemberProfile' data-id='https://www.linkedin.com/in/emmelie-sundell-41bba2128' data-format='hover' data-text='Emmelie Sundell'></script>
          
      </form>
    </div>
  </div> ";
  }

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

if ($_SESSION['loggedin'] == false) {
  echo "
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
      <button class='button-hm' id='hint'>Ledtråd</button>
      <button class='button-hm' id='reset'>Spela igen!</button>
    </div>
  </div> 



  <script type='text/javascript' src='//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5818b18185638455'></script> 
  <script src='scripts/index.js'></script>
  </body>
  </html>
  ";
}

break;
}

if ($_SESSION['loggedin'] == true){
  echo "
  <h1>Under counstraction</h1>





  ";

}


?>
