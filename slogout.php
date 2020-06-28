<?php 
session_start();
if (isset($_GET['logout'])) {
	session_destroy();
	header("Location:supervisor.php");
}
else{
header("Location:supervisor.php");
}
 ?>
