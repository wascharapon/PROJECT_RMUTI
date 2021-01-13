<?php
session_start();

	 $_SESSION["location_lat"]= $_GET['location_lat'];
	 $_SESSION["location_lng"]= $_GET['location_lng'];
	 	 echo "<script>window.location.href = 'http://localhost/project_rmuti/user/index.php';</script>";	 

?>