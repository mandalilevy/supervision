<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PIONEER INTERNATIONAL UNIVERSITY</title>
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
 <link rel="stylesheet" href="bootstrap.css">
 <link rel="stylesheet" href="bootstrap.min.css">
 <link rel="stylesheet" href="bootstrap-reboot.min.css">
 <link rel="stylesheet" href="bootstrap-reboot.css">

  <link rel = "icon" href = "img/logo.png" type = "image/x-icon"> 
</head>
<body>
	<div>
 <nav class="navbar navbar-expand-lg navbar-light" style="background-color: gold">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    
<ul class="navbar-nav  mt-lg-0 mr-auto">
	<li class="nav-item">
        	<?php 
	session_start();
if (isset($_SESSION['student'])) {
                  echo '<a style="color: black; font-family:Verdana; font-weight:bolder;" class="nav-link">Hey Welcome: '.$_SESSION['student'].'</a>';
                    }


 ?>
      </li>
</ul>



    <ul class="navbar-nav  mt-lg-0 mx-auto">
     <li class="nav-item">
        <a style="color: blue; font-family:Verdana; cursor: pointer; font-weight: bolder;" class="nav-link" data-toggle="modal" data-target="#exampleModal">Register for Attachment</a>
      </li>
       <li class="nav-item">
        <a style="color: blue; font-family:Verdana; cursor: pointer; font-weight: bolder;" class="nav-link" data-toggle="modal" data-target="#reset">Fill Log Book</a>
      </li>

    </ul>
 <ul class="navbar-nav  mt-lg-0 ml-auto">
 	<li class="nav-item">
        <a style="color: black; font-family:Verdana; cursor: pointer; font-weight: bolder;text-transform: uppercase;" class="nav-link" data-toggle="modal" data-target="#update">Reset Password</a>
      </li>
 	<li class="nav-item">
   <?php 
echo '<a class="nav-link ml-auto" style="color: black; font-weight:bolder; font-family:Verdana"  href="logout.php?logout">LOG OUT</a>';
  ?>
   </li>
 </ul>
 </div> 
  </div>
</nav>
</div>
<div class="container" style="padding-top: 10px">
<div class="container jumbotron">
	
	<div class="container">
<p >You are currently logged in to the Pioneer International University Supervision Management System. <br> Register for an Attachment before you start filling the log book. <br>
 <b> <u>NOTE THE FOLLWING:</u>  <br>  1. Make Sure You fill the correct and accurate details concerning the Company, Organization or Instititution you are going for industrial attachment. <br>
 2. Once you have registered for the attachment, you will be in that organization you have registered till the end of your attachment. <br>
 3. Make sure you log in to this site to fill your log book of all the activities you do everyday. </b></b></p>
</div>
</div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="card card-outline-secondary">
                        <div class="card-header bg-warning">
                            <h3 class="mb-0">ATTACHMENT REGISTRATION</h3>
                        </div>
                        <div class="card-body">
                            <form class="form" method="post" action="">
                                <div class="form-group">

                                   <?php 
                                 //  session_start();
if (isset($_SESSION['student'])) {

$con=mysqli_connect("127.0.0.1","root","","supervise");
$query = "SELECT * FROM sreg WHERE id='".$_SESSION['student']."'";
$query_run=mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($query_run)) {?>

<label style="font-weight: bold;">Your ID</label>
                                    <input type="text" class="form-control" name="num" value="<?php echo $row['id'] ?>" readonly="readonly">
                                </div>
                                <div class="form-group">
                                    <label style="font-weight: bold;">Your Name</label>
                                    <input type="text" class="form-control"  name="name" value="<?php echo $row['name'] ?>" readonly="readonly">
                                </div>
                                <div class="form-group">
                                    <label style="font-weight: bold;">Your Contacts</label>
                                    <input type="text" class="form-control" name="cont" value="<?php echo $row['cont'] ?>" readonly="readonly">

                                </div>
                                <div class="form-group">
                                    <label style="font-weight: bold;">Company/Organization/Institution of Attachment</label>
                                    <input type="text" class="form-control" name="comp" required="">
                                </div>
                                 <div class="form-group">
                                    <label style="font-weight: bold;">Location</label>
                                    <input type="text" class="form-control" name="Location" required="">
                                </div>
                                 <div class="form-group">
                                    <label style="font-weight: bold;">Start Date</label>
                                    <input type="date" class="form-control" name="sdate" required="">
                                </div>
                                 <div class="form-group">
                                    <label style="font-weight: bold;">End Date</label>
                                    <input type="date" class="form-control" name="edate" required="">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-lg float-right" name="add">Submit</button>
                                </div>
                            </form>

<?php 
}
}
 ?>



 										


                                    
                        </div>
                    </div>
      </div>
      
    </div>
  </div>
