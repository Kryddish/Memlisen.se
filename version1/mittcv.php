<?php 
session_start();
echo "<link rel='stylesheet' href='css/admin-page.css'>"; 
if ($_SESSION['loggedin'] == true) {
  echo "
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

  <title>Emmelie Sundell | studerande KYH | Memlisen.se</title>
  <meta http-equiv='content-type' content='text/html; charset=utf-8' />
  <meta name='keywords' content=' />
  <meta name='description' content=' />
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <!--Font-style -->
  <link rel='stylesheet' type='text/css' href='css/mercv.css' media='all' /> 
  <link rel='stylesheet' type='text/css' href='css/cv.css' media='all' />

</head>
<body id="resume">

<div class='menu-position'>
    <ul class='navbar' id='myNavbar'>
      <li><a href='?page=home'>Startsida</a></li>
      <li><a href='?page=about'>Om mig</a></li>        
      <li><a href='?page=resume'>CV</a></li>
      <li><a href='?page=portfolio'>Portfolio</a></li>
    </li>
  </ul>
</div>


<div id='background-position' class='yui-t7'>
  <div id='top-line'>
  
    <div id='hd'>
      <div class='yui-gc'>
        <div class='yui-u first'>
          <h1>Emmelie Sundell</h1>
          <h2>Studerande på KYH</h2>
          
          <p class='countdown' id='clockLIA'>
                       <span>Min Lia startar om </span>
                       <span class='days highlight'></span> dagar 
                       <span class='hours highlight'></span> timmar 
    <!--               <span class='minutes'></span> minutes 
                       <span class='seconds'></span> seconds -->
                    </p>
                    <p class='countdown' id='clockGraduation'>
                        <span>Tar examen om </span>
                        <span class='days highlight'></span> dagar 
                        <span class='hours highlight'></span> timmar 
    <!--                <span class='minutes'></span> minutes
                        <span class='seconds'></span> seconds -->
                    </p>

        </div>

        <div class='yui-u'>
          <div class='contact-info'>
            <h3><a id='pdf' href='documents/CV.pdf' download='documents/CV.pdf'>ladda ner som PDF</a></h3>
            <h3><a href='emmelie.sundell@hotmail.com'>emmelie.sundell@hotmail.com</a></h3>
            <h3>0708769638</h3>
            <script src='//platform.linkedin.com/in.js' type='text/javascript'></script>
            <!-- linkedin plugin hämtad från deras hemsida -->
<script type='IN/MemberProfile' data-id='https://www.linkedin.com/in/emmelie-sundell-41bba2128' data-format='hover'></script>
          </div><!--// .contact-info -->
        </div>
      </div><!--// .yui-gc -->
    </div><!--// hd -->

<div class='expand'>
  <h3 class='expand-header'></h3><br>
  <p class='expand-text'></p>
  <p class='close'>×</p>  
</div>
  <table>
     <tbody>
      
      <tr>
        <th>
        <article>
          <h2>Sammanfattning</h2>
        </th> 
        <td>
          <p>
          Hej där! 
          Detta är som du ser mitt cv. Vill du veta mer om en viss del så för muspekaren över den röda texten så kommer mer info fram!
          Mitt namn är som du kan se Emmelie sundell och studerar vid KYH för att bli webbutvecklare. Jag är redan färdigutbildad djurvårdare och sysslar med det på fritiden. Mitt mål med detta är att kunna starta en djurbutik online. Vill du se intyg, betyg m.m så tveka inte att höra av dig! antingen via de sociala iconerna eller också klicka på min mejl. Du kn även ladda ner med cv som pdf om du vill kolla på det senare eller kanske skriva ut det! :)
          <b>OBS! Denna sina är under påbyggnad, buggar finns och information kan saknas MEN jag jobbar på det. Skulle du upptäcka något som jag kan ha missat så hör gärna av dig!</b> 
          </p>
        </td>

      </tr>


      <tr>
        <th>
          <h2>Arbetslivserfarenhet</h2>
        </th>
        <td class='border-short'>

          
          <h3>Spånga Gymnasium</h3>
            <a class='profession'>
                Djurvårdare | juni - augusti 2016
            </a>
          <p>
            Sommarjobb som fast anställd. Fick sköta om djuren, ge dem mat, mocka hos får och grisar, ge vatten till djuren ute på bete. Skapa berikningar, städa, mata, m.m. Mauris commodo ultrices neque sit amet molestie. Donec in arcu quis erat mattis mollis. Ut pharetra pharetra tortor gravida rutrum. Proin condimentum faucibus pellentesque.
          </p>

        </td>
      </tr>

      <tr>
      <th></th>
      <td class='border-short'>
       <h3>Djurkliniken Roslagstull</h3>   
            <a class='profession'>Djurvårdare | Januari- febuari 2016
            </a>
        <p>
          En exotisk djurklinik med inriktning mot fåglar och reptiler. Fick diska, städa, hjälpa veterinärerna, stå i kassan. Fick ge några injektioner sc. Vara med vid operationer och hjälpa till med att sätta kanylee. Ta blodprov, göra grundliga undersökningar, rasta hundar, städa burar, vara med och hålla i djur vid ultraljud och röntgen m.m.
        </p>
      </td>
    </tr>


   <tr>
      <th></th>
      <td class='border-short'>
        <h3>Spånga gymnasium</h3>
        <p class='profession'>Djurvårdare | 4 v. 2015</p>
        <p>
         Fick i två veckors tid jobba i de olika avdelningarna på skolan, fågelrum, reptilrum, barnkammare (där skolan har sin egen insektsodling). Uppgifterna var varierande, det fanns ett schema i varje rum. Tex spola rent,  ge mat o vatten osv. 
       </p>
     </td>
   </tr>


   <tr>
      <th></th>
      <td class='border-short'>
      <h3>Kallhälls 4h gård</h3>
      <em><p class='profession'>Djurvårdare | 5v. 2015</p></em>
        <p>
        Här  jobbade jag med djuren på gården, daglig skötsel. Ge mat o vatten åt häst, get, gris, höns, får. Fick leda in och ut hästar och getter.  Samt släppa ut övriga djur. Fick mocka, träna höns, leda en barngrupp, köra häst o vagn samt rida, åka o handla varor, hämta en get m.m
        </p>
      </td>
    </tr>


    <tr>
      <th>
       
      </th>
      <td class='border-short'>
       <h3>Hästa gård</h3>
        <em><a class='profession'>Djurvårdare | 2 v. 2015</a></em>
        <p>
          Här fick jag jobba med alla möjliga djur men mest kor och får. Vi fick varje dag breda ut hö till korna sen slussa in de och skyffla bort och mocka. Vi fixk leda ut och in de hästar som fanns, fick lära oss sköta fåren, fånga in undersöka de, se ålder, klippa klövar och ull. 
          Stimulera hästar, för att lära oss leda de på rätt sätt. 
        </p>
      </td>
    </tr>


    <tr>
      <th>
        
      </th>
      <td class='border-short'>
       <h3>Kattstallet</h3>
        <em><p class='profession'>Djurvårdare | 4v. 2015</p></em>
        <p>
          Har fick jag i en månad följa efter Rasmus, djurvårdaren. Städade katt ”burarna” mest inne på karantän. Hjälpte till att umgås med katter i karantän för att lära känna katterna och få de mindre skygga. Lekte med katter på avdelningen för stimulering. Var med när veterinären kom 2 ggr i veckan, jobba i butiken och sköta kassan, plocka upp varor, sätta upp möbler, fånga in katter. 
        </p>
      </td>
    </tr>


    <tr>
      <th>
        
      </th>
      <td class='border-short'>
      <h3>Täby Galopp</h3>
        <em><p class='profession'>Djurvårdare | 1 v. 2014</p></em>
        <p>
          Fick hjälpa till med att leda in och ut hästar till både hage och skrittmaskin, rykta hästar, fodra, sopa. 
        </p>
      </td>
    </tr>


    <tr>
      <th>
        
      </th>
      <td class='border-short'>
      <h3>Djurmagazinet rotebro</h3>
        <em><p class='profession'>Djurvårdare | 2010</p></em>
        <p>
          Här gjorde jag min prao och jobbade i butiken med dagliga sysslor. Jobba mycket med fåglarna och smådjuren där jag varje dag bytte mat, matskålar städade burar och diskade matskålar. Fick fylla på hyllor prismärka varor, göra rent akvarium. 
        </p>
      </td>
    </tr>


    <tr>
      <th>
        
      </th>
      <td class='border-long'>
      <h3 >Sollentuna ridklubb</h3>
        <em><p class='profession'>Djurvårdare | 2010</p></em>
        <p>
         Jag fick göra de vanligaste stallsysslorna, ta in och ut från hagar, ge mat o vatten (hö med hövagn och foder), rykta, mocka, soppa gångar, rida, leda på nybörjarlektioner samt hjälpa till med att sadla och tränsa. 
        </p>
      </td>
    </tr>

    <tr>
      <th>
        <h2>UtbildningKYH</h2>
      </th>
      <td class='border-short'>
        <h3>Viksjöskolan</h3>
        <p class='profession' >Grundutbildning | 6-9 2009-2013</p>
        
      </td>
    </tr>

    <tr>
      <th>

      </th>
      <td class='border-long'>
         <h3>Spånga gymansium</h3>
        <p class='profession'>Naturbruk- Djurvårdare | yrkesexamen 2013-2016</p>
      </td>
    </tr>

    <tr>
      <th>
        <h2>Tekniska kunskaper</h2>
      </th>
          <td class='border-long'>
            
            </div>
            <div class='yui-u'>

                <div class='talent'>
                  <h2>Språk</h2>
                  <ul>
                    <li>Svenska</li>
                    <li>Engelska</li>
                    <li>Tyska</li>
                  </ul>               
               </div>

                <div class='talent'>
                  <h2>Program</h2>
                  <ul>
                    <li>HTML 5</li>
                    <li>CSS</li>
                    <li>Javascript</li>
                    <li>Jquery</li>
                    <li>Photoshop</li>
                    <li>Office</li>
                  </ul>   
                </div>

                <div class='talent'>
                  <h2>Verktyg</h2>
                  <ul>
                    <li>SublimeText3</li>
                    <li>Github</li>
                    <li>Visual Studio</li>
                  </ul>   
          </td> </div></div>
  </tr>
