<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "taste_hunt";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect POST data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Insert data into the contacts table
$sql = "INSERT INTO contacts (name, email, message)
        VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Message sent successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
