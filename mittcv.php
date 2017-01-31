<?php 
if ($_SESSION['loggedin'] == false){
echo "

<!DOCTYPE html>
<html>
<head>

  <title>Emmelie Sundell | studerande KYH | Memlisen.se</title>
  <meta http-equiv='content-type' content='text/html; charset=utf-8' />
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  
  <!--Font-style -->
  <link rel='stylesheet' type='text/css' href='css/mercv.css' media='all' /> 
  <link rel='stylesheet' type='text/css' href='css/cv.css' media='all' />
  <script src='scripts/resume.js'></script>

</head>
<body id='resume'>

  <div id='mySidenav' class='sidenav'>
   <ul class='navbar' id='myNavbar'>
    <li><a href='/'>Startsida</a></li>
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
 <tbody>";
}

$query = "
SELECT *
FROM resume
";

$result = mysqli_query($database, $query);

while ($row = mysqli_fetch_assoc($result)) {
      echo "
      <tr>
        <th>
          <article>
          <h2>{$row['sammanfattning']}</h2>
          </th> 
          <td>
            <p style='display: inline-block;'>
              {$row['text']}
            </p>
          </td>
        </tr>
      ";
    }
if ($_SESSION['loggedin'] == false){
  echo "<tr>
    <th>
      <article>
        <h2>Sammanfattning</h2>
      </th> 
      <td>
        <p style='display: inline-block;'>
          Hej där! 
          Detta är som du ser mitt cv. Vill du veta mer om en viss del så för muspekaren över den röda texten så kommer mer info fram!
          Mitt namn är som du kan se Emmelie sundell och studerar vid KYH för att bli webbutvecklare. Jag är redan färdigutbildad djurvårdare och sysslar med det på fritiden. Mitt mål med detta är att kunna starta en djurbutik online. Vill du se intyg, betyg m.m så tveka inte att höra av dig! antingen via de sociala iconerna eller också klicka på min mejl. Du kn även ladda ner med cv som pdf om du vill kolla på det senare eller kanske skriva ut det! :)
          <b>OBS! Denna sina är under påbyggnad, buggar finns och information kan saknas MEN jag jobbar på det. Skulle du upptäcka något som jag kan ha missat så hör gärna av dig!</b> 
        </p>
      </td>
    </tr>
    ";

    echo "
    <tr>
      <th>
        <h2>Arbetslivserfarenhet</h2>
      </th>
      <td class='border-short'>


       <div class='box' style='width: 100%;'>
        <h2 class='box-title' href='#'>Spånga Gymnasium</h2>
        <div class='box-content'>
          <p class='profession'>
            Djurvårdare | juni - augusti 2016<br>
            Sommarjobb som fast anställd. Fick sköta om djuren, ge dem mat, mocka hos får och grisar, ge vatten till djuren ute på bete. Skapa berikningar, städa, mata, m.m. Mauris commodo ultrices neque sit amet molestie. Donec in arcu quis erat mattis mollis. Ut pharetra pharetra tortor gravida rutrum. Proin condimentum faucibus pellentesque.
          </p>
          <a href='#' class='close-box'>Close</a>
        </div>
      </div>


    </td>
  </tr>

  <tr>
    <th></th>
    <td class='border-short'>
      <div class='box' style='width: 100%;'>
       <h2 class='box-title' href='#'>Djurkliniken Roslagstull</h2>   

       <div class='box-content'>
        <p class='profession'>
          Djurvårdare | Januari- febuari 2016<br>

          En exotisk djurklinik med inriktning mot fåglar och reptiler. Fick diska, städa, hjälpa veterinärerna, stå i kassan. Fick ge några injektioner sc. Vara med vid operationer och hjälpa till med att sätta kanylee. Ta blodprov, göra grundliga undersökningar, rasta hundar, städa burar, vara med och hålla i djur vid ultraljud och röntgen m.m.
        </p>
        <a href='#' class='close-box'>Close</a>
      </div>
    </div>
  </td>
