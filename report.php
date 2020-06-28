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
if (isset($_SESSION['hod'])) {
                  echo '<a style="color: black; text-transform:uppercase; font-family:Verdana; font-weight:bolder;" class="nav-link">HOD: '.$_SESSION['hod'].'</a>';
                    }


 ?>
      </li>
       
</ul>

<ul class="navbar-nav  mt-lg-0 mx-auto">
 <li class="nav-item">
        <a style="color: blue; font-family:Verdana; cursor: pointer; font-weight: bolder;" href="atach.php" class="nav-link">Students in Attachments</a>
      </li>
     <li class="nav-item">
        <a style="color: blue; font-family:Verdana; cursor: pointer; font-weight: bolder;" href="progress.php" class="nav-link">Student Progress</a>
      </li> 
</ul>

    <ul class="navbar-nav  mt-lg-0 ml-auto">
      
      
 	<li class="nav-item">
   <?php 
echo '<a class="nav-link ml-auto" style="color: black; font-weight:bolder; font-family:Verdana"  href="hlogout.php?logout">LOG OUT</a>';
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
<p >You are currently logged in to the Pioneer International University Industrial Supervision Management System. <br>As a Head of Department, this system allows you to keep track of students progress during the attachment period. <br>
 </p>
</div>
</div>
</div>
</body>
</html>