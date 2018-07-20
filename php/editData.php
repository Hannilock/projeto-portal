<?php
	require 'functions.php';
	$people = getPeople();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Listing - Portal</title>
		<style>
			table {
			    font-family: arial, sans-serif;
			    border-collapse: collapse;
			    width: 100%;
			}

			td, th {
			    border: 1px solid #dddddd;
			    text-align: left;
			    padding: 8px;
			}

			tr:nth-child(even) {
			    background-color: #dddddd;
			}
		</style>
	</head>
	<body>
		<form action="editData.php" method="POST">
			<table>
				
				<tr>
					<th>Nome</th>
					<th>Data de Nascimento</th>
				    <th>Endereço</th>
				    <th>Telefone</th>
				    <th>Email</th>
				</tr>
				<?php
					for($i = 0; $i < sizeof($people)-1; $i++){
						echo "<tr>";
						$person = getPerson($people[$i]);
						for($e = 0; $e < sizeof($person); $e++){
							echo "<td>";
							echo $person[$e];
							echo "</td>";
						}
						echo "<td><input type=\"submit\" name=\"edit[".$e."]\" value=\"editar\" /></td>";
						echo "<td><input type=\"submit\" name=\"delete[".$e."]\" value=\"excluir\" /></td>";
						echo "</tr>";
					}
				?>
			</table>
		</form>
	</body>
</html>