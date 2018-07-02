<?php 
	require_once "../models/project.php";
	// print_r($_REQUEST);
	// exit;
	if(empty($_REQUEST['hotelid'])){
		echo "Psease Select Hotel.";
	}
	else if (!preg_match("/^[a-zA-Z][a-zA-Z ]+[a-zA-Z]$/", $_REQUEST['branch'])){
		echo "Invalid Name";
	}
	
	else{
		// echo "ok";
		$name = $_REQUEST['branch'];
		$hotelid = $_REQUEST['hotelid'];
		// echo $hotelid;
		// exit;
		
			$result = $obj->select(
						"count(*) as cnt",
						"pro_hotel_branch",
						"br_name='$name'"
			);

			// pre($result);
			// exit;

			if($result[0]['cnt'] > 0){
				echo "User Exist";
			}
			else{
				$obj->insert(
					"pro_hotel_branch",
					"br_name,br_hotel_id",
					"'$name','$hotelid'"
					);

				echo "ok";

				

			}

	}
 ?>