</tr>

  <tr>
    <th></th>
    <td class='border-short'>
      <div class='box' style='width: 100%;'>
       <h2 class='box-title' href='#'>Spånga gymnasium</h2>   

       <div class='box-content'>
        <p class='profession'>
          Djurvårdare | 2 v. 2015<br>

          Fick i 2 veckors tid jobba i de olika avdelningarna på skolan, fågelrum, reptilrum, barnkammare (där skolan har sin egen insektsodling). Uppgifterna var varierande, det fanns ett schema i varje rum. Tex spola rent,  ge mat o vatten osv.
        </p>
        <a href='#' class='close-box'>Close</a>
      </div>
    </div>
  </td>
</tr>

  <tr>
    <th></th>
    <td class='border-short'>
      <div class='box' style='width: 100%;'>
       <h2 class='box-title' href='#'>Kallhälls 4h gård</h2>   

       <div class='box-content'>
        <p class='profession'>
          Djurvårdare | 5v. 2015<br>

           Här  jobbade jag med djuren på gården, daglig skötsel. Ge mat o vatten åt häst, get, gris, höns, får. Fick leda in och ut hästar och getter.  Samt släppa ut övriga djur. Fick mocka, träna höns, leda en barngrupp, köra häst o vagn samt rida, åka o handla varor, hämta en get m.m
        </p>
        <a href='#' class='close-box'>Close</a>
      </div>
    </div>
  </td>
</tr>

  <tr>
    <th></th>
    <td class='border-short'>
      <div class='box' style='width: 100%;'>
       <h2 class='box-title' href='#'>Hästa gård</h2>   

       <div class='box-content'>
        <p class='profession'>
          Djurvårdare | 2 v. 2015<br>

           Här fick jag jobba med alla möjliga djur men mest kor och får. Vi fick varje dag breda ut hö till korna sen slussa in de och skyffla bort och mocka. Vi fixk leda ut och in de hästar som fanns, fick lära oss sköta fåren, fånga in undersöka de, se ålder, klippa klövar och ull. 
          Stimulera hästar, för att lära oss leda de på rätt sätt.
        </p>
        <a href='#' class='close-box'>Close</a>
      </div>
    </div>
  </td>
</tr>

  <tr>
    <th></th>
    <td class='border-short'>
      <div class='box' style='width: 100%;'>
       <h2 class='box-title' href='#'>Kattstallet</h2>   

       <div class='box-content'>
        <p class='profession'>
          Djurvårdare | 4v. 2015<br>

           Har fick jag i en månad följa efter Rasmus, djurvårdaren. Städade katt ”burarna” mest inne på karantän. Hjälpte till att umgås med katter i karantän för att lära känna katterna och få de mindre skygga. Lekte med katter på avdelningen för stimulering. Var med när veterinären kom 2 ggr i veckan, jobba i butiken och sköta kassan, plocka upp varor, sätta upp möbler, fånga in katter. 
        </p>
        <a href='#' class='close-box'>Close</a>
      </div>
    </div>
  </td>
</tr>


 <tr>
    <th></th>
    <td class='border-short'>
      <div class='box' style='width: 100%;'>
       <h2 class='box-title' href='#'>Täby Galopp</h2>   

       <div class='box-content'>
        <p class='profession'>
          Djurvårdare | 1 v. 2014<br>

           Fick hjälpa till med att leda in och ut hästar till både hage och skrittmaskin, rykta hästar, fodra, soppa. 
        </p>
        <a href='#' class='close-box'>Close</a>
      </div>
    </div>
  </td>
</tr>

 <tr>
    <th></th>
    <td class='border-short'>
      <div class='box' style='width: 100%;'>
       <h2 class='box-title' href='#'>Djurmagazinet rotebro</h2>   

       <div class='box-content'>
        <p class='profession'>
          Djurvårdare | 2010<br>

           Här gjorde jag min prao och jobbade i butiken med dagliga sysslor. Jobba mycket med fåglarna och smådjuren där jag varje dag bytte mat, matskålar städade burar och diskade matskålar. Fick fylla på hyllor prismärka varor, göra rent akvarium.
        </p>
        <a href='#' class='close-box'>Close</a>
      </div>
    </div>
  </td>
