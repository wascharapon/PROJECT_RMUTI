<?php 
include('php/connect.php');
$sql = "INSERT INTO vocabulary (THAI,ENGLISH) VALUE ('$_POST[th]','$_POST[eng]')";

if($rs = @mysqli_query($con, $sql))
     echo "<script>window.location.href = 'http://localhost/project_rmuti/user/input.html';</script>";
 
?>