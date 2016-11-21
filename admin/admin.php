<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type='text/css'>
		.entry {
			border: 1px solid;
			margin: 10px;
			padding: 10px;
		}
	</style>
</head>
<body>
	<h1>Gästbok</h1>
	
<?php 
 	//kollar om varibalen post password finns, finns bara om man klickar submit. väntar på att få ett värde. för att förhindra felmeddelande i början. 
	if (isset($_POST['password'])) {
		if ($_POST['password'] == "maow") { //lösenordet
			$_SESSION['admin'] = TRUE; //om man skriver rätt hoppar den vidare. 
		}
	}
	//om ett värde har stoppats in i logut då ska en sessionvariabel (som finns s länge sessionen finns) ändras och får då värdet false. (utloggad)
	if (isset($_POST['logout'])) {
		$_SESSION['admin'] = FALSE; //loggas ut
	}


	// Inloggad admin
	//om admin är true och varibalen har blivit satt till något. (är true). då ska en logut knapp ploppa fram och så skapas en sökfunktion.
	if (isset($_SESSION['admin']) && $_SESSION['admin'] == TRUE) {
		echo "<form method='post'>
		<input type='submit' name='logout' value='Logga ut'>
			</form>";

		echo "
		<form method='get'>
			<input type='text' name='search'>
			<input type='submit' value='search'>
		</form>";

	// Funktion som Connect to database

	$db = mysqli_connect
	//behövs 4 argument, IP- adressen till databasen, användarnamn, 
	//lösenord, namnet på databaset som du kan välja. 
	('memlisendb-219317.mysql.binero.se', '219317_ul80784', 'mjaumaow123', '219317-memlisendb');


	//om man klickar ta bort
	if (isset($_POST['id'])) {

		$id = $_POST['id'];
		//ta bort från entries, ta bort där där id = id eftersom vi har skickat med id från tidigare. ska ta bort hela. måste skicka förfrågan till databasen.  
		$query = "
		DELETE FROM entries 
		WHERE id = $id
		";

		mysqli_query($db, $query);
	}

	//kollar att search har skett
	if (isset($_GET['search'])) {
	//det man skriver i textrutan, kollar om den fått någonting. 
		$search = $_GET['search'];
	//där medelandet liknar ungefär det man skrivit in i rutan, eller där dne som skrivit liknar det man har skrivit in. om dem är liknande, då kommer dem läggas in i queryn i vilka som ska tas fram. hämtar bara det man sökt på.
		$search_query = "
		WHERE message LIKE '%$search%'
		OR sender LIKE '%$search%'
		";
	}else {
		//sökordet blir ingenting om man inte har klickat.
		$search_query = "";
	}

	// Create query, frågar databasen. select * hämtar/markerar alla kolummener, from vilken table du vill hämta ifrån (inlägg) 4 inlägg; date, meassage, sender, id. sparas som objekt på databasen med 4 saker på den. 
	$query = "SELECT * FROM entries $search_query ORDER BY date DESC";

	// Get result sparat den i db. vilken query vi vill skicka med. sen får man ett returvärde på de man frågat efter. sparar dem i result. 
	//vill lägga till html kod och göra en div för varje. måste göra en loop som går igenom varje inlägg. så länge den har rader kvar så hämtar den tid. då skapar den en div för varje. 
	$result = mysqli_query($db, $query);

	

	// Check result inuti en loop, kallas flera gånger och går igenom flera saker. skapar en array som heter row. börjar på första och hämtar alla värden, innan den hoppar vidare har den skrivit ut dem och sen hoppar till nästa. börjar om. 
	while ($row = mysqli_fetch_assoc($result)) {
		echo 
		"<div class='entry'>
			<p>{$row['date']}</p>
			<p>{$row['message']}</p>
			<p>/{$row['sender']}</p>
			<form method='post'>
				<input type='hidden' name='id' value='{$row['id']}'>
				<input type='submit' value='Ta bort'>
			</form>
		</div>"; //hidden input; den gömmer en input, vi vill skicka vidare id för att se vilket inlägg som ska tas bort.
	}

	// Slut på inloggad admin
}else {
	echo "
		<form method='post'>
			<input type='password' name='password'>
			<input type='submit' value='Logga in'>
		</form>";
}
?>
</body>
</html>