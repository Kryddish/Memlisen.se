<?php 

include("config.php");
session_start();

echo "<link rel='stylesheet' href='css/admin.css'>"; 

if (isset($_POST['password'])) {
	$username = mysqli_real_escape_string($database, $_POST['username']);
	$password = mysqli_real_escape_string($database, $_POST['password']);
	
	 // Hacker protection
    $username = stripslashes($username); // removes slash
    $password = stripslashes($password);

	if ($username == 'admin' && $password == 'maow') {
		$_SESSION['loggedin'] = true;

	}
}


if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  $query = "
  SELECT * 
  FROM messages";

    $result = mysqli_query($database, $query);

    while ($row = mysqli_fetch_assoc($result)) {
    	echo "
    	<div class='message'>
		<h4>Meddelanden från hemsidan:</h4>
		<table>
			<tr>
				<td>Avsändare:</td><td>{$row['avsändare']}</td>
			</tr>
			<tr>
				<td>epost:</td><td>{$row['epost']}</td>
			</tr>
			<tr>
				<td>Telefon:</td><td>{$row['telefonnummer']}</td>
			</tr>
			<tr>
				<td>meddelande:</td><td>{$row['meddelande']}</td>
			</tr>
		</table>
	</div>";
    }
} else {
	echo "
	<form id='login-form' method='post'>
		<label>Användarnamn:</label><input type='text' name='username'>
		<label>Lösenord:</label><input type='password' name='password' >
		<input type='submit' value='Login'>
	</form>";

	 if (isset($_POST['password']) && $_SESSION['loggedin'] == false) {
	 	echo "Du har angivit fel lösenord!";
	 }
}
?>