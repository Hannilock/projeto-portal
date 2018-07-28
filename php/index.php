<?php
	require 'functions.php';
	require '../css/fonts.php';
	include 'header.php';
	include 'footer.php';
	if(!isset($_COOKIE['isLogged']) || ($_COOKIE['isLogged'] != "1")){
		header("Location: login.php");
	}
	if(isset($_POST['logout'])){
		changeLoggedStatus(0);
		header('Location: login.php');
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Welcome! - Portal</title>
		<link rel="stylesheet" href="../css/main_style.css"> 
		<link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet"> 
	</head>
	<body>
		<div class="holder" id="index">
			<h3>Menu:</h3>
			<form action="index.php" method="POST">
				<input class="default-button" type="submit" name="options" value="add new person"/></br>
				<input class="default-button" type="submit" name="options" value="list people"/></br>
				<input class="default-button" type="submit" name="options" value="log out"/></br>
			</form>
		</div>
		<?php
			if(isset($_POST['options'])){
				$options = $_POST['options'];
				switch($options){
					case "add new person":
						header('Location: register.php');
						break;
					case "list people":
						header('Location: listing.php');
						break;
					case "log out":
						changeLoggedStatus(0);
						header('Location: login.php');
						break;
				}
			}
		?>
	</body>
</html>