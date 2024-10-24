<!DOCTYPE html>
<?php
$number = $_GET["N1"];
?>

<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  margin-left: auto;
  margin-right: auto;
}
td, th {
  border: 1px solid #00d00A;
  text-align: center;
  padding: 8px;
}
tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
<h2 align=center>Table of <?php echo $number; ?><br></h2>
<table>
  <tr>
    <th>Equation</th>
    <th>Value</th>
  </tr>
<?php

for($i=1; $i<=10; $i++){
?>
  <tr>
    <td><?php echo $i," X ",$number, " ="; ?></td>
    <td><?php echo $i*$number; ?></td>
  </tr>

<?php
}
?>
</table>
<a href="index.html"><p> Home </p> </a>
</body>
</html>