</tr>

 <tr>
    <th></th>
    <td class='border-short'>
      <div class='box' style='width: 100%;'>
       <h2 class='box-title' href='#'>Sollentuna ridklubb</h2>   

       <div class='box-content'>
        <p class='profession'>
          Djurvårdare | 2010<br>

           Jag fick göra de vanligaste stallsysslorna, ta in och ut från hagar, ge mat o vatten (hö med hövagn och foder), rykta, mocka, soppa gångar, rida, leda på nybörjarlektioner samt hjälpa till med att sadla och tränsa.
        </p>
        <a href='#' class='close-box'>Close</a>
      </div>
    </div>
  </td>
</tr>

 <tr>
    <th><h2>Utbildning</h2></th>
    <td class='border-short'>
      <div class='box' style='width: 100%;'>
       <h2 class='box-title' href='#'>KYH- Stockholm</h2>   

       <div class='box-content'>
        <p class='profession'>
          Front end devoloper | yrkesexamen 2016-2018<br>
        </p>
        <a href='#' class='close-box'>Close</a>
      </div>
    </div>
  </td>
</tr>

 <tr>
    <th></th>
    <td class='border-short'>
      <div class='box' style='width: 100%;'>
       <h2 class='box-title' href='#'>Spånga gymnasium</h2>   

       <div class='box-content'>
        <p class='profession'>
          Naturbruk- Djurvårdare | yrkesexamen 2013-2016<br>
        </p>
        <a href='#' class='close-box'>Close</a>
      </div>
    </div>
  </td>
</tr>

 <tr>
    <th></th>
    <td class='border-short'>
      <div class='box' style='width: 100%;'>
       <h2 class='box-title' href='#'>Viksjöskolan</h2>   

       <div class='box-content'>
        <p class='profession'>
          Grundutbildning | 6-9 2009-2013<br>
        </p>
        <a href='#' class='close-box'>Close</a>
      </div>
    </div>
  </td>
</tr>

<tr>
    <th><h2>Certifikat</h2></th>
    <td>
      <div class='box' style='width: 100%;'>
       <h2 class='box-title' href='#'>B-körkort</h2>   

       <div class='box-content'>
        <p class='profession'>
          Tog körkort sommaren 2016, har även egen bil.<br>
        </p>
        <a href='#' class='close-box'>Close</a>
      </div>
    </div>
  </td>
</tr>

<tr>
    <th></th>
    <td>
      <div class='box' style='width: 100%;'>
       <h2 class='box-title' href='#'>D9</h2>   

       <div class='box-content'>
        <p class='profession'>
          Har ett bevis på att jag får ge vissa sprutor till djur.<br>
        </p>
        <a href='#' class='close-box'>Close</a>
      </div>
    </div>
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

</body>
</html>


";
}
  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
    echo "<tr>
    <th>
      <article>
        <h2>Sammanfattning</h2>
      </th> 
      <td>
        <p style='display: inline-block;'>
          Hej där! 
          Detta är som du ser mitt cv. Vill du veta mer om en viss del så för muspekaren över den röda texten så kommer mer info fram!
          Mitt namn är som du kan se Emmelie sundell och studerar vid KYH för att bli webbutvecklare. Jag är redan färdigutbildad djurvårdare och sysslar med det på fritiden. Mitt mål med detta är att kunna starta en djurbutik online. Vill du se intyg, betyg m.m så tveka inte att höra av dig! antingen via de sociala iconerna eller också klicka på min mejl. Du kn även ladda ner med cv som pdf om du vill kolla på det senare eller kanske skriva ut det! :)
          <b>OBS! Denna sina är under påbyggnad, buggar finns och information kan saknas MEN jag jobbar på det. Skulle du upptäcka något som jag kan ha missat så hör gärna av dig!</b> 
        </p>
      </td>
    </tr>
    ";

    echo "
    <tr>
      <th>
        <h2>Arbetslivserfarenhet</h2>
      </th>
      <td class='border-short'>


       <div class='box' style='width: 100%;'>
        <h2 class='box-title' href='#'>Spånga Gymnasium</h2>
        <div class='box-content'>
          <p class='profession'>
            Djurvårdare | juni - augusti 2016<br>
            Sommarjobb som fast anställd. Fick sköta om djuren, ge dem mat, mocka hos får och grisar, ge vatten till djuren ute på bete. Skapa berikningar, städa, mata, m.m. Mauris commodo ultrices neque sit amet molestie. Donec in arcu quis erat mattis mollis. Ut pharetra pharetra tortor gravida rutrum. Proin condimentum faucibus pellentesque.
          </p>
          <a href='#' class='close-box'>Close</a>
        </div>
      </div>


    </td>
  </tr>

  <tr>
    <th></th>
    <td class='border-short'>
      <div class='box' style='width: 100%;'>
       <h2 class='box-title' href='#'>Djurkliniken Roslagstull</h2>   

       <div class='box-content'>
        <p class='profession'>
          Djurvårdare | Januari- febuari 2016<br>

          En exotisk djurklinik med inriktning mot fåglar och reptiler. Fick diska, städa, hjälpa veterinärerna, stå i kassan. Fick ge några injektioner sc. Vara med vid operationer och hjälpa till med att sätta kanylee. Ta blodprov, göra grundliga undersökningar, rasta hundar, städa burar, vara med och hålla i djur vid ultraljud och röntgen m.m.
        </p>
        <a href='#' class='close-box'>Close</a>
      </div>
    </div>
  </td>
