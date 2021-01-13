<?php 
include'connect.php';
$sql ="SELECT * FROM location_data";
$rs = @mysqli_query($con, $sql);

$sql_a ="SELECT * FROM location_data GROUP BY No_car";
$rs_a = @mysqli_query($con, $sql_a);
?>
