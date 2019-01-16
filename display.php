<!DOCTYPE html>
<html>
<head>
    <style background=img src="img/Silhouette%20car.jpg"></style>
    <title></title>
</head>
<body>
    
    <table>
	<tr>
		<th>image</th><th>name</th><th>email</th><th>user</th>
	</tr>

	<?php
		//connect to database
		$cnt = mysqli_connect("localhost", "root", "root", "cardata");
		//sql statement to capture all data from a table
		$sql = "SELECT * FROM carinfo";
		//query by connecting and adding sql statement
		$result = mysqli_query($cnt,$sql);
		//print_r($result);
		foreach($result as $v) {
			//print_r($v);
			echo '<br>';
			echo '<tr><td>'.$v['firstName'].'</td><td>'.$v['lastName'].'</td><td>'.$v['email'].'</td><td>'.$v['firstModel'].'</td></tr>';
		}
		//close the connection
		mysqli_close($cnt); // Closing Connection
	?>
</table>

</body>
</html>


