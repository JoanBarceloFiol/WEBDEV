<!DOCTYPE html>
<html>
<head>
	<title>Data Base</title>
	<style>
		* {
			margin-left:20px;
		}
	</style>
</head>
<body>
	<h1>Connect Data Base (PHP).</h1>
	<?php
	// Create connection 
	$con=mysqli_connect("localhost","root","password","asix2018"); 

	// Check connection 
	if (mysqli_connect_errno($con))  {  
		echo "Failed to connect to MySQL: " .          mysqli_connect_error();  
	}
	else {
		echo "<p>OK: Connected to the Database.</p>";
	}

	// Operate over Data Base
	// ......................................//

	// Insert table 
	$sql="INSERT INTO treballadors (nom, llinatges, edat) values ('PACO', 'PEREZ', '33')"; 
	if (mysqli_query($con,$sql))  {  
		echo "Inserted row successfully";  
	} else  {  
		echo "Error inserting row: " . mysqli_error($con);  
	} 




	// ......................................//


	mysqli_close($con);

	?>
</body>
</html>
