<?php
	require 'functions.php';
	require '../css/fonts.php';
	include 'header.php';
	include 'footer.php';
	$person = null;
	if(isset($_POST["delete"])){
		deleteIfNeeded(getPeople());
	}
	if(isset($_POST["edit"])){
		$person = getPerson(getPeople()[getPosition()]);
		$position = getPosition();
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Edit person's info - Portal</title>
		<link rel="stylesheet" href="../css/main_style.css"> 
	</head>
	<body>
		<div class="holder" id="edit">
			<h3>Person Info edition</h3> 
			<h2>Editing: <?php echo $person[0] ?></h2>
			<form action="listing.php" method="POST">
				Nome: <input type="text" name="name" value="<?php echo $person[0] ?>"/></br>
				Data de Nascimento: <input type="text" name="birthdate" value="<?php echo $person[1] ?>"/></br>
				Endereço:<input type="text" name="adress" value="<?php echo $person[2] ?>"/></br>
				Telefone:<input type="text" name="phone" value="<?php echo $person[3] ?>"/></br>
				Email:<input type="text" name="email" value="<?php echo $person[4] ?>"/></br>
				<input type="hidden" name="position" value="<?php echo $position ?>"/>
				<input class="default-button" type="submit" name="sub" value="enviar edição">
			</form>
		</div>
	</body>
</html>