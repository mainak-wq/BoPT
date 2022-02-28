<?php
$servername = "localhost";
$username = "bopter";
$password = "Df,y]2_0N9y{";
$database ="bopt";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>