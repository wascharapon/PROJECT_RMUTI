<?php
session_start();
if($_SESSION["Language"]== NULL)
{
	$_SESSION["Language"]='TH';
}
else if ($_SESSION["Language"]=='TH')
{
	$_SESSION["Language"]='ENG';
}
else {
$_SESSION["Language"]='TH';

}

	 echo "<script>window.location.href='http://localhost/project_rmuti/user/php/location.php';</script>";
 ?>