<?php 
include'connect.php';
$sql ="SELECT * FROM car_route";
$rs = @mysqli_query($con, $sql);
?>
