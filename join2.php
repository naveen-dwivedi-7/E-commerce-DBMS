<?php

// include '_dbconnect1.php';
require 'dbconnect.php';


$sql = "SELECT usr .*, itms.price from users usr, items itms WHERE usr.id=itms.id";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);
echo $num;
echo " records found in the DataBase<br>";
while($row = mysqli_fetch_assoc($result)){ 
    
        echo $row['user_name']; 
        echo $row['email'];   
        echo $row['address'] ; 
        echo $row['user_id']; 
       echo $row['status']; 
        echo $row['price']; 
        echo "<br>";
    
    
    
   
        
    
    
    
    
    
}
?>
