<?php 
	require_once "../models/project.php";
	// print_r($_REQUEST);

	if (preg_match("/^[a-zA-Z][a-zA-Z ]+[a-zA-Z]$/", $_REQUEST['uname']) == false){
		echo "Invalid Name";
	}
	else if (preg_match("/^[1-9][0-9]{9}$/", $_REQUEST['umobile']) == false){
		echo "Invalid Mobile No";
	}
	else if (!preg_match("/^([a-zA-Z0-9][a-zA-Z0-9.\_]+[a-zA-Z0-9])@([a-zA-Z0-9][a-zA-Z0-9\_]+[a-zA-Z0-9])\.([a-zA-Z]{2,})(\.[a-zA-Z]{2,})?$/", $_REQUEST['uemail'])){
		echo "invalid email";
	}
	else if(!preg_match("/^[a-zA-Z0-9@\#]{4,12}$/", $_REQUEST['upass'])){
		echo "Invalid Password";
	}
	else if($_REQUEST['upass'] != $_REQUEST['ucpass']){
		echo "Password Missmatch";
	}

	else{
		// echo "ok";
		$name = $_REQUEST['uname'];
		$mobile = $_REQUEST['umobile'];
		$email = $_REQUEST['uemail'];
		$pass = sha1($_REQUEST['upass']);


			$result = $obj->select(
						"count(*) as cnt",
						"pro_users",
						"us_email='$email'"
			);

			// pre($result);
			// exit;

			if($result[0]['cnt'] > 0){
				echo "User Exist";
			}
			else{
				$obj->insert(
					"pro_users",
					"us_name,us_mobile,us_email,us_password",
					"'$name','$mobile','$email','$pass'"
					);

				echo "user added";

				// /*************email**********/
				$to = $email;
				$subject = "HTML email";

				$message = "<a href=''> HELLO </a><b> TEST </b> <input type='text' />";

				// Always set content-type when sending HTML email
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

				// More headers
				$headers .= 'From: <vishal@php-training.in>' . "\r\n";

				$res = mail($to,$subject,$message,$headers);
				var_dump($res);

				/*************email**********/

			}

	}
 ?>