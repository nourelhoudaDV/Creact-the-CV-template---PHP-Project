<?php 
	function fetch($name , $method='GET'){
		$result = '';
		try {
			$result = $_SERVER["$name"];
			return $result;
		} catch (Exception $e) {
			return $e;
		}	
	}

	function insert($table , $value){ // values : "mohammed janati 18 massira";
		$next = explode(" " , $value);
		$res = '';
		for($i = 0; $i<count($next) ; $i++){
			if($i+1 != count($next))
				$res .= $next[$i].",";
			else 
				$res .= $next[$i];
		}
		$quer = "insert into $table value($res)";
		if(mysqli_query($db , $query))
			return true;
		else 
			return false;
		return false;   
	}

	function edite($type , $condition = "" , $table = ""){
		$query = $type."$condition";
	}

?>