<html>
<body>
<h2 align="center">Example 2. Returning values from a function by reference</h2><br>
<p> Output </p>
<?php
$a1 = "vivekanand";
$a2 = "institute of";
$a3 = "technology";
echo "<h1>". $a1 . " " . $a2 . " " . $a3 . "</h1><br>";
fix_names($a1, $a2, $a3);
echo "<h1>". $a1 . " " . $a2 . " " . $a3;
function fix_names(&$n1, &$n2, &$n3)
{
$n1 = ucfirst(strtolower($n1));
$n2 = ucfirst(strtolower($n2));
$n3 = ucfirst(strtolower($n3));
}
?>
<br><br><br>
<h2> example2.php </h2>
<image src= "images/example2.png" border=1px>
</body>
</html>


