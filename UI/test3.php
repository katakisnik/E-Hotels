<!DOCTYPE html>
<html>
	<head>
		<title>Results</title>

	</head>
	
	<body>
		<?php
			$con = mysqli_connect("localhost:3306","root","","hotelares");
			if (mysqli_connect_errno())
			{
				die('Could not connect: ' . mysqli_error($con));
			}
			
			$NumberRooms=$_POST['NumberRooms'];
			$Price=$_POST['Price'];
			$Start_Date=$_POST['Start_Date'];
			$Finish_Date=$_POST['Finish_Date'];
			
			$result = mysqli_query($con, "SELECT hotel.Hotel_ID, City, COUNT(*) FROM hotel JOIN hotelroom ON (hotel.Hotel_ID=hotelroom.Hotel_ID AND Price<'$Price' 
											AND hotelroom.Room_ID NOT IN (SELECT Room_ID FROM reserves WHERE ((('$Start_Date' >= Start_Date) AND ('$Start_Date' <= Finish_Date)) OR (('$Finish_Date' >= Start_Date) AND ('$Finish_Date' <= Finish_Date )) OR (('$Start_Date' < Start_Date) AND ('$Finish_Date' > Finish_Date))))) 
											GROUP BY hotel.Hotel_ID HAVING COUNT(*) >= '$NumberRooms'");
			if($result === FALSE) {
				die(mysqli_error($con)); 
			}
			echo"<div style=\"margin:auto;\">";
 
			echo"<h1 style=\"text-align:center;color:#77419b;font-family:Lucida Handwriting;color:darkred;\"><strong>Hotels</strong></h1>";
			echo "<table align = 'center'>";
			echo "<tr>";
			echo "<td>";echo "<strong>";echo "Hotel_ID";echo "</strong>";echo "</td>";
			echo "<td>";echo "<strong>";echo "City";echo "</strong>";echo "</td>";
			echo "<td>";echo "<strong>";echo "Number of Rooms";echo "</strong>";echo "</td>";
			echo "</tr>";
				
			while($row = mysqli_fetch_array($result)) {
					echo "<tr>";
					echo "<td>"; echo $row['Hotel_ID']; echo "</td>";
					echo "<td>"; echo $row['City']; echo "</td>";
					echo "<td>"; echo $row['COUNT(*)']; echo "</td>";
					echo "</tr>";
			}
			echo "</table>";
		?>
		
		<br><br>
		<form action = "Create_Reservation2.php" method="POST">
			Choose the Hotel_ID you want<br>
			<select name = "drop">
		
				<?php
					$result = mysqli_query($con, "SELECT hotel.Hotel_ID FROM hotel JOIN hotelroom ON (hotel.Hotel_ID=hotelroom.Hotel_ID AND Price<'$Price' 
											AND hotelroom.Room_ID NOT IN (SELECT Room_ID FROM reserves WHERE ((('$Start_Date' >= Start_Date) AND ('$Start_Date' <= Finish_Date)) OR (('$Finish_Date' >= Start_Date) AND ('$Finish_Date' <= Finish_Date )) OR (('$Start_Date' <= Start_Date) AND ('$Finish_Date' > Finish_Date))))) 
											GROUP BY hotel.Hotel_ID HAVING COUNT(*) >= '$NumberRooms'");
				
			
					while ($row = mysqli_fetch_array($result)) {
						echo "<option value='".$row['Hotel_ID']."'>".$row['Hotel_ID']."</option>";
					}
				?>
				
				<input type='hidden' name='Start_Date' value='<?php echo "$Start_Date";?>'/>
				<input type='hidden' name='Finish_Date' value='<?php echo "$Finish_Date";?>'/>
				<input type='hidden' name='Price' value='<?php echo "$Price";?>'/>

				<input type="submit" value="Submit">
				
				
		
			</select>
	</body>
	
	
</html>