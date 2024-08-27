<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cineplex</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >
</head>
<style>
  body{
    background: #897976  ;
    color:white;
    font-size:20px;
    font-weight:bold;
    /* background: url(pic/crakback.jpg) */
  }
  </style>
<body>

<div class="container">
<button class= "btn btn-primary my-5"><a href="http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=cineplex&table=admin" class="text-light">View Dtabase</a></button>
    <button class= "btn btn-primary my-5"><a href="http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=cineplex&table=admin_table" class="text-light">Manage User</a></button>
    <button class= "btn btn-primary my-5"><a href="http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=cineplex&table=movie" class="text-light">Manage Ticket Booking</a></button>

    <button class= "btn btn-primary my-5"><a href="http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=cineplex&table=feedback" class="text-light">Manage Feedback</a></button>
    <br><button class= "btn btn-primary my-5"><a href="add_movie.php" class="text-light">Add Movie</a></button>
    <br><button class= "btn btn-primary my-5"><a href="staff.php" class="text-light">Add Staff</a></button>
  

    <table class="table">
  <thead>
    <tr>
      <th scope="col" style="color: black; font-size: 24px; font-weight: bold;">SI no</th>
      <th scope="col"style="color: black; font-size: 24px; font-weight: bold;">Name</th>
      <th scope="col"style="color: black; font-size: 24px; font-weight: bold;">Email</th>
      <th scope="col"style="color: black; font-size: 24px; font-weight: bold;">Mobile</th>
      <th scope="col"style="color: black; font-size: 24px; font-weight: bold;">Password</th>
      <th scope="col"style="color: black; font-size: 24px; font-weight: bold;">Operation</th>
    </tr>
  </thead>
  <tbody>

  <?php
  $sql = "SELECT * FROM `staff`";

  $result=mysqli_query($con,$sql);
  if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['name'];
        $email=$row['email'];
        $mobile=$row['mobile'];
        $password=$row['password'];
        echo '<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$mobile.'</td>
        <td>'.$password.'</td>
        <td>
        <button class="btn btn-primary"><a href="updateStaff.php?updateid=' . $id . '"" class="text-light">Update</a></button>
        <button class="btn btn-danger"><a href="deleteStaff.php?deleteid=' . $id . '" class="text-light">Delete</a></button>
    </td>

    
      </tr>';
    }
    
    
  }


  ?>
  
  </tbody>
</table>
</div>
    
</body>
</html>