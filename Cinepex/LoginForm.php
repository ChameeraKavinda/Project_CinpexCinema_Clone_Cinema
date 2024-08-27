<?php
include("dbcinplex.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['register'])) {
        // Registration process
        if (isset($_POST['Name']) && isset($_POST['Email']) && isset($_POST['Mobile_NO']) && isset($_POST['Password'])) {
            $Name = $_POST['Name'];
            $Email = $_POST['Email'];
            $Mobile_NO = $_POST['Mobile_NO'];
            $Password = $_POST['Password'];

            // Prepare the SQL statement to prevent SQL injection
            $stmt = $cineplex->prepare("INSERT INTO User_Register_Sheet (User_Name, Email, Mobile_NO, Password) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $Name, $Email, $Mobile_NO, $Password);

            // Execute the statement
            if ($stmt->execute()) {
                echo "Registration successful!";
                header("Location: LoginForm.php#login");
                exit();
            } else {
                echo "Error: " . $stmt->error;
            }

            // Close the statement
            $stmt->close();
        }

    } elseif (isset($_POST['login'])) {
        // Login process
        if (isset($_POST['Email']) && isset($_POST['Password'])) {
            $Email = $_POST['Email'];
            $Password = $_POST['Password'];

            // Prepare the SQL statement to prevent SQL injection
            $stmt = $cineplex->prepare("SELECT * FROM User_Register_Sheet WHERE Email = ?");
            $stmt->bind_param("s", $Email);

            // Execute the statement
            $stmt->execute();
            $result = $stmt->get_result();

            // Check if a user with that email exists
            if ($result->num_rows > 0) {
                $user = $result->fetch_assoc();

                // Verify the password
                if ($Password === $user['Password']) {
                    echo "Login successful!";
                    header("Location: tiket.php");
                    exit();
                } else {
                    echo "Invalid password.";
                }
            } else {
                echo "No user found with that email.";
            }

            // Close the statement
            $stmt->close();
        }
    }
}

// Close the database connection
$cineplex->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Account | Cineplex</title>
</head>

<body>
    <div class="logo-container">
       <a href="homesam.php"><img src="pic/logo.png" alt="Logo"></a> 
    </div>
    <div class="container" id="container">
        
        <!-- Sign Up Form -->
        <div class="form-container sign-up">
            <form action="LoginForm.php" method="post">
                <h1>Create Account</h1><br>
                
                <input type="text" name="Name" placeholder="Name" required>
                <input type="email" name="Email" placeholder="Email" required>
                <input type="text" name="Mobile_NO" placeholder="Mobile Number" required>
                <input type="password" name="Password" placeholder="Password" required>
                <div class="policy" style="display: flex; align-items: center;">
                    <input type="checkbox" style="margin-right: 5px;" required>
                    <label style="white-space: nowrap;">I accept all terms & conditions</label>
                </div>
                
                <button type="submit" name="register">Sign Up</button>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-whatsapp"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
            </form>
        </div>

        <!-- Sign In Form -->
        <div class="form-container sign-in">
            <form action="LoginForm.php" method="post">
                <h1>Sign In</h1><br>

                <input type="email" name="Email" placeholder="Email" required>
                <input type="password" name="Password" placeholder="Password" required><br>
                <button type="submit" name="login">Sign In</button>
                <p id="register1"><a href="#">Forget Your Password?</a></p>
                
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-whatsapp"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
            </form>
        </div>

        <!-- Toggle Section -->
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Enter your personal details to access all the features of our cinema site.</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello, Friend!</h1>
                    <p>Sign up with your details to unlock the full cinematic experience on our site!</p>
                    <button class="hidden" id="register">Sign Up</button><br>
                    <p style="font-style: italic;">"We are Cineplex Team"</p>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>
