<?php
	require 'functions.php';
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
	</head>
	<body>
		<div class="registerholder">
			Edit the person
			<?php echo $person[0] ?>
			<form action="listing.php" method="POST">
				Nome: <input type="text" name="name" value="<?php echo $person[0] ?>"/></br>
				Data de Nascimento: <input type="text" name="birthdate" value="<?php echo $person[1] ?>"/></br>
				Endereço:<input type="text" name="adress" value="<?php echo $person[2] ?>"/></br>
				Telefone:<input type="text" name="phone" value="<?php echo $person[3] ?>"/></br>
				Email:<input type="text" name="email" value="<?php echo $person[4] ?>"/></br>
				<input type="hidden" name="position" value="<?php echo $position ?>"/>
				<input type="submit" name="sub" value="enviar edição">
			</form>
		</div>
	</body>
</html>