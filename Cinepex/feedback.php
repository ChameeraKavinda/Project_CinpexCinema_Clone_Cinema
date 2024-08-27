<?php
include("connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['fname'] ?? '';
    $email = $_POST['email'] ?? '';
    $comment = $_POST['comment'] ?? '';

    // Check if required fields are not empty
    if (!empty($fname) && !empty($email) && !empty($comment)) {
        // Use prepared statements to prevent SQL injection
        $sql = "INSERT INTO feedback (fname, email, comment) VALUES (?, ?, ?)";
        
        // Prepare the statement
        $stmt = mysqli_prepare($con, $sql);

        // Bind parameters
        mysqli_stmt_bind_param($stmt, 'sss', $fname, $email, $comment);

        // Execute the statement
        if (mysqli_stmt_execute($stmt)) {
            echo "New record created successfully";
            header("Location: homesam.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        echo "Error: Required fields are empty";
    }
}

// Close the database connection
mysqli_close($con);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cineplex</title>
    <link rel="stylesheet" href="feed.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />"
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

  <style> *{  margin:0;
    padding: 0;
    box-sizing: border-box;
    font-family:'Times New Roman', Times, serif;
    
}

.contact {
    color:white;
    position: relative;
    min-height: 100vh;
    padding: 50px 100px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
  
}
.contact .content{
    max-width: 800px;
    text-align: center;
}
.contact .content h2{
    font-size: 46px;
    font-weight: 500;
    color: black;
    font-weight: bold;

}
.contact .content p{
    font-weight: 300;
    color: #fff;
    color: wheat;
    font-weight: bold;
    font-size: 20px;

}

.contact .content p b{
  font-size: 20px;
  color: #8b1818;

}

.contact .content p b a{
    font-size: 20px;
    color: #8b1818;
    text-decoration: none;
  
  }
.container{
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 30px;

}
.container .contactInfo{
    width: 50%;
    display: flex;
    flex-direction: column;
    margin-right: 920px;
}
.container .contactInfo .box{
   position: relative;
   padding: 20px 0;
   display: flex;
   border: #00bcd4;
  
}
.container .contactInfo .box .icon{
   min-width: 60px;
   height: 60px;
   background: transparent;
   display: flex;
   justify-content: center;
   border-radius: 50%;
   font-size: 22px;

}
.container .contactInfo .box .text{
 
   display: flex;
   font-size: 16px;
   color: #fff;
   flex-direction: column;
   font-weight: 300;
}

.container .contactInfo .box .text h3{
 color: #f0e0e0;
 font-weight: 500;
 font-size: 30px;
}

.container .contactInfo .box .text p{
    color: #f0e0e0;
    font-weight: 500;
    font-size: 20px ;
    font-weight: bold;
   }

.contactForm{
    width: 40%;
    padding: 10px;
    height: 100%;
    background: transparent;
    margin-left: 650px;
   margin-top: 450px;
   position: absolute;
}

.contactForm h2{
    font-size: 30px;
    font-weight: bold;
    color: white;
    font-weight: 500;
}

.contactForm .inputBox{
    position: relative;
    width: 100%;
    margin-top: 10px;

}
.contactForm .inputBox input{
    padding: 5px 0;
    width: 100%;
    font-size: 16px;
    margin: 10px 0;
    border:none;
    border-bottom: 2px solid #0a0a0a;
    outline: none;
    resize: none;

}
.contactForm .inputBox span{
    position: absolute;
    left: 0;
    padding: 5px 0;
    font-size: 16px;
    margin: 10px 0;
    pointer-events: none;
    transition: 0.5s;
    color: #572424;
}
.contactForm.inputBox input:focus ~ span,
.contactForm.inputBox input:valid ~ span,
.contactForm.inputBox textarea:focus ~ span,
.contactForm.inputBox textarea:focus ~ span{
    color: #e91e63;
    font-size: 12px;
    transform: translateY(-200px);
} 
.contactForm.inputBox input[ type="send"]{
    width: 500px;
    background: #00bcd4;
    color: #8b1818;
    border: none;
    cursor: pointer;
    padding: 10px;
    font-size: 18px;

}

@media (max-width: 991px){
    .contact{
        padding:50px;
    }
    .container{
        flex-direction: column;
       
    }
    .container .contactInfo{
        margin-bottom: 40px;
      
    }
    .container .contactInfo{
    margin: 100%;
    }
}
  







/* Nav Style Path */
* {box-sizing: border-box;}
body {
    background-image: url("pic/aluth.jpg");
    background-size: cover;
    background-color: white;
    width: 100%;
    height: 100vh;
    background-position: center;
    background-size: cover;
    align-items: right;
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
    box-sizing: border-box;
    background-attachment: fixed;
  }

html{
    scroll-behavior: smooth;
}


.container{
    padding: 10px 10%;
}
nav{
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    /* position: fixed; */
}
.logo{
    width: 20%;
    
}
nav ul li{
    display: inline-block;
    list-style: none;
    margin: 10px 20px;
}
nav ul li a{
    color: #fff;
    text-decoration: none;
    font-size: 25px;
    font-family: 'Times New Roman', Times, serif;
    position: relative;
}
nav ul li a::after{
    content: '';
    width: 0; 
    height: 3px;
    background: #ff004f;
    position: absolute;
    left: 0;
    bottom: -6px;
    transition: 0.5s;
}

nav ul li a:hover::after{
    width:100%;
}


.button2{
  background-color: #FF6347;
}

   /* Footer Design part  */
   footer{
    background-color: #111;
  
  }
  .footer{
    width: 100%;
    padding: 70px 30px 20px;
    padding: 0;
    margin: 0;
    box-sizing: border-box;
  
  }
  
  .socialicon{
    display: flex;
    justify-content: center;
  
  }
  .socialicon a{
   
    text-decoration: none;
    padding: 10px;
     background-color: white;
     margin: 10px;
     border-radius: 50%;
  }
  .socialicon a i{
    font-size: 2em;
    color: black;
    opacity: 0.9;
  }
  /* hover Effects on social media Icons */
  .socialicon a:hover{
      background-color: #111;
      transform: 0.5s;
  
  }
  
  .footerNav{
    margin: 30px 0;
   
  
  
  }
   .footerNav ul{
    display: flex;
    justify-content: center;
    list-style-type: none;
  
   }
  
   .footerNav ul li a{
    color: white;
    margin:  20px;
    text-decoration: none;
    font-size: 1.3em;
    opacity: 0.7;
    transform: 0.5s;
   }
  
   .footerNav ul li a:hover{
    opacity: 1;
  
   }
  
   .footerBottom{
    background-color: black;
    padding: 20px;
    text-align: center;
   }
  
   .footerBottom p{
    color: white;
   }
  
   .designer{
    opacity: 0.7;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-weight: 400;
    margin: 0px 5px;
   }
  
   @media (max-width: 700px){
    .footerNav ul{
      flex-direction: column;
    }
    .footerNav ul li{
      width: 100%;
      text-align: center;
      margin: 10px;
  
    }
   }
   .wel h1{
      align-items: center;
      font-size: 40px;
      
   }
   .wel p{
    
          text-align: center;
          color: white; 
          font-size: 20px; 
        
          
   }</style>
</head>
<body>
    <div id="header">
        <div class="container"  >
            <nav style="background-color: transparent">
                <img src="pic/logo.png" class="logo">
                <ul id="sidemenu">
                    <li><a href="homesam.php">Home</a></li>
                    <li><button class="button2"><a href="homesam.php">Buy Tikets</a></button></li>
                    <!-- <li><a href="home1.html">Movies</a></li> -->
                    <li><a href="staff.php">Staff Login</a></li>
                     <li><a href="admindis.php">Admin Login</a></li>
                    <!-- <i class="fas fa-times" onclick="closemenu()"></i> -->
                </ul>
                <i menu onclick="openmenu()"></i>
            </nav>
          
    </div>
    
    
    
   
    <section class="contact">
        <div class="content">
            <h2 style="color: white">Contact Us</h2><br>
            <p>Thank you for choosing <b><a href="homesam.html">Cineplex Cinema </b> </a>for your recent movie experience! We hope you enjoyed your time with us.

                To help us enhance our services and create an even better cinematic experience for you, we would appreciate your feedback. Please take a moment to share your thoughts by answering a few quick questions in our survey.</p><br>

        </div>
        <br><br><div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><i class="fa fa-home" aria-hidden="true"></i></div>
                    <div class="text"></div>
                    <h3>Address:-</h3>
                    <p>&nbsp;No:33/5,  Dalada &nbsp;Veediya,<br>&nbsp;Kandy rd,<br>&nbsp;Kandy</p>

                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-message" aria-hidden="true"></i></div>
                    <div class="text"></div>
                    <h3>Email:-</h3>
                    <p>&nbsp;ChameeraKavinda12@gmail.com</p>

                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                    <div class="text"></div>
                    <h3>Phone:-</h3>
                    <p>&nbsp;+94 81 789 5678<br>+94 75 654 7894</p>

                </div>
            </div>
        </div>
        <div class="contactForm">
        <form method="POST" action="feedback.php">
               <br> <br><h2><b><br>Send Message</b></h2>
                    <div class="inputBox">
                        <input type="text" name="fname" required="required" placeholder="Full Name">
                       
                    </div>
                    <div class="inputBox">
                        <input type="text" name="email" required="required" placeholder="E-mail Address">
                        
                    </div>
                    <div class="inputBox">
                        <textarea required="required"  name="comment" placeholder=" Type your Message.. "></textarea>
                        
                    </div>
                    <div class="inputBox">
                        <button class="submit" style="font-size: 20px;">Submit</button>
                        <!-- <input type="submit" name="" value="Send"> -->
                        
                    </div>
                
            </form>
        </div>
        
           
    </section>

    <div class="footer">
        <div class="socialicon">
          <a href="https://kccmultiplex.lk/"><i class="fa-brands fa-facebook"></i></a>
          <a href=""><i class="fa-brands fa-whatsapp"></i></a>
          <a href=""><i class="fa-brands fa-twitter"></i></a>
          <a href=""><i class="fa-brands fa-google-plus"></i></a>
          <a href="https://youtube.com/@cineplexmovies"><i class="fa-brands fa-youtube"></i></a>
        </div>
        <div class="footerNav">
          <ul>
            <li><a href="home.html">Home</a></li>
            <li><a href="#"> Contact Us</a></li>
            <li><a href="#"> News</a></li>
            <li><a href="About.html"> About Us</a></li>
          </ul>
        </div>
        <div class="footerBottom">
          <p>Copyright &copy;2024; Designed by <span class="designer">Chameera</span></p>
        </div>
       </div>  
         
      </div>
    
</body>
</html>