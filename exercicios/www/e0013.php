<?php
$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connetion
if ($conn->connect_error){
    echo "Exit";
    die("Connection failed: " . $conn->connect_error);
}
echo "Connection successfully";
?>