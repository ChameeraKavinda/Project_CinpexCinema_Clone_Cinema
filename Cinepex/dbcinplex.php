<?php
$servername="localhost";
$username="root";
$password="";
$dbName="cineplex";

try
{
$cineplex=new mysqli($servername,$username,$password,$dbName);

if ($cineplex->connect_error){

    die("connection faild ".$cineplex->connect_error);

}
else
{
    // echo "Connected";
}
}catch(Exception $e)
{
    echo"Message: ".$e->getMessage();
}


?>