<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header("Location: adminlogin.php");
    exit;
}

include('connect.php');



 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="connect.css">
</head>
<body>
   <?php 
        include('header.php');
   $date=date("Y-m-d");
?>

       <center><h2>Welcome to ADMIN PANEL</h2></center>
        <div class="btn-group">
  <a href="index.php" class="btn btn-danger" aria-current="page">Home page</a>
  <a href="booked.php" class="btn btn-primary">Booked Appointment</a>
</div>
<div class="cont">
<div class="container text-center">
  <div class="row">
    <div class="col">
    <h3>Number of Appointment Made for<?php echo $date ?> is<h3>
    </div>
    <div class="col">
        
      
    </div>
  </div>
</div>
<form class=mt-3>
        <form action=logout.php method=post>
        <input type=submit name=submit value=logout>
</form>
</nav>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
</body>
</html>
