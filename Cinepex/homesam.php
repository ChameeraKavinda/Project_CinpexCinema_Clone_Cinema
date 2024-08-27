<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Climplix Cinema</title>
    <link rel="stylesheet" href="homesam.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />"
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" > -->
    
    <style>
    
* {box-sizing: border-box;}
body {
    background-image: url("pic/aluth.jpg");
    background-size: cover;
    background-color: black;
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
nav {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    position: fixed; /* Makes the navigation bar stick to the top */
    top: 0; /* Positions the navigation bar at the top of the page */
    left: 0; /* Ensures the navigation bar stretches across the full width */
    width: 100%; /* Stretches the navigation bar to full width */
    background-color: rgba(0, 0, 0, 0.8); /* Adds a slight background color with transparency */
    z-index: 1000; /* Ensures the navigation bar stays on top of other elements */
}
/* nav{
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    /* position: fixed; 
} */
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


h1{
    color:white;
    text-align: center;
    font-family: 'Times New Roman', Times, serif;
    font-size:60px;
    }
    
    /* Slideshow container */
    body {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    
    .mySlides {
      display: none;
      width: 100%; /* Add this line */
      height: auto; /* Add this line */
    }
    
    img {
      vertical-align: middle;
    }
    
    .slideshow-container {
      max-width: 100%; /* Change this line */
      position: relative;
      margin: auto;
    }
    
    .text {
      color: #f2f2f2;
      font-size: 15px;
      padding: 8px 12px;
      position: absolute;
      bottom: 8px;
      width: 100%;
      text-align: center;
    }
    
    .numbertext {
      color: #f2f2f2;
      font-size: 12px;
      padding: 8px 12px;
      position: absolute;
      top: 0;
    }
    
    .dot {
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.6s ease;
    }
    
    .active {
      background-color: #717171;
    }
    
    @keyframes fade {
      from {opacity: .4} 
      to {opacity: 1}
    }
    
    @media only screen and (max-width: 300px) {
      .text {font-size: 11px}
    }
    /* Slide show End */


    /* .singup{
      align-items: center;
      display: inline-block;
    } */
    body {
        font-family: "Lato", sans-serif;
        background-color: #413e3e;
        }
        
        @media screen and (max-height: 450px) {
        .sidenav {padding-top: 15px;}
        .sidenav a {font-size: 15px;}
        }
        /* Image hover box add */

        .container1{
            width: 300%;
            padding: 20px;
            margin: 100px auto;
            display: flex;
            flex-direction: row;
            justify-content: center;
           text-decoration: none;
          
        }
        .box{
        width: 90%;
        padding: 20px;
        margin: 100px auto;
        display: flex;
        flex-direction: row;
        justify-content: center;
        }
        
        .image{
        width: 250px;
        margin: 0 10px;
        box-shadow: 0 0 20px 2px rgba(0,0,0,.1);
        
        }
        
        img{
        display: block;
        width: 100%;
        border-radius: 5px;
        
        }
        
        .image:hover{
          transform: scale(1.2);
        
        }
        
        .nn h1{
        text-align: left;
        }
        /* Image Buy Tiket and Watch Trailer Button Add */
        /* Buy Tiket button id is =Button */
        .button {
          background-color: white; /* Orange background color */
          border: none; /* Remove border */
          color: black; /* Black text color */
          padding: 10px 10px; /* Button padding */
          text-align: center; /* Center text */
          text-decoration: none; /* Remove text decoration */
          display: inline-block; /* Make button an inline-block element */
          font-size: 16px; /* Button text size */
          margin: 4px 2px; /* Button margin */
          cursor: pointer; /* Add a pointer cursor on hover */
          border-radius: 5px; /* Rounded corners */
          transition: background-color 0.3s ease; /* Add a transition effect */
          text-decoration: none; /* Remove underline from text */
        }
        .button {color: black;
          font-weight: bold;
          text-decoration: none;}
        
        .button:hover {
          background-color: yellow; /* Change background color on hover */
        }
        
        .button:active {
          background-color: white; /* Change background color on mouse click */
        }



         /*Watch Triler button id is =Button1 */
        .button1 {
          background-color: #FF6347; /* Orange background color */
          border: none; /* Remove border */
          color: black; /* Black text color */
          padding: 10px 10px; /* Button padding */
          text-align: center; /* Center text */
          text-decoration: none; /* Remove text decoration */
          display: inline-block; /* Make button an inline-block element */
          font-size: 16px; /* Button text size */
          margin: 4px 2px; /* Button margin */
          cursor: pointer; /* Add a pointer cursor on hover */
          border-radius: 5px; /* Rounded corners */
          transition: background-color 0.3s ease; /* Add a transition effect */
          text-decoration: none; /* Remove underline from text */
        }
        
        .button1:hover {
          background-color: grey; /* Change background color on hover */
        }
        
        .button1:active {
          background-color: #FF6347; /* Change background color on mouse click */
        }



        /*Comming soon Watch Triler button id is =Button2 */
        .button2 {background-color: #FF6347; /* Orange background color */
          border: none; /* Remove border */
          color: black; /* Black text color */
          padding: 10px 10px; /* Button padding */
          text-align: center; /* Center text */
          text-decoration: none; /* Remove text decoration */
          display: inline-block; /* Make button an inline-block element */
          font-size: 16px; /* Button text size */
          margin: 4px 2px; /* Button margin */
          cursor: pointer; /* Add a pointer cursor on hover */
          border-radius: 5px; /* Rounded corners */
          transition: background-color 0.3s ease; /* Add a transition effect */
          text-decoration: none; /* Remove underline from text */}

         
        


        
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
              
                
         }
         .button a{
          text-decoration: none;
         }
         .button1 a{
          text-decoration: none;
         }
         .button2 a{
          text-decoration: none;
         }
         .arrow{
          
         
          font-size: 50px;
          
          position: absolute;
          top: 1750px;
          right: 0;
          color: rgb(199, 185, 185);
          opacity: 0.5;
          cursor: pointer;
      }
/* Home Page Body */


.welcome{
    font-size: 40px;
    font-family: "Open Sans", sans-serif;
    font-weight: bold;
}

.intro{
    font-family: Georgia, 'Times New Roman', Times, serif;
    font-size: 24px;
    text-align: center;
    color: aliceblue;
    display: inline;
}


.movie-list-title{
    color: #d2691e;
}

.movie-list-container{
    padding: 0 20px;

}

.movie-list-wrapper{
    position: relative;
    overflow: hidden;


}

.movie-list{
    display: flex;
    align-items: center;
    height: 300px;
    transform: translateX(0);
    transition: all 1s ease-in-out; 
    
}

.movie-list-item{
    margin-right: 30px;
    position: relative;


}

.movie-list-item:hover .movie-list-item-img{
     transform: scale(1.0);
     margin: 0 30px;
     opacity: 0.5;
}

.movie-list-item:hover .movie-list-item-title{
    opacity: 1;
}

.movie-list-item:hover .movie-list-item-button{
    opacity: 1;
    background-color: aliceblue; /* Change background color on hover */
}
.movie-list-item:hover .movie-list-item-button1{
  opacity: 1;
  background-color: yellow; /* Change background color on hover */
}
.button:active {
  background-color: white; /* Change background color on mouse click */
}
.button1:active {
  background-color: #FF6347; /* Change background color on mouse click */
}

.movie-list-item:hover .movie-list-item-button-2{
    opacity: 1;
}

.movie-list-item-img{
    transition: all 1s ease-in-out;
    width: 270px;
    height: 200px;
    object-fit: cover;
    border-radius: 20px;
}

.movie-list-item-title{
    background-color: transparent;
    padding: 0, 10px;
    font-size: 32px;
    font-weight: bold;
    position: absolute;
    top: 20px;
    left: 50px;
    opacity: 0;
    transition: 1s all ease-in-out;

}

.movie-list-item-button{
  background-color: gray; /* Orange background color */
  border: none; /* Remove border */
  color: black; /* Black text color */
  padding: 12px 12px; /* Button padding */
  text-align: center; /* Center text */
  text-decoration: none; /* Remove text decoration */
  display: inline-block; /* Make button an inline-block element */
  font-size: 16px; /* Button text size */
  margin: 4px 2px; /* Button margin */
  cursor: pointer; /* Add a pointer cursor on hover */
  border-radius: 5px; /* Rounded corners */
  transition: background-color 0.3s ease; /* Add a transition effect */
  text-decoration: none; /* Remove underline from text */

}
.movie-list-item-button a{
  color: black;
  font-weight: bold;
  text-decoration: none;
}
.movie-list-item-button1 a{
  color: black;
  font-weight: bold;
  text-decoration: none;
}


.movie-list-item-button1{
  background-color: #FF6347; /* Orange background color */
  border: none; /* Remove border */
  color: black; /* Black text color */
  padding: 10px 10px; /* Button padding */
  text-align: center; /* Center text */
  text-decoration: none; /* Remove text decoration */
  display: inline-block; /* Make button an inline-block element */
  font-size: 16px; /* Button text size */
  margin: 4px 2px; /* Button margin */
  cursor: pointer; /* Add a pointer cursor on hover */
  border-radius: 5px; /* Rounded corners */
  transition: background-color 0.3s ease; /* Add a transition effect */
  text-decoration: none; /* Remove underline from text */
}




.movie-list-item-button-2{
    padding: 10px;
    background-color: #d2691e;
    color: aliceblue;
    border-radius: 10px;
    outline: none;
    border: none;
    cursor: pointer;
    position: absolute;
    bottom: 10px;
    right: 100px;
    opacity: 0;
    transition: 1s all ease-in-out;

}

.arrow{
    font-size: 100%;
    
    position: absolute;
    background-color:yellow;
    top: 150px;
    right: 0;
    size: 150%;
    color: rgb(0, 0, 0);
    /* opacity: 0.5; */
    cursor: pointer;
}


@media only screen and (max-width: 940px){
    .navbar-container{
        display: none;
    }
}

.topnav {
  padding-bottom: 5px;
overflow: hidden;
background-color: transparent;
}

.topnav a {
float: left;
display: block;
color: black;
text-align: center;
padding: 14px 16px;
text-decoration: none;
font-size: 17px;
}

.topnav a:hover {
background-color: #ddd;
color: black;
}

.topnav a.active {
background-color: #2196F3;
color: white;
}

.topnav .search-container {
float: right;
}

.topnav input[type=text] {
padding: 6px;
margin-top: 8px;
font-size: 17px;
border: none;
}

.topnav .search-container button {
float: right;
padding: 6px 10px;
margin-top: 8px;
margin-right: 16px;
background: #ddd;
font-size: 17px;
border: none;
cursor: pointer;
}

.topnav .search-container button:hover {
background: #ccc;
}

@media screen and (max-width: 600px) {
.topnav .search-container {
  float: none;
}
.topnav a, .topnav input[type=text], .topnav .search-container button {
  float: none;
  display: block;
  text-align: left;
  width: 100%;
  margin: 0;
  padding: 14px;
}
.topnav input[type=text] {
  border: 1px solid #ccc;  
}
}
    
.text-center mt-5 mb-4{
  color:white;
}
    
</style>
</head>

<body>

    <div id="header">
        <div class="container">
            <nav>
                <img src="pic/logo.png" class="logo">
                <ul id="sidemenu">
                    <li><a href="#wel">Home</a></li>
                    <li><button class="button2"><a href="LoginForm.php">Buy Tickets</a></button></li>
                    <li><a href="#movie">Movies</a></li>
                    <li><a href="feedback.php">About Us</a></li>
                    <li><a href="Offer.php">Offers</a></li>
                    <li><a href="LoginForm.php">Login</a></li>
                    <!-- <li><a href="feedback.html">Login</a></li> -->
                    <!-- <i class="fas fa-times" onclick="closemenu()"></i> -->
                </ul>
                <i menu onclick="openmenu()"></i>
                <?php
include 'dp.php';

// Check if a search query is set
$search = isset($_GET['search']) ? $_GET['search'] : '';
$movies = [];

// Only query the database if there's a valid search term
if (!empty($search)) {
    $sql = "SELECT * FROM movies WHERE title LIKE '%$search%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $movies[] = $row;
        }
    }
}
?>
<style>form {
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 20px 0;
}

