<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbasename = "test1";



// Create connection
$conn = new mysqli($servername, $username, $password,$dbasename);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>