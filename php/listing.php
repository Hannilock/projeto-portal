<?php
	require 'functions.php';
	require '../css/fonts.php';
	include 'header.php';
	include 'footer.php';
	if(isset($_POST["sub"])){
		editInfo(getPeople(), $_POST['position'],$_POST['name'],$_POST["birthdate"],$_POST["adress"],$_POST["phone"],$_POST["email"]);
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Listing - Portal</title>
		<link rel="stylesheet" href="../css/main_style.css">
		<style>
			body{
				padding-top: 80px;
			}
		</style> 
	</head>
	<body>
		<form action="editInfo.php" method="POST">
			<table>
				
				<tr>
					<th>Nome</th>
					<th>Data de Nascimento</th>
				    <th>Endereço</th>
				    <th>Telefone</th>
				    <th>Email</th>
				</tr>
				<?php
					$sizePeople = getPeopleSize();
					if($sizePeople){
						$people = getPeople();
						for($i = 0; $i < sizeof($people)-1; $i++){
							echo "<tr>";
							$person = getPerson($people[$i]);
							for($e = 0; $e < sizeof($person); $e++){
								echo "<td>";
								echo $person[$e];
								echo "</td>";
							}
							echo "<td><input class=\"default-button\" type=\"submit\" name=\"edit[".$i."]\" value=\"editar\" /></td>";
							echo "<td><input class=\"default-button\" type=\"submit\" name=\"delete[".$i."]\" value=\"excluir\" /></td>";
							echo "</tr>";
						}	
					}
					else{
						echo "<tr>";
						echo"<td style=\"text-align:center\" colspan=\"5\"> there ain't no people registered :( </td>";
						echo "<tr>";
					}
					echo "</table>";
					echo "</form>";
				?>
	</body>
</html>