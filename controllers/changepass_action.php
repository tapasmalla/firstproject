<?php 
	require_once '..//models/project.php';
	// print_r($_REQUEST);

	if(!preg_match("/^[a-zA-Z0-9]{4,12}$/", $_REQUEST['cpass'])){
		echo "Invalid Current Password";
	}

	else if(!preg_match("/^[a-zA-Z0-9]{4,12}$/", $_REQUEST['npass'])){
		echo "Invalid New Password";
	}

	else if($_REQUEST['npass'] != $_REQUEST['cnpass']){
		echo "New Password and Confirm Password should be same";
	}

	else if($_REQUEST['cpass'] == $_REQUEST['npass']){
		echo "Current password should be diff from new pass";
	}

	else{

		$email = $_SESSION['useremail'];
		// echo $email;
		$newpass = sha1($_REQUEST['npass']);
		// echo $newpass;

		$result = $obj->select(
			"us_password",
			"pro_users",
			"us_email='$email'"
		);
		// pre($result);
		$upass = $result[0]['us_password'];
		// echo $upass;

		if($upass == sha1($_REQUEST['cpass'])){
			$result = $obj->update(
				"pro_users",
				"us_password='$newpass'",
				"us_email='$email'"
			);
			echo "Your password successfuly changed";
		}
		else{
			
			echo "Entered Password Is Invalid";
			
		}
	}
 ?>