<?php
	require 'functions.php';
	require '../css/fonts.php';
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
		<title>Login - Portal</title>
		 <link rel="stylesheet" href="../css/main_style.css"> 
		 <link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet"> 
	</head>
	<body>
		<div class="holder" id="login">
			<form action="login.php" method="POST">
				<h3 id="logintag">Login</h3>
				<p>User:</p><input type="text" name="username"/></br>
				<p>Password:</p><input type="text" name="password"/></br>
				<input class="default-button" id="login" type="submit" name="submit" value="login">
			</form>
		</div>
	</body>	
</html>