<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbasename = "test1";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbasename);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>