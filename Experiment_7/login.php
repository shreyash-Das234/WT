<?php 

$dbserver = "localhost";
$username = "WTM53";
$password = "M49L5BVG"; 
$db_name = "WTM53_myBANK";


// Create connection
$conn = new mysqli($dbserver, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql1 = "USE ". $db_name . ";";

if ($conn->query($sql1) === TRUE) {
  #echo " ";
} else {
  echo "Error: " . $sql1 . "<br>" . $conn->error;
}


?>
