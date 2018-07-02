<?php 
	require_once "../models/project.php";
	// print_r($_REQUEST);

	if (!preg_match("/^[a-zA-Z][a-zA-Z ]+[a-zA-Z]$/", $_REQUEST['hotel'])){
		echo "Invalid Name";
	}
	
	else{
		// echo "ok";
		$name = $_REQUEST['hotel'];
		$userid = $_SESSION['userid'];
		
			$result = $obj->select(
						"count(*) as cnt",
						"pro_hotel",
						"ho_name='$name'"
			);

			// pre($result);
			// exit;

			if($result[0]['cnt'] > 0){
				echo "User Exist";
			}
			else{
				$obj->insert(
					"pro_hotel",
					"ho_name,ho_userid",
					"'$name','$userid'"
					);

				echo "ok";

				

			}

	}
 ?>