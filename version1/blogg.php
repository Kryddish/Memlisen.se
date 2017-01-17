<?php 
session_start();
echo "<link rel='stylesheet' href='css/admin-page.css'>"; 
if ($_SESSION['loggedin'] == true) {
  echo "
  <div class='fixed'>
  <h2>Välkommen admin!</h2>
  <form method='post'>
  <input type='submit' name='logout' value='Logout'>
  </form>
  </div>
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
</head>
<style type='text/css'>
  h1 {
    width: 100%;
    margin: 0;
    padding: 0;
    text-align: center;
}
h1:after {
    display: inline-block;
    margin: 0 0 8px 20px;
    height: 3px;
    content: ' ';
    text-shadow: none;
    background-color: #999;
    width: 140px;
}
h1:before {
    display: inline-block;
    margin: 0 20px 8px 0;
    height: 3px;
    content: ' ';
    text-shadow: none;
    background-color: #999;
    width: 140px;
}


img {
  width: 80%;
  height: 400px;
  margin-top: 5%;
}

p{
  width: 80%

}
.p-post {
  width: 80%;
  height: 50%;

  margin: auto;
}
.navbar{
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
}

  .navbar li{
    float: left;
  }
    .navbar li a{
      display: block;
      padding: 8px 16px;
    }
      .navbar li a:hover{
        color: #000;
        background-color: #ccc;
      }
        .navbar a{
          text-decoration: none;
        }

</style>
<body>

<div class='menu-position'>
    <ul class='navbar' id='myNavbar'>
      <li><a href='?page=home'>Startsida</a></li>
      <li><a href='?page=about'>Om mig</a></li>        
      <li><a href='?page=resume'>CV</a></li>
      <li><a href='?page=portfolio'>Portfolio</a></li>
    </li>
  </ul>
</div>
<h1>Emmelie Sundell</h1>
";

$database = mysqli_connect('memlisendb-219317.mysql.binero.se', '219317_ul80784', 'mjaumaow123', '219317-memlisendb' );

$query = "SELECT * FROM blogginlägg ORDER BY date DESC";
$result = mysqli_query($database, $query);

while ($row= mysqli_fetch_assoc($result)) {

	echo "
	<div class='p-post'>
	<img src='css/images/cat.jpg'>
	<h2>{$row['title']}</h2>
	<p>datum: {$row['date']}</p>
	<p>inlägg: {$row['id']}</p>
	<p>{$row['message']}</p>
	<form method='post'>
	</form>
	";
}

echo "
</body>
</html>
";

?>