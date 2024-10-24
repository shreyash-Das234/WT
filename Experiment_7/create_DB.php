<?php
require_once 'login.php';


$sql1 = "CREATE DATABASE " . $db_name . ";";

$sql2 = "USE ". $db_name. ";";

$sql3 = "CREATE TABLE Customers (
AccountNo char(5),
Balance decimal(15,2),
FirstName varchar(25),
LastName varchar(25),
ACtype char (10),
primary key (AccountNo));";

$sql4 = "CREATE TABLE Contact_details (
AccountNo char(5),
Mobile char(10),
foreign key (AccountNo) references Customers(AccountNo));";

$sql5 = "INSERT INTO Customers VALUES ('10023',3400.56,'Aakash','Shah','Savings'),
('10040',6770.30,'Bhavesh','Joshi','Savings'),
('20066',6200000,'Jayesh','Kumbhar','Current'),
('20560',725000.70,'Divya','Krishnan','Current'),
('10046',200000.70,'Anagha','Deshpande','Savings'),
('10016',84000,'Pradip','Patil','Savings'),
('10066',2680.50,'Bhaskar','Sharma','Savings'),
('10045',834,'Amit','Deshpande','Savings'),
('20360',2004538,'Sonal','Mahadik','Current'),
('10089',542890,'Javed','Tamboli','Savings'),
('20798',5643.90,'Prapti','Vora','Current');";

$sql6 = "INSERT INTO Contact_details VALUES ('10023','9800010023'),
('10040','9800010040'),
('20066','9800020066'),
('20066','9900020066'),
('20560','9800020560'),
('10046','9800010046'),
('10016','9800010016'),
('10016','8800010016'),
('10066','9800010066'),
('10045','9800010045'),
('10045','9700010045'),
('20360','9800020360'),
('20360','9900020360'),
('10089','9800010089'),
('20798','9800020798');";


if ($conn->query($sql1) === TRUE) {
  echo "Database created successfully <br>";
} else {
  echo "Error: " . $sql1 . "<br>" . $conn->error;
}

if ($conn->query($sql2) === TRUE) {
  echo "Database Changed <br>";
} else {
  echo "Error: " . $sql2 . "<br>" . $conn->error;
}

if ($conn->query($sql3) === TRUE) {
  echo "Customers Table created <br>";
} else {
  echo "Error: " . $sql3 . "<br>" . $conn->error;
}

if ($conn->query($sql4) === TRUE) {
  echo "Contact_details Table created <br>";
} else {
  echo "Error: " . $sql4 . "<br>" . $conn->error;
}

if ($conn->query($sql5) === TRUE) {
  echo "Accounts added <br>";
} else {
  echo "Error: " . $sql5 . "<br>" . $conn->error;
}

if ($conn->query($sql6) === TRUE) {
  echo "Contact details added <br>";
} else {
  echo "Error: " . $sql6 . "<br>" . $conn->error;
}
$conn->close();
?>
