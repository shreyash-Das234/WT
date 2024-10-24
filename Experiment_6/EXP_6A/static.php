<!DOCTYPE html>
<html>
<body>

<?php
function myTest() {
  static $x = 12;
  $y = 23;
  echo " <h2 style=color:blue;> x = ".$x." </h2>";
  echo " <h2 style=color:red;> y = ".$y."</h2> ";
  $x=$x*2;
  $y=$y*2;
}

myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();
?> 
<a href="index.html"><p> Home </p> </a>
</body>
</html>

