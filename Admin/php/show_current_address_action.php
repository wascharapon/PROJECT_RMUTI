<?php 
include'connect.php';
$sql ="SELECT * FROM current_address";
$rs = @mysqli_query($con, $sql);
?>
