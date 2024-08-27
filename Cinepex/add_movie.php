<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Movie</title>
</head>
<style>
   body {
    background-image: url("pic/aluth.jpg");
    background-size: cover;
    background-color: black;
    width: 100%;
    height: 100vh;
    background-position: center;
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
    box-sizing: border-box;
    background-attachment: fixed;
    display: flex;
    justify-content: center; /* Centers horizontally */
    align-items: center; /* Centers vertically */
}

form {
    max-width: 600px;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 8px;
    background-color: #f9f9f9;
    box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
}

label {
    display: block;
    margin: 10px 0 5px;
    font-weight: bold;
}

input[type="text"],
input[type="url"],
input[type="file"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

input[type="file"] {
    padding: 3px;
}

button {
    background-color: #007BFF;
    color: white;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    border-radius: 4px;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #0056b3;
}

button:focus {
    outline: none;
}

</style>
<body>
<?php
// Ensure db.php is included correctly
include 'dp.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $ticket_url = $_POST['ticket_url'];
    $trailer_url = $_POST['trailer_url'];

    // Ensure the uploads directory exists
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);

    // Check if the directory exists and is writable
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0755, true); // Create the directory if it doesn't exist
    }

    // Move the uploaded file
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        $sql = "INSERT INTO movies (title, image_path, ticket_url, trailer_url) VALUES ('$title', '$target_file', '$ticket_url', '$trailer_url')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('New movie added successfully.');</script>";
            // echo "New movie added successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Failed to upload image.";
    }
}
?>

<form action="add_movie.php" method="post" enctype="multipart/form-data">
    <label>Title:</label>
    <input type="text" name="title" required><br>
    <label>Image:</label>
    <input type="file" name="image" required><br>
    <label>Ticket URL:</label>
    <input type="url" name="ticket_url"><br>
    <label>Trailer URL:</label>
    <input type="url" name="trailer_url"><br>
    <button type="submit">Add Movie</button>
</form>

</body>
