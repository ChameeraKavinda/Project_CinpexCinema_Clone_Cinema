<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Climplix Cinema</title>
    <link rel="stylesheet" href="About.css">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >

    <style>
        * {box-sizing: border-box;}
body {font-family: Verdana, sans-serif; 
    background-image: url("pic/aluth.jpg") ;
    background-size: cover; 
    background-color: black;
    width: 100%;
    height: 100vh;
    background-position: center;
    background-size: cover;
    align-items: right;
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-secolorrif;
    box-sizing: border-box;
}

html{
    scroll-behavior: smooth;
}
body{
    background: #080808;
    color: #fff;
}
#header{
    width: 100%;
    height: 100vh;
    background-image: url(pic/aluth.jpg);
    background-position: center;
    background-size: cover;
    align-items: right;
}
.container{
    padding: 10px 10%;
}
nav{
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
}
.logo{
    width: 25%;
    
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
.header-text{
    margin-top: 20%;
    font-size: 30px;
}
.header-text h1{
    font-size: 60px;
    margin-top: 20px;
}
.header-text h1 span{
color: #ff004f;
}


    
</style>
</head>

<body>
    <div id="header">
        <div class="container">
            <nav>
                <img src="pic/logo.png" class="logo">
                <ul id="sidemenu">
                    <li><a href="homesam.php">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="feedback.php">Services</a></li>
                    <li><a href="#">Contact</a></li>
                    <i class="fas fa-times" onclick="closemenu()"></i>
                </ul>
                <i menu onclick="openmenu()"></i>
            </nav>
            

 <br> <br> 
 <div class="container">
   <div class="event">
    <h1 style="font: size 25px;">🎉 Movie Buff Extravaganza! 🍿🎬</h1><br><br>
       <img src="pic/Special-Offer.jpg" alt="Upcoming Movie Premiere" style="width:50%" >    <br><button class= "btn btn-primary my-5"><a href="userlogin.php" class="text-light">Buy Tiket</a></button>

       <br><br><p>Join us for an unforgettable cinematic experience with our exclusive Movie Buff Extravaganza at Cineplex Cinema! We're rolling out the red carpet for all movie enthusiasts, offering an unbeatable promotion that will make your movie night truly special.</p>
       <br><br><h3>🌟 Date: 2024/03/13</h3>
       <br><br><h3>🎟️ Special Offer: Buy One, Get One Free!</h3>
       <br><br><p>For every ticket purchased during the promotion period, get a second ticket absolutely <b>FREE!</b> Bring your friends, family, or that special someone for a fantastic night out at the movies without breaking the bank.</p>
       <br><br><h3>🍿 Free Popcorn Upgrade!!</h3>
       <br><br><p>Upgrade your movie experience with a complimentary large popcorn when you purchase a combo deal. Enjoy the perfect blend of buttery goodness while you immerse yourself in the latest blockbusters.</p>
       <br><br><h3>🎁 Exclusive Movie Merchandise Giveaways!</h3>
       <br><br><p>The first 50 customers each day will receive a free limited-edition movie merchandise item. From collectible posters to exclusive keychains, these giveaways are perfect for true film aficionados.</p>
       <br><br><h3>🎶 Live Entertainment and Prizes!</h3>
       <br><br>Experience the thrill before the movie begins with live performances and exciting giveaways in our lobby. You might just walk away with exclusive prizes, free tickets, or even a VIP cinema experience!<p></p>
       <br><br><h3>🎊 How to Redeem:</h3>
       <br><br><p>
        Certainly! Here's an example of a special promotion for a cinema theater:
        
        🎉 Movie Buff Extravaganza! 🍿🎬
        
        Join us for an unforgettable cinematic experience with our exclusive Movie Buff Extravaganza at [Your Cinema Name]! We're rolling out the red carpet for all movie enthusiasts, offering an unbeatable promotion that will make your movie night truly special.
        
        🌟 Date: [Specify the dates of the promotion]
        
        🎟️ Special Offer: Buy One, Get One Free!
        
        For every ticket purchased during the promotion period, get a second ticket absolutely FREE! Bring your friends, family, or that special someone for a fantastic night out at the movies without breaking the bank.
        
        🍿 Free Popcorn Upgrade!
        
        Upgrade your movie experience with a complimentary large popcorn when you purchase a combo deal. Enjoy the perfect blend of buttery goodness while you immerse yourself in the latest blockbusters.
        
        🎁 Exclusive Movie Merchandise Giveaways!
        
        The first 50 customers each day will receive a free limited-edition movie merchandise item. From collectible posters to exclusive keychains, these giveaways are perfect for true film aficionados.
        
        🎶 Live Entertainment and Prizes!
        
        Experience the thrill before the movie begins with live performances and exciting giveaways in our lobby. You might just walk away with exclusive prizes, free tickets, or even a VIP cinema experience!
        
        🎊 How to Redeem:</p>
        
        <p><br>1. Purchase your tickets at the box office or online during the promotion period.
        <br>2. Enjoy the movie and your complimentary perks!</p><br><br>
        <p>Don't miss out on this incredible Movie Buff Extravaganza at <b>CinePlex Cinema, Kandy</b>. It's more than just a movie night – it's a celebration of cinema!
        
        Terms and conditions apply. Limited availability. Check our website for more details.</p>
   </div> <br> <br> <br> <br> <br> <br>

 </div>
 </div>
 </div>
 
   
</body>

    