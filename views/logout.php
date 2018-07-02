<?php 
	session_start();
	session_regenerate_id(true);
	unset($_SESSION['userid']);
	unset($_SESSION['username']);
	unset($_SESSION['usermobile']);
	unset($_SESSION['useremail']);
	unset($_SESSION['userstatus']);

	session_destroy();
	header("location:login.php")
 ?>