</tr>

  <tr>
    <th></th>
    <td class='border-short'>
      <div class='box' style='width: 100%;'>
       <h2 class='box-title' href='#'>Spånga gymnasium</h2>   

       <div class='box-content'>
        <p class='profession'>
          Djurvårdare | 2 v. 2015<br>

          Fick i 2 veckors tid jobba i de olika avdelningarna på skolan, fågelrum, reptilrum, barnkammare (där skolan har sin egen insektsodling). Uppgifterna var varierande, det fanns ett schema i varje rum. Tex spola rent,  ge mat o vatten osv.
        </p>
        <a href='#' class='close-box'>Close</a>
      </div>
    </div>
  </td>
</tr>

  <tr>
    <th></th>
    <td class='border-short'>
      <div class='box' style='width: 100%;'>
       <h2 class='box-title' href='#'>Kallhälls 4h gård</h2>   

       <div class='box-content'>
        <p class='profession'>
          Djurvårdare | 5v. 2015<br>

           Här  jobbade jag med djuren på gården, daglig skötsel. Ge mat o vatten åt häst, get, gris, höns, får. Fick leda in och ut hästar och getter.  Samt släppa ut övriga djur. Fick mocka, träna höns, leda en barngrupp, köra häst o vagn samt rida, åka o handla varor, hämta en get m.m
        </p>
        <a href='#' class='close-box'>Close</a>
      </div>
    </div>
  </td>
</tr>

  <tr>
    <th></th>
    <td class='border-short'>
      <div class='box' style='width: 100%;'>
       <h2 class='box-title' href='#'>Hästa gård</h2>   

       <div class='box-content'>
        <p class='profession'>
          Djurvårdare | 2 v. 2015<br>

           Här fick jag jobba med alla möjliga djur men mest kor och får. Vi fick varje dag breda ut hö till korna sen slussa in de och skyffla bort och mocka. Vi fixk leda ut och in de hästar som fanns, fick lära oss sköta fåren, fånga in undersöka de, se ålder, klippa klövar och ull. 
          Stimulera hästar, för att lära oss leda de på rätt sätt.
        </p>
        <a href='#' class='close-box'>Close</a>
      </div>
    </div>
  </td>
</tr>

  <tr>
    <th></th>
    <td class='border-short'>
      <div class='box' style='width: 100%;'>
       <h2 class='box-title' href='#'>Kattstallet</h2>   

       <div class='box-content'>
        <p class='profession'>
          Djurvårdare | 4v. 2015<br>

           Har fick jag i en månad följa efter Rasmus, djurvårdaren. Städade katt ”burarna” mest inne på karantän. Hjälpte till att umgås med katter i karantän för att lära känna katterna och få de mindre skygga. Lekte med katter på avdelningen för stimulering. Var med när veterinären kom 2 ggr i veckan, jobba i butiken och sköta kassan, plocka upp varor, sätta upp möbler, fånga in katter. 
        </p>
        <a href='#' class='close-box'>Close</a>
      </div>
    </div>
  </td>
