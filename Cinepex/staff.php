<?php
include 'connect.php';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

   
$sql = "INSERT INTO staff (name, email, mobile, password) VALUES ('$name', '$email', '$mobile', '$password')";

// echo $sql;

if(mysqli_query($con, $sql)){
    echo "New record created successfully";
    header("Location: staffLog.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}}
?>






<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >

    <title>Cineplex</title>
    <style>
      body{
        color:white;
        font-weight:bold;
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background-image: url(pic/aluth.jpg);
  background-size: cover; 
    background-color: black;
  /* background: #4070f4; */
}
    </style>
  </head>
  <body>
   <div class="container my-5">
   <form method="post">
  <div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control" placeholder="Enter your Name" name="name" autocomplete="off" required>
    </div>

    <div class="form-group">
    <label >Email</label>
    <input type="text" class="form-control" placeholder="Enter your Email" name="email" autocomplete="off" required>
    </div>

    <div class="form-group">
    <label >Mobile</label>
    <input type="text" class="form-control" placeholder="Enter your Mobile Number" name="mobile" autocomplete="off">
    </div>

    <div class="form-group">
    <label >Password</label>
    <input type="password" class="form-control" placeholder="Enter your Password" name="password" autocomplete="off">
    </div>
  <button type="submit" class="btn btn-primary"name="submit">Submit</button>

  <br><br><div class="text">
        <h3 style="font-size:15px">Already have an account? <a href="staffLog.php">Login now</a></h3>
      </div>
</form>
   </div>

   
</html>