<?php
	require 'functions.php';
	require '../css/fonts.php';
	include 'header.php';
	include 'footer.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Register Person - Portal</title>
		 <link rel="stylesheet" href="../css/main_style.css"> 
		 <link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet"> 
	</head>
	<body>
		<div class="holder" id="register">
			<h3>Register a person</h3>
			<form action="register.php" method="POST">
				Nome: <input type="text" name="name"/></br>
				Data de Nascimento: <input type="text" name="birthdate"/></br>
				Endereço:<input type="text" name="adress"/></br>
				Telefone:<input type="text" name="phone"/></br>
				Email:<input type="text" name="email"/></br>
				<input class="default-button" type="submit" name="submit" value="registrar">
			</form>
		</div>
		
		<?php
			if(isset($_POST['submit'])){
				writeData($_POST['name'],$_POST["birthdate"],$_POST["adress"],$_POST["phone"],$_POST["email"]);
				header("Location: index.php");
			}
		?>
	</body>
</html>