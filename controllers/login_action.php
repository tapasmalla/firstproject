<?php 
	require_once '..//models/project.php';
	// print_r($_REQUEST);

	if(!preg_match("/^([a-zA-Z0-9][a-zA-Z0-9_\.]+[a-zA-Z0-9])@([a-zA-Z0-9][a-zA-Z0-9\_]+[a-zA-Z0-9]).([a-zA-Z]{2,})(\.[a-zA-Z]{2,})?$/", $_REQUEST['uemail'])){
		echo "Invalid Email";
	}
	else if(!preg_match("/^[a-zA-Z0-9]{4,12}$/", $_REQUEST['upass'])){
		echo "Invalid Password";
	}
	else{
		

		$email = $_REQUEST['uemail'];
		$pass = sha1($_REQUEST['upass']);

		$result = $obj->select("us_password,us_status","pro_users","us_email='$email'");
		pre($result);
		 if($result == 0){
		 	echo "Invalid Email";
		 }
		 else if($result[0]['us_password'] == $pass){
		 	if($result[0]['us_status'] == 0){
		 		echo "Please Verify Your Email";
		 	}
		 	else{
		 		echo "ok";
		 	}
		 	

		 }
		 else{
		 	echo "Invalid Password";
		 }

		
		// echo "ok";
	}
	
 ?>