<?php 

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
    <li><a href='?page=resume'>CV</a></li>
    <li><a href='?page=portfolio'>Portfolio</a></li>
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
</div>
<table>
  <tbody>
  <tr>
    <th>
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
  <tr>
    <th><h2>Utbildning</h2></th> 
  </tr>";

  include('config.php'); // Connect to database

  $query = "
  SELECT *
  FROM resume
  WHERE typ='Utbildning'
  ";

  $result = mysqli_query($database, $query); // Fetch result

  while ($row = mysqli_fetch_assoc($result)) { // Fetch rows
    echo "
    <tr>
      <th></th>
      <td class='border-short'>
        <div class='box' style='width: 100%;'>
        <h2 class='box-title' href='#'>{$row['titel']}</h2>
          <div class='box-content'>
            <p class='profession'>
              {$row['yrke']} | {$row['datum']}<br>
              {$row['info']}
            </p>
          </div>
        </div>
      </td>
    </tr>";
  }

echo "
<tr>
  <th><h2>Arbetslivserfarenhet</h2></th> 
</tr>
";

$query = "
SELECT *
FROM resume
WHERE typ='Arbetslivserfarenhet'
";

$result = mysqli_query($database, $query);

while ($row = mysqli_fetch_assoc($result)) {
  echo "
  <tr>
    <th></th>
    <td class='border-short'>
      <div class='box' style='width: 100%;'>
      <h2 class='box-title' href='#'>{$row['titel']}</h2>
        <div class='box-content'>
          <p class='profession'>
            {$row['yrke']} | {$row['datum']}<br>
            {$row['info']}
          </p>
        </div>
      </div>
    </td>
  </tr>";
}

echo "
<tr>
  <th><h2>Certifikat</h2></th> 
</tr>
";

$query = "
SELECT *
FROM resume
WHERE typ='Certifikat'
";

$result = mysqli_query($database, $query);

while ($row = mysqli_fetch_assoc($result)) {
  echo "
  <tr>
    <th></th>
    <td class='border-short'>
      <div class='box' style='width: 100%;'>
      <h2 class='box-title' href='#'>{$row['titel']}</h2>
        <div class='box-content'>
          <p class='profession'>
            {$row['info']}
          </p>
        </div>
      </div>
    </td>
  </tr>";
}

echo "
  <th>
    <h2>Tekniska kunskaper</h2>
  </th>
  <td class='border-long'>
    <div class='yui-u'>
      <div class='talent'>
        <h2>Språk</h2>
        <ul>
";

$query = "
SELECT *
FROM resume
WHERE typ='Språk'
";

$result = mysqli_query($database, $query);

while ($row = mysqli_fetch_assoc($result)) {
  echo "<li>{$row['info']}</li>";
}

echo "
        </ul>               
      </div>
    </div>
    <div class='yui-u'>
      <div class='talent'>
        <h2>Program</h2>
        <ul>";

$query = "
SELECT *
FROM resume
WHERE typ='Program'
";

$result = mysqli_query($database, $query);

while ($row = mysqli_fetch_assoc($result)) {
  echo "<li>{$row['info']}</li>";
}

echo "
        </ul>               
      </div>
    </div>
    <div class='yui-u'>
      <div class='talent'>
        <h2>Verktyg</h2>
        <ul>";

$query = "
SELECT *
FROM resume
WHERE typ='Verktyg'
";

$result = mysqli_query($database, $query);

while ($row = mysqli_fetch_assoc($result)) {
  echo "<li>{$row['info']}</li>";
}

echo "
        </ul>               
      </div>
    </div>
  </td>";

mysqli_close($database); // Close database connection

echo"
</tbody>
</table> 
</body>
</html>";

?>