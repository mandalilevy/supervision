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
 <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: gold">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    
<ul class="navbar-nav  mt-lg-0 mr-auto">
  <li class="nav-item">
          <?php 
  session_start();
if (isset($_SESSION['supervise'])) {
                  echo '<a style="color: black; font-family:Verdana; font-weight:bolder;" class="nav-link">Supervisor: '.$_SESSION['supervise'].'&nbsp&nbsp&nbsp&nbsp|</a>';
                    }


 ?>
      </li>
        <li class="nav-item">
          <?php 
if (isset($_SESSION['supervisee'])) {
                  echo '<a style="color: black; font-family:Verdana; font-weight:bolder;" class="nav-link">Supervisee: '.$_SESSION['supervisee'].'</a>';
                    }


 ?>
      </li>
</ul>



    <ul class="navbar-nav  mt-lg-0 mx-auto">
     
       <li class="nav-item">
        <a style="color: blue; font-family:Verdana; cursor: pointer; font-weight: bolder;" href="sdashbod.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
      </li>

    </ul>
 <ul class="navbar-nav  mt-lg-0 ml-auto">
 	<li class="nav-item">
   <?php 
echo '<a class="nav-link ml-auto" style="color: black; font-weight:bolder; font-family:Verdana"  href="slogout.php?logout">LOG OUT</a>';
  ?>
   </li>
 </ul>
 </div> 
  </div>
</nav>
</div>
<div class="container" style="padding-top: 10px">
<div class="container jumbotron" style="background-color: white">
	<div class="">
    <form action="" method="post">
    <table class="table table-striped">
          <tbody>
            <tr>
              <td colspan="1">
<div class="form-group">
  <?php  
if (isset($_SESSION['supervisee'])) {

$con=mysqli_connect("127.0.0.1","root","","supervise");
$query = "SELECT * FROM ar WHERE id='".$_SESSION['supervisee']."'";
$query_run=mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($query_run)) {?>


  <label for="example-text-input" class="col-md-4 control-label">Student ID</label>
  <div class="col-md-8 inputGroupContainer">
    <input class="form-control" type="text" value="<?php echo $row['id'] ?>" readonly="readonly" name="si">
  </div>
</div>
<div class="form-group ">
  <label for="example-search-input" class="col-md-4 control-label">Student Name</label>
  <div class="col-md-8 inputGroupContainer">
    <input class="form-control" type="text" value="<?php echo $row['name'] ?>" readonly="readonly" name="sn">
  </div>
</div>
<div class="form-group ">
  <label for="example-email-input" class="col-sm-7 control-label">Company Attached</label>
  <div class="col-md-8 inputGroupContainer">
    <input class="form-control" type="text" value="<?php echo $row['comp'] ?>" readonly="readonly"  name="comp">
  </div>
</div>
<div class="form-group ">
  <label for="example-url-input" class="col-md-4 control-label">Start Date</label>
  <div class="col-md-8 inputGroupContainer">
    <input class="form-control" type="text" value="<?php echo $row['sdate'] ?>" readonly="readonly"  name="sd">
  </div>
</div>
<div class="form-group ">
  <label for="example-tel-input" class="col-md-4 control-label">End Date</label>
  <div class="col-md-8 inputGroupContainer">
    <input class="form-control" type="text" value="<?php echo $row['edate'] ?>" readonly="readonly"  name="ed">
  </div>
<?php }} ?>
</div>
<?php 
if (isset($_SESSION['supervise'])) {

$con=mysqli_connect("127.0.0.1","root","","supervise");
$query = "SELECT * FROM csuper WHERE username='".$_SESSION['supervise']."'";
$query_run=mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($query_run)) {?>
<div class="form-group ">
  <label for="example-tel-input" class="col-sm-5 control-label">Supervisor Name</label>
  <div class="col-md-8 inputGroupContainer">
    <input class="form-control" type="text" value="<?php echo $row['name'] ?>" readonly="readonly"  name="sname">
  </div>
  
</div>
<div class="form-group ">
  <label for="example-tel-input" class="col-sm-5 control-label">Supervisor Contacts</label>
  <div class="col-md-8 inputGroupContainer">
    <input class="form-control" type="text" value="<?php echo $row['cont'] ?>" readonly="readonly"  name="sc">
  </div>
  <?php }} ?>
