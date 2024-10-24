<html>
<body>
<h2 align="center">Example 3. Returning values in global variables</h2><br>
<p> Output </p>
<?php
$a1 = "vivekanand";
$a2 = "institute of";
$a3 = "technology";
echo "<h1>". $a1 . " " . $a2 . " " . $a3 . "</h1><br>";
fix_names();
echo "<h1>". $a1 . " " . $a2 . " " . $a3;
function fix_names()
{
global $a1; $a1 = ucfirst(strtolower($a1));
global $a2; $a2 = ucfirst(strtolower($a2));
global $a3; $a3 = ucfirst(strtolower($a3));
}
?>
<br><br><br>
<h2> example3.php </h2>
<image src= "images/example3.png" border=1px>
</body>
</html>


