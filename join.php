<?php

// include '_dbconnect1.php';
require 'dbconnect.php';


$sql = "SELECT * FROM `users`";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);
echo $num;
echo " records found in the DataBase<br>";
while($row = mysqli_fetch_assoc($result)){ 
    echo $row['id'] .  ". hello ". $row['user_name']  ." with email ". $row['email'];
    echo "<br>";
    
    
    
    
    
}
?>
