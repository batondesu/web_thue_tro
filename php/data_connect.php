<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "room_rent";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
$conn -> set_charset('utf8');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>