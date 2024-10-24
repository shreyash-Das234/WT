<?php
require_once '../Experiment_7/login.php';
$sql2 = "Select count(*) as F1 from Customers where Balance<10000;";
$sql3 = "Select count(*) as F1 from Customers where Balance>10000 and Balance<50000;";
$sql4 = "Select count(*) as F1 from Customers where Balance>50000 and Balance<100000 ;";
$sql5 = "Select count(*) as F1 from Customers where Balance>100000;";



$result = $conn->query($sql2);
if ($result->num_rows > 0) {
$row = $result->fetch_assoc();
$cat1=$row["F1"];
}

$result = $conn->query($sql3);
if ($result->num_rows > 0) {
$row = $result->fetch_assoc();
$cat2=$row["F1"];
}

$result = $conn->query($sql4);
if ($result->num_rows > 0) {
$row = $result->fetch_assoc();
$cat3=$row["F1"];
}


$result = $conn->query($sql5);
if ($result->num_rows > 0) {
$row = $result->fetch_assoc();
$cat4=$row["F1"];
}


$conn->close();




//select count(*) as F1 from Customers  where Balance >10000 and Balance <100000;

$Bdata = array();
$bar_label = array("<10K", "10K-50K", "50k-1L", ">1L");
$bar_colors = array("#9FE2BF", "#6495ED","#FFBF00", "#DE3163");
$bar_val = array($cat1,$cat2,$cat3,$cat4);


$point = array("Bcolor" => $bar_colors,"Bval" => $bar_val,"Blabel" => $bar_label);
array_push($Bdata,$point);

$myJSON = json_encode($Bdata);

echo $myJSON;









?>
