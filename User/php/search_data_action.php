<?php 
include('connect.php');
$sql = "SELECT * FROM location_data WHERE ID = '$_GET[ID]'";
	if($rs = @mysqli_query($con, $sql))
		    {
					if($bn = mysqli_fetch_array($rs))
					{
				echo $bn['No_car'];
					}
			}
 
?>