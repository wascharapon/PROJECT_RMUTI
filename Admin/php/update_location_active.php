<?php 
include'connect.php';
$id = $_POST['id'];
$Name_TH = $_POST['Name_TH'];
$Name_ENG = $_POST['Name_ENG'];
$No_car= $_POST['No_car'];
$Lat = $_POST['Lat'];
$Lng = $_POST['Lng'];
$sql ="UPDATE location_data
SET No_car = '$No_car',Name_TH = '$Name_TH',Name_ENG = '$Name_ENG',Lat = '$Lat',Lng = '$Lng'
WHERE ID='$id';";


if($rs = @mysqli_query($con, $sql))
{
	echo "<script>alert('เพิ่มข้อมูลเรียบร้อย');window.location.href = 'http://localhost/project_rmuti/admin/show_location.php';</script>";
}
else
{
	echo "<script>alert('แก้ไขข้อมูลไม่สำเร็จ');window.location.href = 'http://localhost/project_rmuti/admin/show_location.php;</script>".mysqli_errno($con);
}
?>
