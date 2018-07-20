<?php
	require 'functions.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Register Person - Portal</title>
	</head>
	<body>
		<div class="registerholder">
			Register a person
			<form action="register.php" method="POST">
				Nome: <input type="text" name="name"/></br>
				Data de Nascimento: <input type="text" name="birthdate"/></br>
				Endereço:<input type="text" name="adress"/></br>
				Telefone:<input type="text" name="phone"/></br>
				Email:<input type="text" name="email"/></br>
				<input type="submit" name="submit" value="registrar">
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