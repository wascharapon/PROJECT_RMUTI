<?php 
session_start();
unset($_SESSION['id']);
unset($_SESSION['status']);
session_destroy();
		echo "<script>alert('ออกจากระบบ');window.location.href = 'http://localhost/project_rmuti/admin/login/login.php';</script>";
?>