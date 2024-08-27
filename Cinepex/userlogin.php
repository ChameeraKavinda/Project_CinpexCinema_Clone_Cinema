
 <?php
include("dbcinplex.php");
if(isset($_POST['email'])&& isset($_POST['password']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    if(empty($email))
    {
        header("Location:login.php");
        exit();
    }
    elseif(empty($password))
    {
        header("Location:login.php");
        exit(); 
    }
    else
    {
        
        $sql="Select * from admin_table where email='$email' and password='$password'";
        $result=mysqli_query($cineplex,$sql);

        if(mysqli_num_rows($result))
        {
            $row=mysqli_fetch_assoc($result);
            if($row['email']==$email && $row['password']==$password)
            {
                header("Location:tiket.php");
            }
        }else{echo"Error";}
    }
}
else{
    echo"empty";
    header("Location:login.php");
    exit();
}
 -->



?>*/




