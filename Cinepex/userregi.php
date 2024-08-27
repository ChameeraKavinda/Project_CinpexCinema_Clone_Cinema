<?php
include("dbcinplex.php");


$full_name=$_POST['full_name'];
$last_name=$_POST['last_name'];
$mobile_number=$_POST['mobile_number'];
$email=$_POST['email'];
$password=$_POST['password'];
// echo $fname."<br>".$lname."<br>".$number."<br>".$email."<br>".$password;

$sql="Insert into admin_table(full_name,last_name,mobile_number,email,password)values('$full_name','$last_name','$mobile_number','$email','$password')";

// echo$sql;

if(mysqli_query($cineplex,$sql)){
    echo"new record created successfuully";
    header("Location:login.php");

}
else
{
    echo"Error".$sql."<br>".mysqli_error($cineplex);
}
?>