input[type="text"] {
    width: 250px;
    padding: 10px;
    border: 2px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    outline: none;
    transition: border-color 0.3s ease;
}

input[type="text"]:focus {
    border-color: #007BFF;
}

button {
    padding: 10px 20px;
    background-color: #717171;
    color: #fff;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    margin-left: 10px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #0056b3;
}
</style>
<form action="homesam.php" method="get">
    <input type="text" name="search" placeholder="Search for a movie..." value="<?php echo htmlspecialchars($search); ?>" required>
    <button type="submit">Search</button>
</form>

<?php if (!empty($search) && count($movies) > 0): ?>
    <?php foreach ($movies as $row): ?>
        <div class="movie-list-item">
            <a href="#"><img class="movie-list-item-img" src="<?php echo $row['image_path']; ?>" alt="<?php echo $row['title']; ?>"></a>
            <span class="movie-list-item-title"><?php echo $row['title']; ?></span>
            <br>
            <button class="movie-list-item-button"><a href="<?php echo $row['ticket_url']; ?>">Buy Ticket</a></button>
            <button class="movie-list-item-button1"><a href="<?php echo $row['trailer_url']; ?>">Watch Trailer</a></button>
        </div>
    <?php endforeach; ?>
<?php elseif (!empty($search)): ?>
    <p>No movies found matching your search.</p>
