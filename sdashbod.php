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



    <ul class="navbar-nav  mt-lg-0 ml-auto">
     
       <li class="nav-item">
        <a style="color: blue; font-family:Verdana; cursor: pointer; font-weight: bolder;" href="asses.php" class="nav-link">Assess Student</a>
      </li>
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
<div class="container ">
	
	<div class="container">
<div class="table-responsive">
  <table class="table  table-bordered table-responsive-sm table-sm">
<thead class="thead-light">
<tr>
<th scope="col"><strong>DATE</strong></th>
<th scope="col"><strong>DUTY</strong></th>

</tr>
</thead>
<tbody>
<?php
$con=mysqli_connect("127.0.0.1","root","","supervise");
$query ="SELECT  `date`, `duty`  FROM `book` where num='".$_SESSION['supervisee']."' ORDER BY date";
$result = mysqli_query($con,$query);
while($row = mysqli_fetch_assoc($result)) { ?>

<tr><td><?php echo $row["date"]; ?></td>
<td ><?php echo $row["duty"]; ?></td></tr>
<?php } ?>

</tbody>
</table>
</div>
</div>
</div>
</div>

</body>
</html>