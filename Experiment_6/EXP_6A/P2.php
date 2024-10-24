<!DOCTYPE html>
<html>
<body>

<?php
$banks = array("ICICI", "SBI", "HDFC");
echo gettype($banks);
echo "<h1>" . $banks[0] . ", " . $banks[1] . ", " . $banks[2] . "</h1>" ;

$name = "Bank Balance";

$amount1 = 3200;

$amount2 = 5470.75;

echo "<br><h1>", $name, "</h1>" ;

echo "<br><h1 style=color:blue;>", $amount1, "</h1>" ;

echo "<br><h1 style=color:blue;>", $amount2, "</h1>" ;

?>
<a href="index.html"><p> Home </p> </a>
</body>
</html>




