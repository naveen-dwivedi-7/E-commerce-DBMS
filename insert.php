<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		require 'dbconnect.php';
		$id = $_POST['id'];
		$name = $_POST['name'];
		$price= $_POST['price'];
		
		
		// Performing insert query execution
		// here our table name is college
		 $sql = "INSERT INTO items  VALUES ('$id', 
            '$name', '$price')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$id\n $name\n "
				. "$price");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
