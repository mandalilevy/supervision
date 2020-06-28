<?php 
session_start();
$con=mysqli_connect("127.0.0.1","root","","supervise");
$query ="SELECT * FROM `csuper` WHERE username='".$_POST['uid']."' AND pass='".$_POST['pass']."'";
$result=mysqli_query($con,$query);
if (mysqli_fetch_assoc($result)) {
 $_SESSION['supervise']=$_POST['uid'];
  header("Location:slog.php"); 
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
				Wrong Username and Password <a href="supervisor.php">back</a>
			</div>
		</div>
	</body>
</html>

<?php }
 ?>
