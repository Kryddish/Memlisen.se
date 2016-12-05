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
	<title>Memlisen.se | Emmelie Sundell | 404</title>
</head>
<style type='text/css'>
	body {
		background: #00ff00 url('http://media02.hongkiat.com/funny-creative-error-404/14-error-404-page.jpg') no-repeat fixed center; 
		background-size: 130% 130%;
	}

	a {
		text-decoration: none;
		text-align: center;
		font-weight: bold;
		font-size: 30px;
	}
</style>
<body>

<a href='index.php'>Go to homepage!</a>




</body>
</html>

";

 ?>

