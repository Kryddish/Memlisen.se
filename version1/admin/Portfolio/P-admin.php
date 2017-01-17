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
	<img src='cc/images/cat.jpg'>
	<h2>{$row['title']}</h2>
	<p>{$row['date']}</p>
	<p>Blogginlägg: {$row['id']}</p>
	<p>{$row['message']}</p>
	<form method='post'>
	<input type='hidden' name='remove' value='{$row['id']}'>
	<input type='submit' value='Ta bort'>
	<input type='submit' name='change' value='Ändra'
	</form>
	";
}
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
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