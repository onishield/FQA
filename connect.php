<?php
//$servername = "localhost";
//$username = "username";
//$password = "password";

// Create connection
$conn = new mysqli('localhost', 'root','', 'fqa');
mysqli_set_charset($conn,"utf8");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
