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

	<form method='post'>
		<textarea name='message'></textarea>
		<input type='text' name='sender'>
		<input type='submit' value='Skicka inlägget'>
	</form>
	<?php 
		echo $_POST['id'];
		// Connect to database
		$db = mysqli_connect('memlisendb-219317.mysql.binero.se', '219317_ul80784', 'mjaumaow123', '219317-memlisendb');

		if (isset($_POST['message']) && isset($_POST['sender'])) {

			$sender = $_POST['sender'];
			$message = $_POST['message'];
			//sätter in infon i tabellen
			$query = "INSERT INTO entries (date, sender, message) VALUES (NOW(), '$sender', '$message')";

			mysqli_query($db, $query);

			echo "Skickat!";
																}	

			// Create query den ska ladda alla existerande inlägg. hämtar alla kolummer men den söker inte.
			$query = 'SELECT * FROM entries ORDER BY date DESC';

			// Get result
			$result = mysqli_query($db, $query);

			// Check result
			while ($row = mysqli_fetch_assoc($result)) {
				echo 
				"<div class='entry'>
					<p>{$row['date']}</p>
					<p>{$row['message']}</p>
					<p>/{$row['sender']}</p>
				</div>";
			}
	 ?>
</body>
</html>