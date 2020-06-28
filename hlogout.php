<?php 
session_start();
if (isset($_GET['logout'])) {
	session_destroy();
	header("Location:hod.php");
}
else{
header("Location:hod.php");
}
 ?>
