<?php 
include'connect.php';
$id = $_GET['id'];
$sql ="SELECT * FROM location_data WHERE ID='$id'";
$rs = @mysqli_query($con, $sql);
?>
