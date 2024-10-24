<!DOCTYPE html>
<html>
<body>

<?php
$x = 200; // global 
 
function verify() {
  
  $x; // local 
  echo "<h2>Variable x inside function is: $x</h2>";
  
  $x = 765; // local 
  echo "<h2>Variable x inside function is: $x</h2>";
} 

verify();
echo "<h2 style=color:red;>Variable x outside function is: $x</h2>";
?>
<a href="index.html"><p> Home </p> </a>
</body>
</html>
