<?php
	require 'functions.php';
	require '../css/fonts.php';
	include 'header.php';
	include 'footer.php';
	$person = null;
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Edit person's info - Portal</title>
		<link rel="stylesheet" href="../css/main_style.css"> 
	</head>
	<body>

		<div class="holder">
			<?php 
				if(isset($_POST["delete"]))
					deleteIfNeeded(getPeople());
			?>
		</div>
	</body>
</html>