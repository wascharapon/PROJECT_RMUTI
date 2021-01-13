<?php 
include'connect.php';
$id = $_POST['id'];
$No = $_POST['No'];
$Time = $_POST['Time'];
$Fare= $_POST['Fare'];
$Route_TH = $_POST['Route_TH'];
$Route_ENG = $_POST['Route_ENG'];
$Logo = pathinfo(basename($_FILES['Logo']['name']),PATHINFO_EXTENSION);
if(pathinfo(basename($_FILES['Logo']['name']),PATHINFO_EXTENSION)!='')
{
	$new_image_name =$No.".".$Logo;
	$image_path ="../../User/img/car/";
	$upload_path = $image_path.$new_image_name;
	 $succes=move_uploaded_file($_FILES['Logo']['tmp_name'],$upload_path);
 	if($succes == false)
	 {
	 echo "ไม่สามารถ upload รูปภาพได้ ";
	 exit();
	 }
	 else
	 {
		 echo mysqli_errno($con);
	 }
	$sql ="UPDATE data_car
SET Logo ='$new_image_name',No = '$No',Time= '$Time',Fare='$Fare',Route_TH= '$Route_TH',Route_ENG='$Route_ENG'
WHERE ID = '$id'";
}
else 
{
	$sql ="UPDATE data_car
SET No = '$No',Time= '$Time',Fare='$Fare',Route_TH= '$Route_TH',Route_ENG='$Route_ENG'
WHERE ID = '$id'";
}

if($rs = @mysqli_query($con, $sql))
{
	echo "<script>alert('เพิ่มข้อมูลเรียบร้อย');window.location.href = 'http://localhost/project_rmuti/admin/show_datacar.php';</script>";
}
else
{
	echo "<script>alert('แก้ไขข้อมูลไม่สำเร็จ');window.location.href = 'http://localhost/project_rmuti/admin/show_datacar.php;</script>".mysqli_errno($con);
}
?>
