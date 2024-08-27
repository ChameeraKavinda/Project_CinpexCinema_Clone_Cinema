<?php
include("connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Email = $_POST['Email'] ?? '';
    $Movie_Name = $_POST['Movie_Name'] ?? '';
    $Number_Of_Seat = $_POST['Number_Of_Seat'] ?? '';
    $USD_Total = $_POST['USD_Total'] ?? '';

    // Check if required fields are not empty
    if (!empty($Email) && !empty($Movie_Name) && !empty($Number_Of_Seat) && !empty($USD_Total)) {
        
        // Check if the email exists in the User_Register_Sheet table
        $checkEmailSql = "SELECT COUNT(*) FROM User_Register_Sheet WHERE Email = ?";
        $stmt = mysqli_prepare($con, $checkEmailSql);
        mysqli_stmt_bind_param($stmt, 's', $Email);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $emailCount);
        mysqli_stmt_fetch($stmt);
        mysqli_stmt_close($stmt);

        if ($emailCount > 0) {
            // If email exists, proceed with the booking
            $sql = "INSERT INTO booking (Email, Movie_Name, Number_Of_Seat, USD_Total) VALUES (?, ?, ?, ?)";
            $stmt = mysqli_prepare($con, $sql);
            mysqli_stmt_bind_param($stmt, 'ssss', $Email, $Movie_Name, $Number_Of_Seat, $USD_Total);

            if (mysqli_stmt_execute($stmt)) {
                echo '<script>alert("Thank you! Your booking has been successful."); window.location.href="homesam.php";</script>';
                exit();
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($con);
            }

            mysqli_stmt_close($stmt);
        } else {
            // If email does not exist, show an error message
            echo '<script>alert("Error: Email does not exist in our records. Please register first."); window.location.href="LoginForm.php";</script>';
        }
    } else {
        //echo "Error: Required fields are empty";
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
  <title>Document</title>
  <style>
    .form-button {
      padding-left: 10px;
      border-radius: 5px;
      border: 0;
      font-size: 15px;
      margin: 5px;
      height: 50px;
      width: 140px;
    }
    .form-container {
      flex-direction: column;
      align-items: center;
    }

    .form-container h1 {
      color: aquamarine;
    }
    .button-group {
  display: flex;
  flex-direction: row; /* Ensure buttons are in a row */
  flex-wrap: wrap; /* Allow buttons to wrap to the next line if space is insufficient */
  gap: 10px; /* Adds space between buttons */
  justify-content: center; /* Center buttons horizontally */
  margin: 20px 0; /* Adds margin around the button group */
}

    
    .form-button {
      padding-left: 10px;
      border-radius: 5px;
      border: 2px solid #007BFF;
      font-size: 15px;
      margin: 5px;
      height: 50px;
      width: 140px;
      color: white;
      cursor: pointer;
      text-align: center;
      text-decoration: none;
      line-height: 50px;
      display: inline-block;
      background-color: rgb(0, 18, 50);
      
    }

    .form-button:hover {
      background-color: rgb(47, 211, 211);
      border-color: #007BFF;
    }

    .form-button.selected {
      background-color: orange;
      color: white;
    }
    .button-group1, .button-group2, .button-group3, .button-group4, .button-group5 {
      display: none; /* Initially hide the movie selection buttons */
      flex-direction: column;
      margin-top: 20px;
      align-items: center;
    justify-content: center;
    }

    * {
      box-sizing: border-box;
    }

    body {
      font-family: 'Lato', sans-serif;
      background: linear-gradient(rgba(0, 18, 50, 0.84), rgba(0, 0, 0, 0.95)),
        url("./lloyd-dirks-4SLz_RCk6kQ-unsplash.jpg") bottom;
      background-size: cover;
      color: #fff;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      background-color: rgb(0, 18, 50);
      padding-top: 25px;
    }

    .movie-container {
      margin: 20px 0;
    }

    .movie-container select {
      background-color: #fff;
      font-family: 'Lato', sans-serif;
      border: 0;
      border-radius: 5px;
      font-size: 18px;
      outline: none;
      margin-left: 10px;
      padding: 5px 15px 5px 15px;
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
    }

    .container {
      perspective: 1000px;
      -webkit-perspective: 1000px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    .row-container {
      margin-top: 30px;
    }

    .seat {
      background-color: #444451;
      height: 12px;
      width: 15px;
      margin: 5px;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
      height: 30px;
      width: 35px;
      background: #01163e;
      border: 2px solid #314c81;
      transition: all .2s ease;
    }

    .seat.selected {
      background-color: #6feaf6;
      background-color: #31d7a9;
    }

    .seat.occupied {
    background-color: rgb(207, 66, 66);
}

    .seat:nth-of-type(2) {
      margin-right: 18px;
    }

    .seat:nth-last-of-type(2) {
      margin-left: 18px;
    }

    .seat:not(.occupied):hover {
      cursor: pointer;
      transform: scale(1.2);
    }

    .showcase .seat:not(.occupied):hover {
      cursor: default;
      transform: scale(1);
    }

    .showcase {
      background-color: rgba(0, 0, 0, 0.1);
      padding: 5px 10px;
      border-radius: 5px;
      color: #777;
      list-style-type: none;
      display: flex;
      justify-content: space-between;
    }

    .showcase li {
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 10px;
    }

    .showcase li small {
      margin-left: 2px;
    }

    .row {
      display: flex;
    }

    .screen {
      background-color: #fff;
      height: 70px;
      width: 100%;
      margin: 15px 0;
      transform: rotateX(-45deg);
      box-shadow: 0 3px 10px rgba(255, 255, 255, .7);
    }

    p.text {
      margin: 5px 0;
    }

    p.text span {
      color: #6feaf5;
    }

    .movie-screen {
      margin-top: 30px;
      margin-bottom:-150px;
      text-align: center;
    }

    .movie-screen img {
      max-width: 85%;
    }

    .subtitle {
      position: relative;
      text-align: center;
      font-weight: 600;
      text-transform: uppercase;
      padding: 10px;
      color: #31d7a9;
      font-size: 16px;
      max-width: 270px;
      margin-left: auto;
      margin-right: auto;
    }

    .subtitle:before,
    .subtitle:after {
      position: absolute;
      content: '';
      left: 50%;
      -webkit-transform: translateX(-50%);
      transform: translateX(-50%);
      height: 1px;
      background: #213a69;
    }

    .subtitle:before {
      width: 80%;
      top: 0;
    }

    .subtitle:after {
      width: 100%;
      bottom: 0;
    }

    .text {
      font-size: 18px;
    }

    #count,
    #total {
      font-size: 24px;
      padding: 0 8px;
    }

    .text-wrapper {
      margin-top: 10px;
    }

    @media (max-width: 576px) {
      body {
        padding-top: 30px;
      }

      .movie-container select {
        font-size: 14px;
      }

      .seat {
        height: 21px;
        width: 23px;
      }

      .movie-screen img {
        max-width: 92%;
      }

      .subtitle {
        font-size: 13px;
        padding: 7px;
      }

      .seat:nth-of-type(2) {
        margin-right: 12px;
      }

      .seat:nth-last-of-type(2) {
        margin-left: 12px;
      }

      .movie-screen {
        margin-top: 25px;
        margin-bottom: 20px;
      }

      .text {
        font-size: 14px;
      }

      #count,
      #total {
        font-size: 18px
      }
    }

    .logo-container {
    position: absolute;
            top: 20px; /* Adjust distance from the top */
            left: 20px; /* Adjust distance from the left */
            z-index: 1000; /* Ensure it’s above other content */
    
    padding: 10px;
    background-color: transparent; /* Optional: to make sure the logo is visible */
    border-bottom-left-radius: 10px; /* Optional: to round the bottom-left corner */
}

