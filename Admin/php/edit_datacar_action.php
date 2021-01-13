<?php 
include'connect.php';
$id = $_GET['id'];
$sql ="SELECT * FROM data_car WHERE ID='$id'";
$rs = @mysqli_query($con, $sql);
?>
