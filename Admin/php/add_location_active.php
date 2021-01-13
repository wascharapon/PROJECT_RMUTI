<?php 
include('connect.php');
$Name_TH = $_POST['Name_TH'];
$Name_ENG = $_POST['Name_ENG'];
$No_car= $_POST['No_car'];
$Lat = $_POST['Lat'];
$Lng = $_POST['Lng'];
 
$sql ="INSERT INTO location_data (Name_TH,Name_ENG,No_car,Lat,Lng) VALUES('$Name_TH','$Name_ENG','$No_car','$Lat','$Lng')";

$query = mysqli_query($con,$sql);
	if($query) {
echo "<script>alert('เพื่มข้อมูลเรียบร้อย');window.location.href = 'http://localhost/project_rmuti/admin/add_location.php';</script>";
	}
?>