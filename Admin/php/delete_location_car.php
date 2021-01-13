<?php 
include'connect.php';
$car= $_POST['car'];

	$sql="DELETE FROM location_data WHERE No_car = '$car'";	
		 if($query = mysqli_query($con,$sql))
		 {
			 echo "<script>alert('ลบข้อมูลเรียบร้อย');window.location.href = 'http://localhost/project_rmuti/admin/show_location.php';</script>";
		 }
	
?>