<?php endif; ?>

<script>
window.addEventListener('load', function () {
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.has('search')) {
        // Clear the search parameter from the URL after displaying results
        const cleanUrl = window.location.pathname;
        window.history.replaceState({}, document.title, cleanUrl);
    }
});
</script>

                
            </nav>
          
 </div>
 
<br><br><br><br><br>
 <h1><br><br>Cinepex Cinema</h1>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="pic/kongfun.jpg" style="width:100%" >
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="pic/wonka.jpg" style="width:100%" >
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="pic/KONGeN.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="pic/chiken.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="pic/bee.jpg" style="width:100%">
  <div class="text"></div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
  <span class="dot"></span>
</div>
<br>
<div class="wel" id="wel">
    <h1>Welcome to Cinepex Cinema</h1>
    <p>Welcome to Cinepex Cinema, Your ultimate entertainment destination! We are a leading cinema chain that offers an unparalleled movie-watching experience with our state-of-the-art technology and comfortable seating. Our diverse movie selection caters to all ages and tastes, from the latest blockbusters to indie darlings, and everything in between.

        At Cinepex Cinema, we are committed to providing our customers with an exceptional <br>cinematic experience. Our top-notch sound systems, crystal-clear visuals, and spacious theaters ensure that you enjoy every moment of<br> your visit. Whether you're catching up with the latest releases or watching a classic film, our goal is to make your visit to Cinepex<br> Cinema a memorable one.
        
        So why wait? Come and experience the magic of movies like never before at Cinepex Cinema. <br>We look forward to seeing you soon!</p>
