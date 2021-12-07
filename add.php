<?php

// include '_dbconnect***.php';
require 'dbconnect.php';


$sql = "INSERT  INTO items(id, name, price)
VALUES (15, 'iphone', 1200)";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);
echo $num;
echo " records added in the DataBase<br>";
while($row = mysqli_fetch_assoc($result)){ 
    
        echo $row['id']; 
        echo $row['name'];   
        echo $row['price'] ; 
        
        echo "<br>";
    
    
    
   
        
    
    
    
    
    
}
?>