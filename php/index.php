<?php
	require 'functions.php';
	if(!isset($_COOKIE['isLogged']) || ($_COOKIE['isLogged'] != "1")){
		header("Location: login.php");
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Portal Main Menu</title>
	</head>
	<body>
		<div class="optionsHolder">
		<div>Menu:</div>
		<form action="index.php" method="POST">
			<input type="submit" name="options" value="add new person"/></br>
			<input type="submit" name="options" value="see all people"/></br>
			<input type="submit" name="options" value="edit people"/></br>
			<input type="submit" name="options" value="log out"/></br>
		</form>
		</div>
		<?php
			if(isset($_POST['options'])){
				$options = $_POST['options'];
				switch($options){
					case "add new person":
						header('Location: register.php');
						break;
					case "see all people":
						header('Location: listing.php');
						break;
					case "edit people":
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