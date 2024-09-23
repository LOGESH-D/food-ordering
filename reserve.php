<?php
$servername = "localhost";
$username = "root"; // your MySQL username
$password = ""; // your MySQL password
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
$phone = $_POST['phone'];
$food_type = $_POST['food_type'];
$biryani_quantity = $_POST['biryani_quantity'];
$table_quantity = $_POST['table_quantity'];
$date = $_POST['date'];
$time = $_POST['time'];
$message = $_POST['message'];

// Insert data into the reservations table
$sql = "INSERT INTO reservations (name, email, phone, food_type, biryani_quantity, table_quantity, date, time, message)
        VALUES ('$name', '$email', '$phone', '$food_type', '$biryani_quantity', '$table_quantity', '$date', '$time', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Reservation successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
