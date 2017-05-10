<!DOCTYPE html>
<html>
	<link href="https://fonts.googleapis.com/css?family=Josefin+Slab|Lato|Ubuntu|Open+Sans|Tangerine" rel="stylesheet">
	<style>
		html{
			background: #fff;
			padding: 0;
			margin: 0;
		}
	
		body{
			color: #fff;
			text-align: center;
			background: #000;
			padding: 10px;
			border: 1px solid black;
			box-shadow: 0 4px 9px 0px rgba(12,3,25,0.8);
		}
		p{
			text-align: center;
			font-family: Lato;
			font-size: 15px;
		}
		th{
			font-size: 15px;
			font-style: bold;
			background-color: #fff;
			color: #000;
			text-align: left;
			padding: 0 10px 0 10px;
		}
		td{
			font-size: 14px;
			margin: 1%;
			padding: 0 10px 0 10px;
			text-align: left;
			padding: 0 10px 0 10px;
		}
		table.t01 {
			font-family: 'Ubuntu';
			font-size: 10px;
			padding: 1%;
			margin: 1% auto;
			width: 98%;
			height: 100%;			
			background-color: #000;
			border-bottom: 2px solid #fff;
		}

		.head p{
			font-weight: bold;
		}
	</style>
	<body>
		<div>
			<p>Database Contains</p>
		</div>
		<?php
			$host = "mysql.hostinger.in";
			$username = "u816863816_user";
			$password = "1995august21";
			$db_name = "u816863816_data";
			
			$conn = new mysqli($host, $username, $password, $db_name);
			// Check connection
			if($conn->connect_error) {
				echo "<div class='name'>" . "<p>" . "Sorry! Can't  Connect!" . "</p>" . "</div>";
				die("" . $conn->connect_error);
			} 
			
			// sql to get data
			$sql = "SELECT id,name,surname,email,message FROM feedback";
			$result = mysqli_query($conn, $sql);
			
			
			echo "<table class='t01'> <tr>" . "<th>" . "ID" . "</th><th>" . "Name " . "</th> <th>" . "Email" ."</th> <th>" . "Message" ."</tr>";	
			
			if (mysqli_num_rows($result)>0 ){
				while($row=mysqli_fetch_assoc($result)){
					echo "<tr>" . "<td>" . $row["id"] . "</td><td>" . $row["name"] . " " . $row["surname"] . "</td> <td>" . $row["email"] ."</td> <td>" . $row["message"] ." </td></tr>";
				}
			} else {
				echo "Error: 0 results";
			}
			
			echo "</table>";

			$conn->close();
		?>
	</body>
</html>
