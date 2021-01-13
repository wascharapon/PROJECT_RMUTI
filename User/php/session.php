<?php
session_start();
$_SESSION["car"] = $_GET['car'];
	 echo "<script>window.location.href = 'http://localhost/project_rmuti/user/infocar.php?car=$_GET[car]';</script>";
 ?>