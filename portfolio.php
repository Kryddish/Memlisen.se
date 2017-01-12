<?php 
$database = mysqli_connect('memlisendb-219317.mysql.binero.se', '219317_ul80784', 'mjaumaow123', '219317-memlisendb' );
error_reporting(0);
session_start();
// mysqli_query($link, 'SET NAMES utf8');
echo "
<!DOCTYPE html>
<html>
<head>
  <title>Memlisen.se | Emmelie Sundell | Portfolio | Student KYH</title>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' href='css/portfolio.css'>
   <script src='scripts/jquery.min.js'></script>
</head>
<body>

  <div class='menu-position'>
    <ul class='navbar' id='myNavbar'>
      <li><a href='/'>Startsida</a></li>
      <li><a href='?page=about'>Om mig</a></li>        
      <li><a href='?page=resume'>CV</a></li>
      <li><a href='?page=portfolio'>Portfolio</a></li>
    </li>
  </ul>
</div>
<h1>Hej</h1>
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
+-





echo "

</body>
</html>
";



?>