<?php 
include('connect.php');
$sql = "INSERT INTO comment (TEXT,NAME) VALUE ('$_POST[text_comment]','$_POST[NAME]')";

if($rs = @mysqli_query($con, $sql))
     echo "<script>window.location.href = 'http://localhost/project_rmuti/user/comment.php';</script>";
 
?>