</article>
  </tbody></table> 


<script type='text/javascript'>

var expanded = false;
var expandWindow = document.getElementsByClassName('expand')[0];
var links = document.getElementsByClassName('profession');

for (var i = 0; i < links.length; i++) {
  links[i].onclick = function(event) {
  if (!expanded) {
    if (event.target == links[0]) {
      expandWindow.children[0].innerHTML = 
      'Spånga Gymnasium';

      expandWindow.children[2].innerHTML = 
      'Efter gymnasumarbetet blev jag erbjuden att få komma dit och arbeta under sommaren och självklart tackade jag ja! Fick under den perioden lära mig massor och göra det jag älskar mest. Vi arbetade i team ca 4-6 personer per dag och var 1-3 personer per avdelning. Avdelningarna var uppdelade i Terrarierumet, Fågelrumet samt ladan. I terrarierumet ingick även barnkammaren (insektsuppfödningen och juveniler) samt skötsel av regnskogen samt djuren som vistas där. Jag trivdes lika bra på alla avdelningar och vi försökte jobba så man var på en avdelning ena dagen och en annan nästa dag för att kunna variera arbetet bättre. Fick vara med om månnga ägg som kläcktes, så som fågelungar, ormar, leopardgeckos samt sköldpaddor. de var superkul att få följa med på deras resa! från att de kläcktes tills vi kunde flytta dem ut i det större terrariet. Vi höll också på med mycket berikning till djuren speciellt fåglarna dem fick ny berikning varje dag. Detta jobb var verkligen en tid att minnas och uppleva. att få vara så nära djuren och få lära sig så mycket. en dag så upptäckte jag en skadad fågel och då fick vi hjälpas åt att göra rent såret och ta hand om fågeln som nu mår hur bra som helst. eller i börjar när jag hade svårt för insekter skulle mata skäggagamerna med syrsor, till slut var inte det lika läskigt. Jag tyckte om att vara i ladan dels för att de var sommar och jag gillar att va ute men dels för att de var mer jobb och jag gillar att utmnaa mig själv. Jag ville försöka bberika hönsen och testade olika och nya sätt, klickerträndade även påfågelen snövit samt gick ut på promenad med Aslan (iller). De var lite synd att fåren var på sommarbete men det gav en mera tid till övriga djur. En eftermiddag bestämde jag mig för att sitta med chinchillorna som är lite skygga och försöka tämja dem. Eller också gå runt till alla kaniner och borsta dem, jag gjorde också lådor med jord i så de fick gräva. Som sagt vi gjorde massor och lärde oss massor påvägen som jag kommer få ha medmig. > ';
    }
    if (event.target == links[1]) {
      expandWindow.children[0].innerHTML = 
      'Djurkliniken Roslagstull';

      expandWindow.children[2].innerHTML = 
      'praktik';
    }
    if (event.target == links[2]) {
      expandWindow.children[0].innerHTML = 
      'Spånga Gymnasium';

      expandWindow.children[2].innerHTML = 
      'introduktion';
    }
    if (event.target == links[3]) {
      expandWindow.children[0].innerHTML = 'Kallhälls 4h gård';
      expandWindow.children[2].innerHTML = 'djurpark';
    }
    if (event.target == links[4]) {
      expandWindow.children[0].innerHTML = 'Hästa gård';
      expandWindow.children[2].innerHTML = 'intro';
    }
    if (event.target == links[5]) {
      expandWindow.children[0].innerHTML = 'Kattstallet';
      expandWindow.children[2].innerHTML = 'katter';
    }
    if (event.target == links[6]) {
      expandWindow.children[0].innerHTML = 'Täby galopp';
      expandWindow.children[2].innerHTML = 'hästar';
    }
    if (event.target == links[7]) {
      expandWindow.children[0].innerHTML = 'Djurmagazinet rotebro';
      expandWindow.children[2].innerHTML = 'fågelbebis';
    }
    if (event.target == links[8]) {
      expandWindow.children[0].innerHTML = 'Sollentuna ridklubb';
      expandWindow.children[2].innerHTML = 'mer hästar';
    }
    if (event.target == links[9]) {
      expandWindow.children[0].innerHTML = 'Viksjöskolan';
      expandWindow.children[2].innerHTML = 'Grundutbildning';
    }
    if (event.target == links[10]) {
      expandWindow.children[0].innerHTML = 'Spånga gymnasium';
      expandWindow.children[2].innerHTML = 'Utbildning';
    }

    expandWindow.style.display = 'block';
    expanded = true;

  }else{
    
    expandWindow.style.display = 'none';
    expanded = false;
  }
  }
}

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

</script>

<!--social plugins-->
<script type='text/javascript' src='//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5818b18185638455'></script> 

</body>
</html>




";

 ?>


