<?php
include("connect.php");

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        header("Location: admindis.php");
        exit();
    } else {
        $sql = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
        $result = mysqli_query($con, $sql);

        if ($result) {
            $row = mysqli_fetch_assoc($result);

            if ($row) {
                // Successful login
                header("Location: display.php");
                exit();
            } else {
                // Unsuccessful login
                echo "Error: Invalid email or password";
            }
        } else {
            // SQL query failed
            echo "Error: " . mysqli_error($con);
        }
    }
} else {
    echo "empty";
    header("Location: admindis.php");
    exit();
}
?>
