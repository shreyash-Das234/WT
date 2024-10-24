<!DOCTYPE html>
<html>
<head>
<title> All Account holders</title>
<style>
th,td {text-align: right;
 padding: 8px;
 vertical-align: center;}

td:nth-child(1) {text-align: center;}

table,th,td {
   border: 1px solid black;
   border-collapse: collapse;}
</style>
</head>

<body>
<h3 style="background-color:#F5B7B1; text-align:center;">WD Practical Exam 12/04/2024</h3>
<?php
require_once 'login.php';


$sql2 = "Select * from Customers;";

$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
  // output data of each row
  $srno = 1;
  echo "<h2 align=center> Account details </h2>";
?>
<table align=center>
  
  <tr>
    <th>Sr. No.</th>
    <th>Account No.</th>
    <th>Balance</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Acount Type</th>
  </tr>
 
<?php
  while($row = $result2->fetch_assoc()) {
    
    echo "<tr>";
    echo "<td>" . $srno . "</td>";
    echo "<td>" . $row["AccountNo"] . "</td>";
    echo "<td>" . $row["Balance"] . "</td>";
    echo "<td>" . $row["FirstName"] . "</td>";
    echo "<td>" . $row["LastName"] . "</td>";
    echo "<td>" . $row["ACtype"] . "</td>";
    echo "<tr>";
    $srno = $srno + 1;
  }
  
}
?>
 </table>   
<?php

$conn->close();
?>
<a href="index.html"><p> Home</p> </a> 
</body>
</html>
