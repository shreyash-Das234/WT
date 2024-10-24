<html>
<body>
<h2 align="center">Non-looping conditionals</h2><br>
<p> An if statement with curly braces </p>
<h2>
<?php
$bank_balance = 50;
if ($bank_balance < 100)
{
 $money = 1000;
 $bank_balance += $money;
}
echo $bank_balance;
?>
</h2><br>

<p> An if ... else statement with curly braces</p>
<h2>
<?php
$bank_balance = 705;
if ($bank_balance < 100)
{
 $money = 1000;
 $bank_balance += $money;
}
else
{
 $money = 50;
 $bank_balance = $bank_balance-$money;
}
echo $bank_balance;
?>
</h2>

<br>

<p> An if ... elseif ... else statement with curly braces</p>
<h2>
<?php
$bank_balance = 180;
if ($bank_balance < 100)
{
$money = 1000;
$bank_balance += $money;
}
elseif ($bank_balance > 200)
{
$money = 100;
$bank_balance = $bank_balance - $money;
}
else
{
$money = 50;
$bank_balance = $bank_balance - $money;
}
echo $bank_balance;
?>
</h2>

<br>

<p> A switch statement</p>
<h2>

<?php
$page = "About";
switch ($page)
{
case "Home":
	echo "You selected Home";
	break;

case "About":
	echo "You selected About";
	break;

case "News":
	echo "You selected News";
	break;

case "Login":
	echo "You selected Login";
	break;
	
case "Links":
	echo "You selected Links";
	break;
}
?>

</h2>



</body>
</html>



