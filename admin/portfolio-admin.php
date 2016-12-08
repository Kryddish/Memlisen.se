<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Memlisen.se | Emmelie Sundell | Blogg | Student KYH</title>
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
</style>

</head>
<body>

<?php  

if (isset($_POST['password'])) {
	if ($_POST['password'] == 'maow') {
		$_SESSION['loggedin'] = true;
	}
}

if (isset($_POST['logout'])) {
	$_SESSION['loggedin'] = false;
}

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
	echo "
	<h3>Välkommen admin!</h3>
	<form method='post'>
	<input type='submit' name='logout' value='logout'>
	</form>



				";

	echo "
<form class='createentry' method='post' enctype='multipart/form-data'>
   <fieldset>
    <legend>New post</legend>
    <label for='title'>Title:</label>
    <input name='title' type='text'>
    <label for='message'>Message:</label>
    <textarea name='message'></textarea>
    <input name='newpost' type='submit' value='Create new post'>
   </fieldset>
  </form>
  	<h1>Emmelie Sundell</h1>



	";

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

else {
	echo "
	<form method='post'>
	<input type='password' name='password' >
	<input type='submit' value='login'>
	</form>



	 ";

	 if (isset($_POST['password']) && $_SESSION['loggedin'] == false) {
	 	echo "Fel lösenord!";
	 }
}



?>

</body>
</html>