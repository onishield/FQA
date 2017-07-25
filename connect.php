<?php
//$servername = "localhost";
//$username = "username";
//$password = "password";

// Create connection
$conn = new mysqli('localhost', 'faquser','za0w9dkskm', 'aaafaq');
mysqli_set_charset($conn,"utf8");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>
