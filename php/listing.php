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
					echo "</tr>";
				}
			?>
		</table>
	</body>
</html>