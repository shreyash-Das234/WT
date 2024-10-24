<!DOCTYPE html>
<html>
<head>
<title> Ad New </title>
</head>

<body>
<h3 style="background-color:#F5B7B1; text-align:center;">WD Practical Exam 12/04/2024</h3>
<?php
$AccountNo = $_GET['account_number'];
$Balance = $_GET['deposit_ini'];
$FirstName = $_GET['fname'];
$LastName = $_GET['lname'];
$ACtype = $_GET['ACtype'];
$Mobile1 = $_GET['mobile1'];
$Mobile2 = $_GET['mobile2'];

require_once 'login.php';


$sql1 = "USE ". $db_name . ";";

$sql2 = "INSERT INTO Customers(AccountNo,Balance,FirstName,LastName,ACtype) VALUES ('$AccountNo',$Balance,'$FirstName','$LastName','$ACtype');";

$sql3 = "INSERT INTO Contact_details(AccountNo,Mobile) VALUES ('$AccountNo','$Mobile1');";
$sql4 = "INSERT INTO Contact_details(AccountNo,Mobile) VALUES ('$AccountNo','$Mobile2');";

if ($conn->query($sql1) === TRUE) {
  #echo " ";
} else {
  echo "Error: " . $sql1 . "<br>" . $conn->error;
}

if ($conn->query($sql2) === TRUE) {
  echo "New account added <br>" . "Account No:".$AccountNo . "<br> First Name:". $FirstName . "<br> Last Name:" . $LastName ."<br> Account Type:" . $ACtype . "<br> Opening Balance:" . $Balance ;
} else {
 echo "Error: " . $sql2 . "<br>" . $conn->error;
  
}

if ($conn->query($sql3) === TRUE) {
  echo "<br> Mobile-1 added:". $Mobile1;
} else {
  echo "Error: " . $sql3 . "<br>" . $conn->error;
}

if ($conn->query($sql4) === TRUE) {
  echo "<br> Mobile-2 added:". $Mobile2;
} else {
  echo "Error: " . $sql4 . "<br>" . $conn->error;
}


$conn->close();
?>
<a href="index.html"><p> Home</p> </a> 
</body>
</html>
