<?php
$servername = "localhost";
$dbuser = "root";
$password = "";
$db = "onegym";
// Create connection
$conn = new mysqli($servername, $dbuser, $password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>