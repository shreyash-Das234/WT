<!DOCTYPE html>
<html>
<head>
<title> Transfer ack.</title>
</head>

<body>
<h3 style="background-color:#F5B7B1; text-align:center;">WD Practical Exam 12/04/2024</h3>
<?php
$from_account = $_GET['from_account'];
$to_account = $_GET['to_account'];
$amount = $_GET['amount'];

require_once 'login.php';


$sql1 = "USE " . $db_name . ";";

$sql2 = "START TRANSACTION;";
$sql3 = "UPDATE Customers SET Balance = Balance-$amount WHERE AccountNo='$from_account';";
$sql4 = "UPDATE Customers SET Balance = Balance+$amount WHERE AccountNo='$to_account';";
$sql5 = "COMMIT;";


if ($conn->query($sql1) === TRUE) {
  #echo " ";
} else {
  echo "Error: " . $sql1 . "<br>" . $conn->error;
}

if ($conn->query($sql2) === TRUE) {
  echo "Transaction started ";
} else {
  echo "Error: " . $sql2 . "<br>" . $conn->error;
} 

if ($conn->query($sql3) === TRUE) {
  echo "<br>Amount debited from".$from_account;
} else {
  echo "Error: " . $sql3 . "<br>" . $conn->error;
} 

if ($conn->query($sql4) === TRUE) {
  echo "<br>Amount credited to".$to_account;
} else {
  echo "Error: " . $sql4 . "<br>" . $conn->error;
} 

if ($conn->query($sql5) === TRUE) {
  echo "<br>Transfer successful ";
} else {
  echo "Error: " . $sql5 . "<br>" . $conn->error;
}  


$conn->close();
?>
<a href="index.html"><p> Home</p> </a> 
</body>
</html>