</div>


<?php
if (isset($_POST['add'])) {
$con=mysqli_connect("127.0.0.1","root","","supervise");
$query ="SELECT * FROM `ar` WHERE id='".$_POST['num']."'";
$result=mysqli_query($con,$query);
if (mysqli_fetch_assoc($result)) {
  echo "<script type='text/javascript'>alert('ALREADY REGISTERED!!');</script>";
}
else{
$sql="INSERT INTO `ar`(`id`, `name`, `cont`, `comp`, `loc`, `sdate`, `edate`)VALUES('".$_POST['num']."','".$_POST['name']."','".$_POST['cont']."','".$_POST['comp']."','".$_POST['Location']."','".$_POST['sdate']."','".$_POST['edate']."')";
if(mysqli_query($con, $sql)){
}
}
}
 ?>
<div class="modal fade" id="reset" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="card card-outline-secondary">
                        <div class="card-header bg-warning">
                            <h3 class="mb-0">ATTACHMENT LOG BOOK</h3>
                        </div>
                        <div class="card-body">
                            <form class="form" method="post" action="">
                                <div class="form-group">

                                   <?php 
                                 //  session_start();
if (isset($_SESSION['student'])) {
$con=mysqli_connect("127.0.0.1","root","","supervise");
//$con=mysqli_connect("127.0.0.1","root","","supervise");
$qq ="SELECT * FROM `ar` WHERE id='".$_SESSION['student']."'";
$result=mysqli_query($con,$qq);
if (mysqli_fetch_assoc($result)) {
$query = "SELECT * FROM ar WHERE id='".$_SESSION['student']."'";
$query_run=mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($query_run)) {?>

<label style="font-weight: bold;">Your ID</label>
                                    <input type="text" class="form-control" name="num" value="<?php echo $row['id'] ?>" readonly="readonly">
                                </div>
                                <div class="form-group">
                                    <label style="font-weight: bold;">Your Name</label>
                                    <input type="text" class="form-control"  name="name" value="<?php echo $row['name'] ?>" readonly="readonly">
                                </div>
                                 <div class="form-group">
                                    <label style="font-weight: bold;">Company Attached</label>
                                    <input type="text" class="form-control"  name="comp" value="<?php echo $row['comp'] ?>" readonly="readonly">
                                </div>
                                 <div class="form-group">
                                    <label style="font-weight: bold;">Date</label>
                                    <input type="date" class="form-control" name="date" value="<?php echo date('Y-m-d'); ?>"readonly="readonly">
                                </div>
                                <div class="form-group">
                                    <label style="font-weight: bold;">Duties Undertaken</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" required="" maxlength="200" name="duty"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-lg float-right" name="sub">Submit</button>
                                </div>
                            </form>

<?php 
}
}

}
 ?>



 										


                                    
                        </div>
                    </div>
      </div>
      
    </div>
  </div>
</div>
<?php
if (isset($_POST['sub'])) {
$con=mysqli_connect("127.0.0.1","root","","supervise");
$query ="SELECT * FROM `book` WHERE num='".$_POST['num']."' AND date='".$_POST['date']."'";
$result=mysqli_query($con,$query);
if (mysqli_fetch_assoc($result)) {
  echo "<script type='text/javascript'>alert('YOU HAVE ALREADY FILLED THE LOG BOOK  TODAY!!');</script>";
}
else{
$sql="INSERT INTO `book`(`num`, `name`, `comp`, `date`, `duty`) VALUES('".$_POST['num']."','".$_POST['name']."','".$_POST['comp']."','".$_POST['date']."','".$_POST['duty']."')";
if(mysqli_query($con, $sql)){
}
}
}
 ?>











<div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="card card-outline-secondary">
                        <div class="card-header bg-warning">
                            <h3 class="mb-0">UPDATE PASSWORD</h3>
                        </div>
                        <div class="card-body">
                            <form class="form" method="post" action="">
                                <div class="form-group">

                             <label style="font-weight: bold;">New Password</label>
                                    <input type="text" class="form-control" name="pp" >
                                </div>
                           
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-lg float-right" name="upp">Update</button>
                                </div>
                            </form>



 								
                                    
                        </div>
                    </div>
      </div>
      
    </div>
  </div>
</div>





<?php 

if (isset($_SESSION['student'])) {
	if (isset($_POST['upp'])){
$con=mysqli_connect("127.0.0.1","root","","supervise");
//$ps=$_POST['num'];
$qr ="UPDATE `sreg` SET `pass`='".$_POST['pp']."' WHERE id = '".$_SESSION['student']."'";
if ($con->query($qr) === TRUE) {
  //header("Location: main.php");
}
}
}
 ?>




</body>
</html>