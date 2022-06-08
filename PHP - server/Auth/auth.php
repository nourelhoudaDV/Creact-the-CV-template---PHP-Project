<?php 
	function Auth(){
		session_start();
		if($_SESSION['auth'])
			return true;
		else 
			return false;
	}
 ?>