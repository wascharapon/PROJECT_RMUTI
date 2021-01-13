<?php 
include'connect.php';
$n=$_GET['count'];
$No=$_GET['No'];
for($i=0;$i<$n;$i++)
{
	$Lat = $_GET['Lat'.$i];
	$Lng = $_GET['Lng'.$i];
	$sql ="INSERT INTO car_route (Order_route, No_car, Lat, Lng)VALUES('$i','$No','$Lat','$Lng');";
	$query = mysqli_query($con,$sql);
}
	if($query) {
	$sql="UPDATE data_car SET Route_Confirm ='Action' WHERE No = '$No'";	
		 if($query = mysqli_query($con,$sql))
		 {
			 echo "<script>alert('เพื่มข้อมูลเรียบร้อย');window.location.href = 'http://localhost/project_rmuti/admin/add_route.php';</script>";
		 }
	}

?>