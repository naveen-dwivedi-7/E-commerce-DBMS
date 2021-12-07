<?php

// include '_dbconnect1.php';
require 'dbconnect.php';


$sql = "SELECT * FROM `items`";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);
echo $num;
echo " records found in the DataBase<br>";
while($row = mysqli_fetch_assoc($result)){ 
    echo $row['id'] .  ". Hello ". $row['name'] ."with price". $row['price'];
    echo "<br>";
    
    
    
    
    
}
?>