<?php	
	//log functions
	function getUserData(){
		$arquivo = "../senha.txt";
		$ponteiro = Fopen($arquivo,"c+");
		$texto = Fread($ponteiro, filesize($arquivo));
		$data = explode("-", $texto);
		fclose($ponteiro);
		return $data;
	}

	function isUserValid($username, $password){
		$userData = getUserData();
		if($username == $userData[0] && $password == $userData[1]){
			return true;
		}
		else{
			echo "<script type='text/javascript'>alert('Username or passaword invalid');</script>";
			return false;
		}
	}
	function changeLoggedStatus($status){
		setcookie("isLogged", $status, time()+604800); //7 days logged in
	}

	//register functions
	function setDataForRegister($name, $birthdate, $adress, $phone, $email){
		return PHP_EOL.$name."|".$birthdate."|".$adress."|".$phone."|".$email.";";
	}

	function writeData($name, $birthdate, $adress, $phone, $email){
		$file = "../dados.txt";
		$ponteiro = Fopen($file,"a+");
		$data = setDataForRegister($name, $birthdate, $adress, $phone, $email);
		Fwrite($ponteiro,$data);
		fclose($ponteiro);
	}

	//listing functions
	function getPeople(){
		$arquivo = "../dados.txt";
		$ponteiro = Fopen($arquivo,"c+");
		$texto = Fread($ponteiro, filesize($arquivo));
		$people = explode(";", $texto);
		fclose($ponteiro);
		return $people;
	}

	function getPerson($rawData){
		$personData = explode("|", $rawData);
		return $personData;
	}

	//delete and edit functions
	function getPosition(){
		$position = null;
		if(isset($_POST["delete"])){
			$position = array_keys($_POST["delete"]); 
		}
		if(isset($_POST["edit"])){
			$position = array_keys($_POST["edit"]); 
		}
		return $position[0];
	}

	function rewriteFile($people){
		$arquivo = "../dados.txt";
		$ponteiro = Fopen($arquivo,"w+");
		$text = "";
		for($i = 0; $i < sizeof($people)-1; $i++){
			$text .= $people[$i].";";
		}
		Fwrite($ponteiro,$text);
		fclose($ponteiro);
		header("Location: listing.php");
	}

	//edit info functions
	function editInfo($people, $position, $name, $birthdate, $adress, $phone, $email){
		unset($people[$position]);
		$people[$position] = setDataForRegister($name, $birthdate, $adress, $phone, $email);
		$people[$position] = substr($people[$position], 0, -1);
		rewriteFile($people);
		//find how to warn user that the thing was deleted
	}

	//delete functions
	function deleteIfNeeded($people){
		if(is_array($_POST["delete"])){
			unset($people[getPosition()]);
			array_values($people);
			rewriteFile($people);
			//find how to warn user that the thing was deleted
			header("Location: listing.php");
		}
	}
?>