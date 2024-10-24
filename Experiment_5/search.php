<?php

    require_once '../Experiment_7/login.php';
    $query=$_get['sesrch_str'];
    $sql = "SELECT FirstName FROM Customers WHERE FirstName LIKE '%".$query."%'  LIMIT 10";   
    
    $result = $conn->query($sql);  
 
    $json = [];  
    while($row = $result->fetch_assoc()){  
         $json[] = $row['FirstName'];
    }  
  
    echo json_encode($json); 
?>