</div>
<!-- <br> <button class="movie-list-item-button"><a href="search.php">More Movie</a></button><h2 style="color:white;">Click here check movie details ..... </h2> -->
<div class="nn" id="movie"><h1>Now Showing</h1></div><div class="container  my-5" style="max-width:50%">
        <!-- <div class="text-center mt-5 mb-4" >
           
            <h3 style="color:white;">Search this movie here</h3>
        </div>
        <input type="text" class="form-control" id="cineplex" autocomplete="off" placeholder="Search...."> -->
    </div>
    <div id="searchresult" style="color:white;"></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript"> 
        $(document).ready(function(){
            $("#cineplex").keyup(function(){
                var input = $(this).val();
                if(input != ""){
                    $.ajax({
                        url: "livesearch.php",
                        method: "post",
                        data: {input: input},
                        success: function(data){
                            $("#searchresult").html(data);
                        }
                    });
                } else {
                    $("#searchresult").css("display", "none");
                }
            });
        });
    </script>


<!-- <div class="movie-list-container">
    <h1 class="movie-list-title"></h1>
      <div class="movie-list-wrapper">
        <div class="movie-list">
       

          <div class="movie-list-item">
            <a href="Crak.php"><img class="movie-list-item-img" src="pic/crakn.jpg" alt=""></a>
            <span class="movie-list-item-title"></span>
             <button class="movie-list-item-button"><a href="#">Buy Tiket</a></button>
              <button class="movie-list-item-button1"><a href="https://youtu.be/8xjSvwi7W-0?si=pODpFD_JO9h0eAzC">Watch trailer</a></button>
          </div>

          <div class="movie-list-item">
            <a href="Wonka.php"><img class="movie-list-item-img" src="pic/wonka.jpg" alt=""></a>
            <span class="movie-list-item-title"></span>
             <button class="movie-list-item-button"><a href="#">Buy Tiket</a></button>
              <button class="movie-list-item-button1"><a href="https://youtube.com/watch?v=otNh9bTjXWg&t=42s">Watch trailer</a></button>
          </div>

          <div class="movie-list-item">
            <a href="kungfu.php"><img class="movie-list-item-img" src="pic/kongfun.jpg" alt=""></a>
            <span class="movie-list-item-title"></span>
             <button class="movie-list-item-button"><a href="#">Buy Tiket</a></button>
              <button class="movie-list-item-button1"><a href="https://www.youtube.com/watch?v=_inKs4eeHiI">Watch trailer</a></button>
          </div>

          <div class="movie-list-item">
            <a href="beekeper.php"><img class="movie-list-item-img" src="pic/been.jpg" alt=""></a>
            <span class="movie-list-item-title"></span>
             <button class="movie-list-item-button"><a href="#">Buy Tiket</a></button>
              <button class="movie-list-item-button1"><a href="https://youtu.be/8xjSvwi7W-0?si=pODpFD_JO9h0eAzC">Watch trailer</a></button>
          </div>
          <div class="movie-list-item">
            <img class="movie-list-item-img" src="pic/apeSin.jpg" alt="">
            <span class="movie-list-item-title"></span>
             <button class="movie-list-item-button"><a href="#">Buy Tiket</a></button>
              <button class="movie-list-item-button1"><a href="https://youtu.be/wYwIlq3t3gw?si=crYSRcaYKiGa1cI3">Watch trailer</a></button>
          </div>

          <div class="movie-list-item">
            <img class="movie-list-item-img" src="pic/bobn.jpg" alt="">
            <span class="movie-list-item-title"></span>
             <button class="movie-list-item-button"><a href="#">Buy Tiket</a></button>
              <button class="movie-list-item-button1"><a href="https://youtu.be/ajw425Kuvtw?si=uZHdDjTyCoeHuSLJ">Watch trailer</a></button>
          </div>

          <div class="movie-list-item">
            <img class="movie-list-item-img" src="pic/kongn.jpg" alt="">
            <span class="movie-list-item-title"></span>
             <button class="movie-list-item-button"><a href="#">Buy Tiket</a></button>
              <button class="movie-list-item-button1"><a href="https://www.youtube.com/watch?v=lV1OOlGwExM&t=9s">Watch trailer</a></button>
          </div>

          <div class="movie-list-item">
            <img class="movie-list-item-img" src="pic/1970sin.jpg" alt="">
            <span class="movie-list-item-title"></span>
             <button class="movie-list-item-button"><a href="#">Buy Tiket</a></button>
              <button class="movie-list-item-button1"><a href="https://youtu.be/TLQMvRYc2yQ?si=RaeRnkytzEO-OvkZ">Watch trailer</a></button>
          </div>

        </div>

        <i class="fa fa-arrow-right arrow" aria-hidden="true" style="font-size: 300% ; "></i>

      </div>
      
  </div>

