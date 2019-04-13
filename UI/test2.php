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
			
			
			$City=$_POST['City'];
			if ($City === "") {
				$s0 = "";
			}
			else {
				$s0 = " AND (hotelroom.Hotel_ID IN (SELECT hotel.Hotel_ID FROM hotel WHERE City = '$City'))";
			}
			$Stars=$_POST['Stars'];
			if ($Stars === "") {
				$s1 = "";
			}
			else {
				$s1 = " AND (hotelroom.Hotel_ID IN (SELECT hotel.Hotel_ID FROM hotel WHERE Stars = '$Stars'))";
			}
			$Hotel_Group_ID=$_POST['Hotel_Group_ID'];
			if ($Hotel_Group_ID === "") {
				$s2 = "";
			}
			else {
				$s2 = " AND (hotelroom.Hotel_ID IN (SELECT hotel.Hotel_ID FROM hotel WHERE Hotel_Group_ID = '$Hotel_Group_ID'))";
			}
			$Capacity=$_POST['Capacity'];
			if ($Capacity === "") {
				$s3 = "";
			}
			else {
				$s3 = " AND (hotelroom.Room_ID IN (SELECT hotelroom.Room_ID FROM hotelroom WHERE Capacity = '$Capacity'))";
			}
			$Amenities=$_POST['Amenities'];
			if ($Amenities === "") {
				$s4 = "";
			}
			else {
				$s4 = " AND (hotelroom.Room_ID IN (SELECT Room_ID FROM amenities WHERE Amenities = '$Amenities'))";
			}
			$Start_Date=$_POST['Start_Date'];
			$Finish_Date=$_POST['Finish_Date'];
			$result = mysqli_query($con, "SELECT hotelroom.Room_ID, hotelroom.Hotel_ID, Price, Repairs_need, Amenities, Expandable, View, Capacity, City FROM hotelroom 
							JOIN hotel ON hotelroom.Hotel_ID = hotel.Hotel_ID JOIN amenities ON hotelroom.Room_ID = amenities.Room_ID 
							WHERE 1=1 ".$s0.$s1.$s2.$s3.$s4.
							"AND (hotelroom.Room_ID NOT IN (SELECT Room_ID FROM reserves WHERE ((('$Start_Date' >= Start_Date) AND ('$Start_Date' <= Finish_Date)) OR (('$Finish_Date' >= Start_Date) AND ('$Finish_Date' <= Finish_Date )) OR (('$Start_Date' < Start_Date) AND ('$Finish_Date' > Finish_Date)))))  ");
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
				echo "<td>";echo "<strong>";echo "Expandable";echo "</strong>";echo "</td>"; 
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
					echo "<td>";echo $row['Expandable'];echo "</td>"; 					
					echo "<td>";echo $row['View'];echo "</td>"; 
					echo "<td>";echo $row['Capacity'];echo "</td>"; 
					echo "</tr>";
				}
			echo "</table>";
		?>
		
		<br>
		<br>
		<br>
		
		<form action = "Create_Reservation.php" method="POST">
			Choose the room ID you want<br>
			<select name = "drop">
		
				<?php
					$result = mysqli_query($con, "SELECT Room_ID FROM hotelroom WHERE 1=1 ".$s0.$s1.$s2.$s3.$s4.
							"AND (hotelroom.Room_ID NOT IN (SELECT Room_ID FROM reserves WHERE ((('$Start_Date' >= Start_Date) AND ('$Start_Date' <= Finish_Date)) OR (('$Finish_Date' >= Start_Date) AND ('$Finish_Date' <= Finish_Date )) OR (('$Start_Date' < Start_Date) AND ('$Finish_Date' > Finish_Date)))))");
				
			
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