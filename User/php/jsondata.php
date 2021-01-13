<?php
include('connect.php');
session_start();
header('Content-Type:application/json');
$sql = "SELECT * FROM location_data WHERE No_car = $_SESSION[car]";
$objQuery = mysqli_query($con,$sql);
$resultArray = array();
while($obResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC))
{
	array_push($resultArray,$obResult);
}
echo json_encode($resultArray);
?>
