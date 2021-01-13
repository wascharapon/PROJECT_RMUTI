<?php 
include('connect.php');
$No = $_POST['No'];
$Time = $_POST['Time'];
$Fare= $_POST['Fare'];
$Route_TH = $_POST['Route_TH'];
$Route_ENG = $_POST['Route_ENG'];
//upload image
$Logo = pathinfo(basename($_FILES['Logo']['name']),PATHINFO_EXTENSION);
$new_image_name =$No.".".$Logo;
$image_path ="../../User/img/car/";
$upload_path = $image_path.$new_image_name;

 $chek=true;
 $sql="SELECT No FROM data_car ORDER BY No ASC";
	$query = mysqli_query($con,$sql);
		while($bn = mysqli_fetch_array($query))
					{
						if($No==$bn['No'])
						{
							 $chek=false;
							 
						}
					}
 
 
if($chek==true)
{
	 $succes=move_uploaded_file($_FILES['Logo']['tmp_name'],$upload_path);
 if($succes == false)
 {
	 echo "ไม่สามารถ upload รูปภาพได้ ";
	 exit();
 }
$sql ="INSERT INTO data_car (No,Route_TH,Route_ENG,Time,Fare,Logo,Route_Confirm) VALUES ('$No','$Route_TH','$Route_ENG','$Time','$Fare','$new_image_name','No');";

$query = mysqli_query($con,$sql);
	if($query) {
echo "<script>alert('เพื่มข้อมูลเรียบร้อย');window.location.href = 'http://localhost/project_rmuti/admin/add_route.php';</script>";
	}
	else
	{
		echo "เกิดข้อผิดพลาดในการเพิ่มข้อมูล".mysqli_errno($con);
	}
}
else
{
	echo "<script>alert('มีข้อมูลในระบบแล้ว');window.location.href = 'http://localhost/project_rmuti/admin/add_datacar.php';</script>";
}

?>