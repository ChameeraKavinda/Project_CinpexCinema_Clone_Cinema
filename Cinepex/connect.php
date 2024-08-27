<?php
$con = new mysqli('localhost', 'root', '', 'cineplex');

if ($con) {
    // echo "Connected";
} else {
    die(mysqli_error($con));
}
?>
