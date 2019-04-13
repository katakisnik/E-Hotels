<!DOCTYPE html>
<html>
	<head>
		<title>Info</title>
	</head>
	
	<body>
		<?php
			$con = mysqli_connect("localhost:3306","root","","hotelares");
			if (mysqli_connect_errno())
			{
				die('Could not connect: ' . mysqli_error($con));
			}
			
			$result = mysqli_query($con, "SELECT Room_ID, Capacity from hotelroom ORDER BY Capacity");
			
			echo"<div style=\"margin:auto;\">";
 
			echo"<h1 style=\"text-align:center;color:#77419b;font-family:Lucida Handwriting;color:darkred;\"><strong>Our Rooms</strong></h1>";
			echo "<table align = 'center'>";
			echo "<tr>";
			echo "<td>";echo "<strong>";echo "Room ID";echo "</strong>";echo "</td>";
			echo "<td>";echo "<strong>";echo "Capacity";echo "</strong>";echo "</td>";
			echo "</tr>";
				
			while($row = mysqli_fetch_array($result)) {
					echo "<tr>";
					echo "<td>"; echo $row['Room_ID']; echo "</td>";
					echo "<td>"; echo $row['Capacity']; echo "</td>";
					echo "</tr>";
			}
			echo "</table>";
		?>
	</body>
</html>