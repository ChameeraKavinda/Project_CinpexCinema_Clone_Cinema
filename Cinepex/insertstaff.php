<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user regsistion</title>
    <style>
.card
{
    display: flex;
    align-items:center;
    justify-content:center;
}
.j{
    border:solid;
    width: 50%;
    height: 80%;
    position: relative;
 
   }     
body {
  font-family: Arial, Helvetica, sans-serif;

}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] ,input[type=email] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
  font-size:15px;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
  font-size:20px;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body >
    <br>
    <br>
    <br>
    <br> 
<div class="card">
    <div class="container j" >
        <form action="insertstaffdb.php" method="POST">
        
            <label for="full_name">First Name</label>
            <input type="text" name="full_name" id="full_name" placeholder="First name...."required><br>

            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" id="last_name" placeholder="Last name..."required><br>
            
            <label for="mobile_number">Mobile number</label>
            <input type="text" name="mobile_number" id="mobile_number"placeholder="Mobile number.."required><br>

            <label for="address">address</label>
            <input type="text" name="address" id="address" placeholder="Email id..."required>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Email id..."required><br>

            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Password..."required><br>

            <input type="submit"  class="registerbtn" value="Submit" name="submit" >
        </form>
        <center>Already have an Account ? <a href="login.php">Login</a></center>
    </div>
</div>

</body>
</html>