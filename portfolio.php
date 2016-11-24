<!DOCTYPE html>
<html>
<head>
	<title>Memlisen.se | Emmelie Sundell | Portfolio | Student KYH</title>
</head>
<style type="text/css">
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
    content: " ";
    text-shadow: none;
    background-color: #999;
    width: 140px;
}
h1:before {
    display: inline-block;
    margin: 0 20px 8px 0;
    height: 3px;
    content: " ";
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

<navbar>
<div class="menu-position">
    <ul class="navbar" id="myNavbar">
      <li><a href="index.php">Startsida</a></li>
      <li><a href="aboutme.html">Om mig</a></li>        
      <li><a href="mittcv.html">CV</a></li>
      <li><a href="portfolio.php">Portfolio</a></li>
    </li>
  </ul>
</div>
</navbar>
<h1>Emmelie Sundell</h1>

<?php 
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


 ?>



	

</body>




</body>
</html>