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
			echo "Username or passaword invalid.";
			return false;
		}
	}
	function changeLoggedStatus($status){
		setcookie("isLogged", $status, time()+604800); //7 days logged in
	}

	//register functions
	function writeData($name, $birthdate, $adress, $phone, $email){
		$file = "../dados.txt";
		$ponteiro = Fopen($file,"a+");
		$data = PHP_EOL.$name."|".$birthdate."|".$adress."|".$phone."|".$email.";";
		Fwrite($ponteiro,$data);
		fclose($ponteiro);
	}

	//listing functions

?>