</div> -->



<?php
include 'dp.php';

$sql = "SELECT * FROM movies";
$result = $conn->query($sql);
?>



<div class="movie-list-container">
    <h1 class="movie-list-title">Trending Movies</h1>
    <div class="movie-list-wrapper">
        <div class="movie-list">
            <?php while ($row = $result->fetch_assoc()): ?>
                <div class="movie-list-item">
                    <a href="#"><img class="movie-list-item-img" src="<?php echo $row['image_path']; ?>" alt="<?php echo $row['title']; ?>"></a>
                    <span class="movie-list-item-title"><?php echo $row['title']; ?></span>
                   <br> <button class="movie-list-item-button"><a href="<?php echo $row['ticket_url']; ?>">Buy Ticket</a></button>
                    <button class="movie-list-item-button1"><a href="<?php echo $row['trailer_url']; ?>">Watch Trailer</a></button>
                </div>
            <?php endwhile; ?>
        </div>
        <i class="fa fa-arrow-right arrow" aria-hidden="true" style="font-size: 300% ; "></i>

    </div>
</div>

</body>
</html>


<script src="homesam.js"></script>
<div class="nn"><h1>Comming Soon</h1></div>

<div class="box">
  <div class="image"> <img src="pic/madme.jpg" width="25%"><br> <button class="button"><a href="https://youtu.be/_inKs4eeHiI">Watch trailer</a></button> </div> 
  <div class="image"> <a href="kong.html"><img src="pic/GkEn.jpg" width="25%"></a> <br><button class="button"><a href="https://youtu.be/lV1OOlGwExM?si=Yhj23FsM9JKRiUa0">Watch trailer</a></button> </div> 
  <div class="image"> <img src="pic/OmEn.jpg" width="25%"> <br><button class="button"><a href="https://youtu.be/H4xk8yLiFwM?si=acgq9M4CuUy3DRL0">Watch trailer</a></button></div> 
  <div class="image"> <img src="pic/DuEn.jpg" width="25%"> <br><button class="button"><a href="https://youtu.be/U2Qp5pL3ovA?si=IoJ3mT-69Sk1c1rW">Watch trailer</a></button></div> 
  <div class="image"> <img src="pic/chaleEn.jpg" width="25%"> <br><button class="button"><a href="https://youtu.be/MDnVk5jIJr0?si=zCE3Mp1o5P7SdGZs">Watch trailer</a></button></div> 
  
  </div>

  
