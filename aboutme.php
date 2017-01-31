<?php 

if ($_SESSION['loggedin'] == false){
echo "
<!DOCTYPE html>
<html>
<title>Memlisen.se | Emmelie Sundell | Om mig</title>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='stylesheet' type='text/css' href='css/aboutme.css'>
<body id='aboutme'>

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


  <div id='main' style='height: 100vh;'>
    <div class='introduction'>
      <h1 style=' font-size: 50px;' id='portfolio-loggo'>So, you want to find out more about me?</h1>
      <p>
        Hej! Kul att du hittade hit! Detta är då sidan om mig som just nu inte alls har så mycket innehåll. Tanken är att en blogg ska läggas in och lite mer info och mig och vad jag sysslar med :)
      </p>
      <p>
        <button class='btnp-style'>Klicka på mig!</button>
      </p>
    </div>
  </div>

<div class='aboutme-section'>
      <p style='width: 40%; margin-left: 15%; margin-top: 5%;'>
        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.
      </p>
      <img src='css/images/myAvatar.png' style='margin-top: 5%;'>
    </div>
 


";
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
  $database = mysqli_connect('memlisendb-219317.mysql.binero.se', '219317_ul80784', 'mjaumaow123', '219317-memlisendb' );
  if (isset($_POST['remove'])) {
    $id = $_POST['remove'];
    $query = "
    DELETE FROM blogginlägg
    WHERE id = $id";

    mysqli_query($database, $query);
  }

  if (isset($_POST['message'])) {
    $title = $_POST['title'];
    $message = $_POST['message'];

    $query = "INSERT INTO blogginlägg (
    title, 
    date,
    message)
    VALUES ('$title', NOW(), '$message')";

    mysqli_query($database, $query);
    echo "Skickat!";
  }

  $query = "SELECT * FROM blogginlägg ORDER BY date DESC";

  $result = mysqli_query($database, $query);

  while ($row= mysqli_fetch_assoc($result)) {
    echo "
    <div class='p-post'>
    <img src='cat.jpg'>
    <h2>{$row['title']}</h2>
    <p>{$row['date']}</p>
    <p>Blogginlägg: {$row['id']}</p>
    <p>{$row['message']}</p>
    <form method='post'>
    <input type='hidden' name='remove' value='{$row['id']}'>
    <input type='submit' value='Ta bort'>
    </form>
    ";
  }

}

?>
