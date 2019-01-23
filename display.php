<!DOCTYPE html>
<html>

<head>
    <style>
        .background{
            background-size: auto;
            background-image:url(img/automobile%20adventure.jpg)
            
        
        }
        .centertext{
        text-align:center;
        text-decoration-color: darkorange;    
        
        }
        
       
        
      

    </style>
    <title></title>
</head>

<body>
<div>
    <table>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>First Model Collected</th>
        </tr>
        <?php
		//connect to database
//		$cnt = mysqli_connect("localhost", "root", "root", "cardata");
		$cnt = mysqli_connect("localhost", "fssa", "Webdevfun1!", "fssa");
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
</div>
</body>

</html>
