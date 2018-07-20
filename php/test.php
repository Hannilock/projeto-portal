<html>
	<body>
		<form action="test.php" method="POST">
			botão 1 <input type="submit" name="task[0]" value="submit"/></br>
			botão 2 <input type="submit" name="task[1]" value="submit"/></br>
			botão 3 <input type="submit" name="task[2]" value="submit"/></br>
		</form>
		<?php
			if(isset($_POST['task'])){
				//basicamente, tu vai coloca o nome dos submits como posições de um array
				//ai com esse if tu vai poder saber qual posição foi clickada
				if (is_array($_POST["task"])){ //verifica se é um array
					$botãoClickado = array_keys($_POST["task"]); //pega qual a posição foi clickada e coloca num array com só um valor dentro
					echo "O botão clickado foi o".$botãoClickado[0]."";
				}
			}
		?>
	</body>
</html>