</div>
</td>

 <td colspan="1">
  <div class="form-group">
  <label class="col-md-4 control-label">Punctuality <b> [1-10]</b></label>
  <div class="col-md-8 inputGroupContainer">
    <input class="form-control" type="text" name="pu" maxlength="2" required="">
  </div>
</div>
<div class="form-group">
  <label class="col-sm-7 control-label">Adherence to regulations <b> [1-10]</b></label>
  <div class="col-md-8 inputGroupContainer">
    <input class="form-control" type="text" name="adr" maxlength="2" required="">
  </div>
</div>
<div class="form-group ">
  <label for="example-search-input" class="col-md-4 control-label">Adaptability <b> [1-10]</b></label>
  <div class="col-md-8 inputGroupContainer">
    <input class="form-control" type="text" name="ad" required="" maxlength="2">
  </div>
</div>
<div class="form-group ">
  <label for="example-email-input" class="col-md-4 control-label">Reliability <b> [1-10]</b></label>
  <div class="col-md-8 inputGroupContainer">
    <input class="form-control" type="text" maxlength="2" name="re" required="">
  </div>
</div>
<div class="form-group ">
  <label for="example-url-input" class="col-sm-5 control-label">Communication <b> [1-10]</b></label>
  <div class="col-md-8 inputGroupContainer">
    <input class="form-control" type="text" name="com" maxlength="2"  required="">
  </div>
</div>
<div class="form-group ">
  <label for="example-tel-input" class="col-md-4 control-label">Team Work <b> [1-10]</b></label>
  <div class="col-md-8 inputGroupContainer">
    <input class="form-control" type="text" maxlength="2" name="tw" required="">
  </div>
</div>
<div class="form-group ">
  <label for="example-tel-input" class="col-sm-7 control-label">General Remarks [200 Words]</label>
  <div class="col-md-8 inputGroupContainer">
    <textarea class="form-control" name="rm" id="" ></textarea>
  </div>
</div>
<button class="btn btn-primary col-md-8 inputGroupContainer" name="add">Submit</button>
</td>
</tr>

</tbody>
</table>
</form>
</div>
</div>
</div>

<?php
if (isset($_POST['add'])) {
$con=mysqli_connect("127.0.0.1","root","","supervise");
$query ="SELECT * FROM `ases` WHERE id='".$_POST['si']."'";
$result=mysqli_query($con,$query);
if (mysqli_fetch_assoc($result)) {
  echo "<script type='text/javascript'>alert('ALREADY ASSESSED!!');</script>";
}
else{
$sql="INSERT INTO `ases`(`id`, `name`, `company`, `startdate`, `enddate`, `supervisorname`, `supervisorno`, `punctuality`, `adhere`, `adapt`, `reliability`, `communication`, `teamwork`, `remarks`)VALUES('".$_POST['si']."','".$_POST['sn']."','".$_POST['comp']."','".$_POST['sd']."','".$_POST['ed']."','".$_POST['sname']."','".$_POST['sc']."','".$_POST['pu']."','".$_POST['adr']."','".$_POST['ad']."','".$_POST['re']."','".$_POST['com']."','".$_POST['tw']."','".$_POST['rm']."')";
if(mysqli_query($con, $sql)){
  echo "<script type='text/javascript'>alert('SUCCESSFULLY ASSESSED!!');</script>";
}
else{
  echo "<script type='text/javascript'>alert('ERROR!!AVOID USING SPECIAL CHARACTERS!!');</script>";
}
}
}
 ?>


</body>
</html>