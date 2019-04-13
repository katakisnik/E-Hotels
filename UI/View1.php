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
			
			$result = mysqli_query($con, "SELECT City, COUNT(*) from hotelroom join hotel on hotelroom.Hotel_ID = hotel.Hotel_ID GROUP BY City");
			
			echo"<div style=\"margin:auto;\">";
 
			echo"<h1 style=\"text-align:center;color:#77419b;font-family:Lucida Handwriting;color:darkred;\"><strong>Our Rooms</strong></h1>";
			echo "<table align = 'center'>";
			echo "<tr>";
			echo "<td>";echo "<strong>";echo "City";echo "</strong>";echo "</td>";
			echo "<td>";echo "<strong>";echo "Number of Rooms";echo "</strong>";echo "</td>";
			echo "</tr>";
				
			while($row = mysqli_fetch_array($result)) {
					echo "<tr>";
					echo "<td>"; echo $row['City']; echo "</td>";
					echo "<td>"; echo $row['COUNT(*)']; echo "</td>";
					echo "</tr>";
			}
			echo "</table>";
		?>
	</body>
</html>