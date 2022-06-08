<?php 
	// for get the infos from use using the special charcarters function to checking out the incoming data from th user example :
	// letter will using functions for makes the works more easy.	
	function register(){
		$fullname = htmlspecialchars($_GET['name']);
		$age = htmlspecialchars($_GET['name']);
		$address = htmlspecialchars($_GET['name']);
		$phoneN = htmlspecialchars($_GET['name']);
		$gmail = htmlspecialchars($_GET['name']);
		$password = htmlspecialchars($_GET['name']);
		if(isset($fullname) && isset($age) && isset($address) && isset($phoneN) && isset($gmail) && isset($password)){
		// logup the new users 
			$query = "INSERT INTO user(fullName , age, address, phone_number, email, password) values($fullname , $age, $address, $phoneN , $gmail , $password)";

				try {
					if(mysqli_query($db , $query))
						return true;

				} catch (Exception $e) {
					return $e; // store and shoe the error string in the login page 
				}
		}
	}

	function login(){
		$gmail = htmlspecialchars($_GET['name']);
		$password = htmlspecialchars($_GET['name']);
		if(isset($gmail) && isset($password)){
			$query = "select * from user where email = '$gmail' and password = '$password'";
			$res = mysqli_fetch_assoc($query);
			// remember that you must show the error type if that is avialble
			if(count($res)==1){
				while($row = $res){
					echo($row['fullName']."isconnected!");
					// authentication active
				}
			}
		}
	}

	switch ($_GET['btn']) {
		case 'login':
			login();
			break;
		case 'register':
			register();
		default:
			header('location : /path')
			break;
	}
?>