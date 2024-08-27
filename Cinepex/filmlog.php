<?php
include("dbcinplex.php");


$fim_name=$_POST['fim_name'];
$des=$_POST['des'];
$rate=$_POST['rate'];
$img=$_POST['img'];

// echo $fname."<br>".$lname."<br>".$number."<br>".$email."<br>".$password;

$sql="Insert into film(fim_name,des,rate,img)values('$fim_name','$des','$rate','$img')";

// echo$sql;

if(mysqli_query($cineplex,$sql)){
    echo"new record created successfuully";
    header("Location:homesam.php");

}
else
{
    echo"Error".$sql."<br>".mysqli_error($cineplex);
}
?>