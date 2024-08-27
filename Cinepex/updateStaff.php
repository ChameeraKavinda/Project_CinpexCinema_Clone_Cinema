<?php
include 'connect.php';

$id = $_GET['updateid'];
$sql = "SELECT * FROM staff WHERE id='$id'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];


if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "UPDATE staff SET name='$name', email='$email', mobile='$mobile', password='$password' WHERE id=$id";

    
    if(mysqli_query($con, $sql)){
        echo "Updated successfully";
        header("Location: display.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
}
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
  </head>
  <body>
   <div class="container my-5">
   <form method="post">
  <div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control" placeholder="Enter your Name" name="name" autocomplete="off" value=<?php echo $name;?>>
    </div>

    <div class="form-group">
    <label >Email</label>
    <input type="text" class="form-control" placeholder="Enter your Email" name="email" autocomplete="off" value=<?php echo $email;?>>
    </div>

    <div class="form-group">
    <label >Mobile</label>
    <input type="text" class="form-control" placeholder="Enter your Mobile Number" name="mobile" autocomplete="off">
    </div>

    <div class="form-group">
    <label >Password</label>
    <input type="password" class="form-control" placeholder="Enter your Password" name="password" autocomplete="off">
    </div>
  <button type="submit" class="btn btn-primary"name="submit">Update</button>
</form>
   </div>

   
</html>