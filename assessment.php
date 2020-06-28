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
  <div class="container fixed-top">
 <nav class="navbar navbar-expand-lg navbar-light " style="background-color: gold">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    
<ul class="navbar-nav  mt-lg-0 mr-auto">
        <li class="nav-item">
          <?php 
          session_start();
if (isset($_SESSION['supervisee'])) {
                  echo '<a style="color: black; font-family:Verdana; font-weight:bolder;" class="nav-link">Student: '.$_SESSION['supervisee'].'</a>';
                    }


 ?>
      </li>
</ul>
    <ul class="navbar-nav  mt-lg-0 ml-auto">
     
       <li class="nav-item">
        <a style="color: blue; font-family:Verdana; cursor: pointer; font-weight: bolder;" href="track_student.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
      </li>

    </ul>
 
 </div> 
  </div>
</nav>
</div>

</div>
<div class="container" style="">
  <div class="container">
<div class="container jumbotron" style="background-color: white">
	<div class="container">
    <div class="container">
      <div class="container">
        <div class="jumbotron bg-light">
          <center style="color: red;font-weight: bolder;text-decoration: underline;">STUDENT'S ASSESSMENT MARKS</center>
    <form action="" method="post" class="">
   
<div class="form-group">
  <?php  
if (isset($_SESSION['supervisee'])) {

$con=mysqli_connect("127.0.0.1","root","","supervise");
$query = "SELECT * FROM ar WHERE id='".$_SESSION['supervisee']."'";
$query_run=mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($query_run)) {?>


  <label for="example-text-input" class="col-md-4 control-label">Student ID</label>
  <div class="col-md-8 inputGroupContainer">
    <input class="form-control col-sm-5" type="text" value="<?php echo $row['id'] ?>" readonly="readonly" name="si">
  </div>
</div>
<div class="form-group ">
  <label for="example-search-input" class="col-md-4 control-label">Student Name</label>
  <div class="col-md-8 inputGroupContainer">
    <input class="form-control col-sm-5" type="text" value="<?php echo $row['name'] ?>" readonly="readonly" name="sn">
  </div>
</div>
<style>
  label{
    color: blue;
    font-weight: bold;
  }
</style>
<div class="form-group ">
  <label for="example-email-input" class="col-sm-7 control-label">Company Attached</label>
  <div class="col-md-8 inputGroupContainer">
    <input class="form-control col-sm-5" type="text" value="<?php echo $row['comp'] ?>" readonly="readonly"  name="comp">
  </div>
</div>
<div class="form-group ">
  <label for="example-url-input" class="col-md-4 control-label">Start Date</label>
  <div class="col-md-8 inputGroupContainer">
    <input class="form-control col-sm-5" type="text" value="<?php echo $row['sdate'] ?>" readonly="readonly"  name="sd">
  </div>
</div>
<div class="form-group ">
  <label for="example-tel-input" class="col-md-4 control-label">End Date</label>
  <div class="col-md-8 inputGroupContainer">
    <input class="form-control col-sm-5" type="text" value="<?php echo $row['edate'] ?>" readonly="readonly"  name="ed">
  </div>
<?php }} ?>
</div>
<?php 
if (isset($_SESSION['supervisee'])) {

$con=mysqli_connect("127.0.0.1","root","","supervise");
$query = "SELECT * FROM ases WHERE id='".$_SESSION['supervisee']."'";
$query_run=mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($query_run)) {?>
<div class="form-group ">
  <label for="example-tel-input" class="col-sm-5 control-label">Supervisor Name</label>
  <div class="col-md-8 inputGroupContainer">
    <input class="form-control col-sm-5" type="text" value="<?php echo $row['supervisorname'] ?>" readonly="readonly"  name="sname">
  </div>
</div>
<div class="form-group ">
  <label for="example-tel-input" class="col-sm-5 control-label">Supervisor Contacts</label>
  <div class="col-md-8 inputGroupContainer">
    <input class="form-control col-sm-5" type="text" value="<?php echo $row['supervisorno'] ?>" readonly="readonly"  name="sc">
  </div>
  <?php }} ?>
</div>

<?php  
if (isset($_SESSION['supervisee'])) {

$con=mysqli_connect("127.0.0.1","root","","supervise");
$query = "SELECT * FROM ases WHERE id='".$_SESSION['supervisee']."'";
$query_run=mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($query_run)) {?>

  <div class="form-group">
  <label class="col-md-4 control-label">Punctuality <b> [1-10]</b></label>
  <div class="col-md-8 inputGroupContainer">
    <input class="form-control col-sm-5" type="text" name="pu" maxlength="2" value="<?php echo $row['punctuality'] ?>" readonly="readonly">
  </div>
</div>
<div class="form-group">
  <label class="col-sm-7 control-label">Adherence to regulations <b> [1-10]</b></label>
  <div class="col-md-8 inputGroupContainer">
    <input class="form-control col-sm-5" type="text" name="adr" maxlength="2" value="<?php echo $row['adhere'] ?>" readonly="readonly">
  </div>
</div>
<div class="form-group ">
  <label for="example-search-input" class="col-md-4 control-label">Adaptability <b> [1-10]</b></label>
  <div class="col-md-8 inputGroupContainer">
    <input class="form-control col-sm-5" type="text" name="ad" value="<?php echo $row['adapt'] ?>" readonly="readonly" maxlength="2">
  </div>
</div>
<div class="form-group ">
  <label for="example-email-input" class="col-md-4 control-label">Reliability <b> [1-10]</b></label>
  <div class="col-md-8 inputGroupContainer">
    <input class="form-control col-sm-5" type="text" maxlength="2" name="re" value="<?php echo $row['reliability'] ?>" readonly="readonly">
  </div>
</div>
<div class="form-group ">
  <label for="example-url-input" class="col-sm-5 control-label">Communication <b> [1-10]</b></label>
  <div class="col-md-8 inputGroupContainer">
    <input class="form-control col-sm-5" type="text" name="com" maxlength="2"  value="<?php echo $row['communication'] ?>" readonly="readonly">
  </div>
</div>
<div class="form-group ">
  <label for="example-tel-input" class="col-md-4 control-label">Team Work <b> [1-10]</b></label>
  <div class="col-md-8 inputGroupContainer">
    <input class="form-control col-sm-5" type="text" maxlength="2" name="tw" value="<?php echo $row['teamwork'] ?>" readonly="readonly">
  </div>
</div>
<div class="form-group ">
  <label for="example-tel-input" class="col-md-4 control-label">General Remarks </label>
  <div class="col-md-8 inputGroupContainer">
    <textarea class="form-control col-sm-5" name="rm" id="" cols="30" rows="10" readonly="readonly" maxlength="200"><?php echo $row['remarks'] ?></textarea>
  </div>

<?php }} ?>
</div>

</form>
</div>
</div>
</div>
</div>
</div></div></div>
</body>
</html>