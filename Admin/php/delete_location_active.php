<?php 
include'connect.php';
$ID= $_GET['id'];

	$sql="DELETE FROM location_data  WHERE ID = '$ID'";	
		 if($query = mysqli_query($con,$sql))
		 {
			 echo "<script>alert('ลบข้อมูลเรียบร้อย');window.location.href = 'http://localhost/project_rmuti/admin/show_location.php';</script>";
		 }
	
?>