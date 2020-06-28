<?php 
session_start();
$con=mysqli_connect("127.0.0.1","root","","supervise");
//$ch ="SELECT * FROM `sreg` WHERE id='".$_POST['sid']."'";
//$name=$_POST['email'];
$query ="SELECT * FROM `sreg` WHERE id='".$_POST['uid']."' AND pass='".$_POST['pass']."'";
$result=mysqli_query($con,$query);
if (mysqli_fetch_assoc($result)) {
  $_SESSION['student']=$_POST['uid'];
  header("Location:main.php"); 
}
else{
?>
<html>
	<header>
		<title>PIONEER INTERNATIONAL UNIVERSITY</title>
		<link rel="stylesheet" href="bootstrap.css">
		 <link rel = "icon" href = "img/logo.png" type = "image/x-icon"> 
	</header>
	<body>
		<div class="container">
			<div class="jumbotron">
				Wrong Username and Password <a href="index.php">back</a>
			</div>
		</div>
	</body>
</html>

<?php }
 ?>