.logo-container img {
    width: 45%; /* Adjust the size as needed */
    height: auto;
}

.input-box input[type="email"] {
      width: 50%;
      padding: 10px;
      font-size: 14px;
      border: 2px solid #007BFF;
      background-color: rgb(0, 18, 50);
      color:white;
      border-radius: 5px;
      outline: none;
      transition: border-color 0.3s ease;
    }


.inputBox .submit {
  font-size: 20px;
  background-color: orange; 
  color: white; 
  border: none; /* Remove default border */
  border-radius: 12px; /* Rounded corners */
  padding: 12px 24px; /* Padding for the button */
  cursor: pointer; /* Pointer cursor on hover */
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Light shadow effect */
  transition: background-color 0.3s ease, transform 0.3s ease; /* Smooth transitions */
}

.inputBox .submit:hover {
  background-color: #45a049; /* Darker shade on hover */
  transform: translateY(-2px); /* Slight lift effect on hover */
}

.inputBox .submit:active {
  transform: translateY(1px); /* Slight downward press effect */
}


  </style>
</head>
<body>
<div class="logo-container">
       <a href="homesam.php"><img src="pic/logo.png" alt="Logo"></a> 
    </div><br><br><br><br><br><br><br>

  <div class="form-container">
    <form action="tiket.php" method="POST">
    <div class="input-box">
        <h2>Enter Your Email</h2>
        <input type="email" name="Email" placeholder="Enter your Email" required>
      </div>

      <h1>Select a Date</h1>
      <div class="button-group" style=" display: flex;">
        <button type="button" class="form-button" onclick="showMovies('movieButtons1')">Today</button>
        <button type="button" class="form-button" onclick="showMovies('movieButtons2')">Thu, 15 Aug</button>
        <button type="button" class="form-button" onclick="showMovies('movieButtons3')">Fri, 16 Aug</button>
        <button type="button" class="form-button" onclick="showMovies('movieButtons4')">Sat, 17 Aug</button>
        <button type="button" class="form-button" onclick="showMovies('movieButtons5')">Sun, 18 Aug</button>
      </div>

      <!-- Movies button groups -->
      <div id="movieButtons1" class="button-group1">
      <h1>Select a Movie</h1>
        <button type="button" class="form-button" onclick="selectMovie('Garfield')">Garfield</button>
        <button type="button" class="form-button" onclick="selectMovie('Ape Priciple')">අපේ ප්‍රින්සිපල්</button>
        <button type="button" class="form-button" onclick="selectMovie('Kunghu Panda 4')">Kunghu Panda 4</button>
        <button type="button" class="form-button" onclick="selectMovie('Wisal Adare')">විසල් ආදරේ</button>
      </div>
      <div id="movieButtons2" class="button-group2">
      <h1>Select a Movie</h1>
      <button type="button" class="form-button" onclick="selectMovie('Wisal Adare')">විසල් ආදරේ</button>
        <button type="button" class="form-button" onclick="selectMovie('MahaRajaa')">MahaRajaa</button>
        <button type="button" class="form-button" onclick="selectMovie('Garfield')">Garfield</button>
        <button type="button" class="form-button" onclick="selectMovie('Kunghu Panda 4')">Kunghu Panda 4</button>
      </div>
      <div id="movieButtons3" class="button-group3">
      <h1>Select a Movie</h1>
      <button type="button" class="form-button" onclick="selectMovie('Beekeeper')">Beekeeper</button>
        <button type="button" class="form-button" onclick="selectMovie('Wisal Adare')">විසල් ආදරේ</button>
        <button type="button" class="form-button" onclick="selectMovie('Garfield')">Garfield</button>
        <button type="button" class="form-button" onclick="selectMovie('MahaRajaa')">MahaRajaa</button>
      </div>
      <div id="movieButtons4" class="button-group4">
      <h1>Select a Movie</h1>
      <button type="button" class="form-button" onclick="selectMovie('Garfield')">Garfield</button>
        <button type="button" class="form-button" onclick="selectMovie('MahaRajaa')">MahaRajaa</button>
        <button type="button" class="form-button" onclick="selectMovie('Crakk')">Crakk</button>
        <button type="button" class="form-button" onclick="selectMovie('Beekeeper')">Beekeeper</button>
      </div>
      <div id="movieButtons5" class="button-group5">
      <h1>Select a Movie</h1>
      <button type="button" class="form-button" onclick="selectMovie('Adarniya Kathawak')">ආදරණීය කතාවක්</button>
        <button type="button" class="form-button" onclick="selectMovie('Garfield')">Garfield</button>
        <button type="button" class="form-button" onclick="selectMovie('Beekeeper')">Beekeeper</button>
        <button type="button" class="form-button" onclick="selectMovie('MahaRajaa')">MahaRajaa</button>
      </div>
      <script>
    document.querySelectorAll('.form-button').forEach(button => {
      button.addEventListener('click', function() {
        document.querySelectorAll('.form-button').forEach(btn => btn.classList.remove('selected'));
        this.classList.add('selected');
      });
    });
  </script>
      <!-- Hidden inputs to capture the selected data -->
     
      <input type="hidden" name="Movie_Name" id="selectedMovie" value="">
      <input type="hidden" name="Number_Of_Seat" id="selectedCount" value="0">
      <input type="hidden" name="USD_Total" id="selectedTotal" value="0">
