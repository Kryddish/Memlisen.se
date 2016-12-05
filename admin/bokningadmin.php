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
	</form>";





 ?>