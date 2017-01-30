<?php 

session_start();

echo "<link rel='stylesheet' href='css/admin.css'>"; 

if (isset($_POST['password'])) {
	$username =  $_POST['username'];
	$password = $_POST['password'];

	if ($username == 'admin' && $password == 'maow') {
		$_SESSION['loggedin'] = true;

	}
}

if (isset($_POST['logout'])) {
	$_SESSION['loggedin'] = false;
}

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
	echo "
	<h2>Välkommen admin!</h2>
	<form method='post'>
	<input type='submit' name='logout' value='Logout'>
	</form>
	
      <a href='?page=home'>Startsida</a>
      <a href='?page=about'>Om mig</a>        
      <a href='?page=resume'>CV</a>
      <a href='?page=portfolio'>Portfolio</a>




				";
  $query = "
  SELECT * 
  FROM messages
  ";

    $result = mysqli_query($database, $query);

    while ($row = mysqli_fetch_assoc($result)) {
    	echo "
    	<div class='message'>
    	<h4>Meddelanden från hemsidan:</h4><br>
    	<label>Från:<p>{$row['avsändare']}</p></label><p>epost:</p>
    	<p>{$row['epost']}</p><br>
    	<p>Telefon:</p><p>{$row['telefonnummer']}</p><br>
    	<p>meddelande:</p><p>{$row['meddelande']}</p>
    	</div>



    	";
    }
}

else {
	echo "
	<form id='login-form' method='post'>
	<label>Användarnamn:</label><input type='text' name='username'>
	<label>Lösenord:</label><input type='password' name='password' >
	<label></label><input type='submit' value='Login'>
	</form>



	 ";

	 if (isset($_POST['password']) && $_SESSION['loggedin'] == false) {
	 	echo "Du har angivit fel lösenord!";
	 }
}
?>