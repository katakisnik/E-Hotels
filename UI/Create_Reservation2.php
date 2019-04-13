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
			
			$Hotel_ID=$_POST['drop'];
			$Price=$_POST['Price'];
			$Start_Date=$_POST['Start_Date'];
			$Finish_Date=$_POST['Finish_Date'];
			
			$result = mysqli_query($con, "SELECT hotelroom.Room_ID, hotelroom.Hotel_ID, Price, Repairs_need, Amenities, View, Capacity, City FROM hotelroom 
									JOIN hotel ON (hotelroom.Hotel_ID = hotel.Hotel_ID AND hotel.Hotel_ID = '$Hotel_ID') JOIN amenities ON hotelroom.Room_ID=amenities.Room_ID 
									WHERE (hotelroom.Room_ID IN (SELECT Room_ID FROM hotelroom WHERE Price < '$Price')) AND (hotelroom.Room_ID NOT IN (SELECT Room_ID FROM reserves WHERE ((('$Start_Date' >= Start_Date) AND ('$Start_Date' <= Finish_Date)) OR (('$Finish_Date' >= Start_Date) AND ('$Finish_Date' <= Finish_Date )) OR (('$Start_Date' < Start_Date) AND ('$Finish_Date' > Finish_Date)))))  ");
			if($result === FALSE) {
				die(mysqli_error($con)); 
			}
			
			echo"<div style=\"margin:auto;\">";
 
				echo"<h1 style=\"text-align:center;color:#77419b;font-family:Lucida Handwriting;color:darkred;\"><strong>Hotel Rooms</strong></h1>";
				echo "<table align = 'center'>";
				echo "<tr>";
				echo "<td>";echo "<strong>";echo "Room_ID";echo "</strong>";echo "</td>";
				echo "<td>";echo "<strong>";echo "City";echo "</strong>";echo "</td>";
				echo "<td>";echo "<strong>";echo "Hotel_ID";echo "</strong>";echo "</td>";	
				echo "<td>";echo "<strong>";echo "Price";echo "</strong>";echo "</td>"; 
				echo "<td>";echo "<strong>";echo "Repairs_needed";echo "</strong>";echo "</td>";         
				echo "<td>";echo "<strong>";echo "Amenities";echo "</strong>";echo "</td>"; 
				echo "<td>";echo "<strong>";echo "View";echo "</strong>";echo "</td>"; 
				echo "<td>";echo "<strong>";echo "Capacity";echo "</strong>";echo "</td>"; 
				echo "</tr>";
			
				
             
				while($row = mysqli_fetch_array($result)) {
					echo "<tr>";
					echo "<td>"; echo $row['Room_ID']; echo "</td>";
					echo "<td>"; echo $row['City']; echo "</td>";					
					echo "<td>"; echo $row['Hotel_ID']; echo "</td>";
					echo "<td>";echo $row['Price'];echo "</td>";
					echo "<td>";echo $row['Repairs_need'];echo "</td>";        
					echo "<td>";echo $row['Amenities'];echo "</td>"; 
					echo "<td>";echo $row['View'];echo "</td>"; 
					echo "<td>";echo $row['Capacity'];echo "</td>"; 
					echo "</tr>";
				}
			echo "</table>";
		?>
		
		<br>
		<br>
		<br>
		
		<form action = "Create_Reservation3.php" method="POST">
			Choose the room ID you want<br>
			<select name = "drop">
		
				<?php
				
					$result = mysqli_query($con, "SELECT Room_ID FROM hotelroom JOIN hotel ON (hotelroom.Hotel_ID = hotel.Hotel_ID AND hotel.Hotel_ID = '$Hotel_ID') WHERE (Room_ID IN (SELECT Room_ID FROM hotelroom WHERE Price < '$Price')) AND (hotelroom.Room_ID NOT IN (SELECT Room_ID FROM reserves WHERE ((('$Start_Date' >= Start_Date) AND ('$Start_Date' <= Finish_Date)) OR (('$Finish_Date' >= Start_Date) AND ('$Finish_Date' <= Finish_Date )) OR (('$Start_Date' < Start_Date) AND ('$Finish_Date' > Finish_Date)))))");
					if($result === FALSE) {
						die(mysqli_error($con)); 
					}
				
			
					while ($row = mysqli_fetch_array($result)) {
						echo "<option value='".$row['Room_ID']."'>".$row['Room_ID']."</option>";
					}
				?>
				
				
		
			</select>
			<br>
			<br>
			If you are a customer, give your IRS Number<br>
			<input type="Number" name="IRS_Number" value="">
			<br>
			<br>
			<input type='hidden' name='Start_Date' value='<?php echo "$Start_Date";?>'/>
			<input type='hidden' name='Hotel_ID' value='<?php echo "$Hotel_ID";?>'/>
			<input type='hidden' name='Price' value='<?php echo "$Price";?>'/>


			<input type='hidden' name='Finish_Date' value='<?php echo "$Finish_Date";?>'/>
			<input type="submit" value="Submit">
		</form>
		<br>
		<br>
		If you are not sign up :)<br>
		<a href="Customer_Insert.html"><button>Sign up</button></a>
		<br>
	</body>
</html>