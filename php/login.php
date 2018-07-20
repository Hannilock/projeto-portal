<?php
	require 'functions.php';
	if(isset($_POST['password'])){
		if(isUserValid($_POST['username'],$_POST['password'])){
			changeLoggedStatus(1);
			header("Location: index.php");
		}
		else{
			changeLoggedStatus(0);
		}
	}
?>

<html>
	<head>
		<title>Portal Login</title>
	</head>
	<body>
		<form action="login.php" method="POST">
			Login</br>
			User:<input type="text" name="username"/></br>
			Password:<input type="text" name="password"/></br>
			<input type="submit" name="submit" value="login">
		</form>
	</body>	
</html>