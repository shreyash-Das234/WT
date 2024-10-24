<html>
<body>
<h2 align="center">Example 4. Executing a system commands</h2><br>
<p> ls   list directory contents </p>
<p> -l   use a long listing format</p>
<p> -r   reverse order while sorting</p>
<p> -t   sort by modification time, newest first</p>
<br>
<p> Output of the linux command <h3>ls -lRGth</h3></p>
<?php // exec.php
$output = shell_exec('ls -lRh ~WTL53/public_html');
echo "<pre>$output</pre>";
?>

<br>
<br>
<h2>Excuting python script</h2>
<?php // exec.php
$output = shell_exec('python3 abc.py');
echo "<pre>$output</pre>";
?>



</body>
</html>