<br><br>
      
  </div>
  <div class="movie-container" id="ticket" style="display: none;">
  <h1>Choose Your Seats</h1>
  <label></label>
  <!-- <select id="movie">
      <option value="650">Crack (Rs.650)</option>
      <option value="850">Wonka (Rs.850)</option>
      <option value="550">Kunghu Panda-4 (Rs.550)</option>
      <option value="750">Beekeper (Rs.750)</option>
  </select> -->
</div>
<script>
  // Get references to the button groups and movie container
  const buttons = document.querySelectorAll('.button-group1, .button-group2, .button-group3, .button-group4, .button-group5');
  const movieContainer = document.getElementById('ticket');

  // Function to show the movie container
  function showMovieContainer() {
      movieContainer.style.display = 'block';
  }

  // Add event listeners to each button group to show the movie container on click
  buttons.forEach(button => {
      button.addEventListener('click', showMovieContainer);
  });
</script>
  <div class="container">
    <ul class="showcase">
      <li>
        <div class="seat"></div>
        <small>N/A</small>
      </li>
      <li>
        <div class="seat selected"></div>
        <small>Selected</small>
      </li>
      <li>
        <div class="seat occupied"></div>
        <small>Occupied</small>
      </li>
    </ul>

    <div class="movie-screen">
      <div class="screen"></div>
    </div>

    <div class="row-container">
      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat occupied"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>
      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat occupied"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>
      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat occupied"></div>
        <div class="seat occupied"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>
      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat occupied"></div>
        <div class="seat occupied"></div>
        <div class="seat occupied"></div>
        <div class="seat"></div>
      </div>
      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat occupied"></div>
        <div class="seat"></div>
        <div class="seat occupied"></div>
        <div class="seat"></div>
      </div>
      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat occupied"></div>
        <div class="seat occupied"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>
    </div>

    <p class="text">
      You have selected <span id="count">0</span> seats for a price of $<span id="total">0</span>
    </p>
  </div>

  <script>
    // Show movie selection buttons based on selected date
    function showMovies(buttonGroupId) {
      // Hide all movie button groups
      const buttonGroups = document.querySelectorAll('.button-group1, .button-group2, .button-group3, .button-group4, .button-group5');
      buttonGroups.forEach(group => group.style.display = 'none');
      
      // Show the selected movie button group
      document.getElementById(buttonGroupId).style.display = 'flex';
    }

    // Select a movie and update the hidden input
    function selectMovie(movie) {
      document.getElementById('selectedMovie').value = movie;
      // Adjust the Count and Total values based on seat selections.
      // For now, they are set to default values. You need to implement logic to update them dynamically.
    }

    // Logic to update Count and Total based on seat selections
    const container = document.querySelector('.container');
    const seats = document.querySelectorAll('.row .seat:not(.occupied)');
    const count = document.getElementById('count');
    const total = document.getElementById('total');

    // Update seat count and total
    function updateSelectedCountAndTotal() {
      const selectedSeats = document.querySelectorAll('.row .seat.selected');
      const selectedSeatsCount = selectedSeats.length;

      count.innerText = selectedSeatsCount;
      total.innerText = selectedSeatsCount * 10; // Assume each seat costs $10

      // Update hidden inputs
      document.getElementById('selectedCount').value = selectedSeatsCount;
      document.getElementById('selectedTotal').value = selectedSeatsCount * 10;
    }

    // Seat click event
    container.addEventListener('click', (e) => {
      if (e.target.classList.contains('seat') && !e.target.classList.contains('occupied')) {
        e.target.classList.toggle('selected');

        updateSelectedCountAndTotal();
      }
    });
  </script>
  <br><br>
  <div class="inputBox">
        <button class="submit" style="font-size: 20px;">Buy Ticket</button>
      </div>
    </form>
</body>
</html>
