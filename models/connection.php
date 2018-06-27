<?php 
	require_once ('parameter.php');
	abstract class connection implements parameter{
		
		var $conn = "";
		function __construct(){
			// echo "start";
			$this->conn = new mysqli(
				parameter::HOST,
				parameter::USER,
				parameter::PASSWORD,
				parameter::DATABASE
			);
			// pre($this->conn);

		}

		function __destruct(){
			// echo "end";
			$this->conn->close();
		}
	}
 ?>