</tr>


 <tr>
    <th></th>
    <td class='border-short'>
      <div class='box' style='width: 100%;'>
       <h2 class='box-title' href='#'>Täby Galopp</h2>   

       <div class='box-content'>
        <p class='profession'>
          Djurvårdare | 1 v. 2014<br>

           Fick hjälpa till med att leda in och ut hästar till både hage och skrittmaskin, rykta hästar, fodra, soppa. 
        </p>
        <a href='#' class='close-box'>Close</a>
      </div>
    </div>
  </td>
</tr>

 <tr>
    <th></th>
    <td class='border-short'>
      <div class='box' style='width: 100%;'>
       <h2 class='box-title' href='#'>Djurmagazinet rotebro</h2>   

       <div class='box-content'>
        <p class='profession'>
          Djurvårdare | 2010<br>

           Här gjorde jag min prao och jobbade i butiken med dagliga sysslor. Jobba mycket med fåglarna och smådjuren där jag varje dag bytte mat, matskålar städade burar och diskade matskålar. Fick fylla på hyllor prismärka varor, göra rent akvarium.
        </p>
        <a href='#' class='close-box'>Close</a>
      </div>
    </div>
  </td>
</tr>

 <tr>
    <th></th>
    <td class='border-short'>
      <div class='box' style='width: 100%;'>
       <h2 class='box-title' href='#'>Sollentuna ridklubb</h2>   

       <div class='box-content'>
        <p class='profession'>
          Djurvårdare | 2010<br>

           Jag fick göra de vanligaste stallsysslorna, ta in och ut från hagar, ge mat o vatten (hö med hövagn och foder), rykta, mocka, soppa gångar, rida, leda på nybörjarlektioner samt hjälpa till med att sadla och tränsa.
        </p>
        <a href='#' class='close-box'>Close</a>
      </div>
    </div>
  </td>
</tr>

 <tr>
    <th><h2>Utbildning</h2></th>
    <td class='border-short'>
      <div class='box' style='width: 100%;'>
       <h2 class='box-title' href='#'>KYH- Stockholm</h2>   

       <div class='box-content'>
        <p class='profession'>
          Front end devoloper | yrkesexamen 2016-2018<br>
        </p>
        <a href='#' class='close-box'>Close</a>
      </div>
    </div>
  </td>
</tr>

 <tr>
    <th></th>
    <td class='border-short'>
      <div class='box' style='width: 100%;'>
       <h2 class='box-title' href='#'>Spånga gymnasium</h2>   

       <div class='box-content'>
        <p class='profession'>
          Naturbruk- Djurvårdare | yrkesexamen 2013-2016<br>
        </p>
        <a href='#' class='close-box'>Close</a>
      </div>
    </div>
  </td>
</tr>

 <tr>
    <th></th>
    <td class='border-short'>
      <div class='box' style='width: 100%;'>
       <h2 class='box-title' href='#'>Viksjöskolan</h2>   

       <div class='box-content'>
        <p class='profession'>
          Grundutbildning | 6-9 2009-2013<br>
        </p>
        <a href='#' class='close-box'>Close</a>
      </div>
    </div>
  </td>
</tr>

<tr>
    <th><h2>Certifikat</h2></th>
    <td>
      <div class='box' style='width: 100%;'>
       <h2 class='box-title' href='#'>B-körkort</h2>   

       <div class='box-content'>
        <p class='profession'>
          Tog körkort sommaren 2016, har även egen bil.<br>
        </p>
        <a href='#' class='close-box'>Close</a>
      </div>
    </div>
  </td>
</tr>

<tr>
    <th></th>
    <td>
      <div class='box' style='width: 100%;'>
       <h2 class='box-title' href='#'>D9</h2>   

       <div class='box-content'>
        <p class='profession'>
          Har ett bevis på att jag får ge vissa sprutor till djur.<br>
        </p>
        <a href='#' class='close-box'>Close</a>
      </div>
    </div>
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
</tbody></table> ";



  $query = "
     
      INSERT INTO resume
      (
        sammanfattning,
        typ, 
        titel,
        yrke och datum,
        info,
        teknik, 
        språk, 
        Program, 
        Verkyg, 
        certifikat
      )


      VALUES 
      (
        '$sammanfattning',
        '$typ',
        '$titel',
        '$profession',
        '$info',
        '$teknik',
        '$språk',
        '$program'
        '$verktyg',
        '$certifikat'
      )

    ";
  }


?>