<div class="box">
  <div class="image"> <img src="pic/1Md.jpg" width="25%"><br> <button class="button"><a href="https://youtu.be/_inKs4eeHiI">Watch trailer</a></button> </div> 
  <div class="image"> <a href="kong.html"><img src="pic/madme.jpg" width="25%"></a> <br><button class="button"><a href="https://youtu.be/lV1OOlGwExM?si=Yhj23FsM9JKRiUa0">Watch trailer</a></button> </div> 
  <div class="image"> <img src="pic/figter.jpg" width="25%"> <br><button class="button"><a href="https://youtu.be/H4xk8yLiFwM?si=acgq9M4CuUy3DRL0">Watch trailer</a></button></div> 
  <div class="image"> <img src="pic/ismart.jpg" width="25%"> <br><button class="button"><a href="https://youtu.be/U2Qp5pL3ovA?si=IoJ3mT-69Sk1c1rW">Watch trailer</a></button></div> 
  <div class="image"> <img src="pic/Sihinayaki.jpg" width="25%"> <br><button class="button"><a href="https://youtu.be/MDnVk5jIJr0?si=zCE3Mp1o5P7SdGZs">Watch trailer</a></button></div> 
  
  </div>



<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>



  <div class="footerBottom">
    
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
      <li><a href="feedback.php"> About Us</a></li>
    </ul>
  </div>
    <p>Copyright &copy;2024; Designed by <span class="designer">mr.Chameera</span></p>
  </div>
 </div>  
   
</div>
    
</body>
</html>
 
   


    