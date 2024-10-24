<html>
<body>
<h2 align="center">Example 1. Returning multiple values in an array</h2><br>
<p> Output </p>
<?php
$names = fix_names("VIVEKANAND", "institute of", "teCHnoLOgy");
echo "<h1>". $names[0] . " " . $names[1] . " " . $names[2];
function fix_names($n1, $n2, $n3)
{
$n1 = ucfirst(strtolower($n1));
$n2 = ucfirst(strtolower($n2));
$n3 = ucfirst(strtolower($n3));
return array($n1, $n2, $n3);
}
?>
<br><br><br>
<h2> example1.php </h2>
<image src= "images/example1.png" border=1px>
</body>
</html>


