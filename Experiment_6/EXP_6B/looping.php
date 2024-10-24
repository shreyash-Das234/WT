<html>
<body>
<h2 align="center">Looping in php</h2><br>
<p> A while loop </p>
<h2>
<?php
$count = 1;
while ($count <= 12)
{
echo "$count times 12 is " . $count * 12 . "<br>";
++$count;
}
?>
</h2><br>


<p> A do ... while loop for printing the times table for 8 </p>
<h2>
<?php
$count = 1;
do {
echo "$count times 8 is " . $count * 8 . "<br>";
}
while (++$count <= 10);
?>
</h2><br>

<p> Table for 15 using a for loop </p>
<h2>
<?php
for ($count = 1 ; $count <= 10 ; ++$count)
echo "$count times 15 is " . $count * 15 . "<br>";
?>
</h2><br>
</body>
</html>



