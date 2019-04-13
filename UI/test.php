<html>
	<head>
		<title>Find Room</title>
	</head>
	
	<body>
		<div style="margin:auto;">

			<h1 style="text-align:center;color:#77419b;font-family:Lucida Handwriting;color:darkred;"><strong>Find a Room</strong></h1>
	
		</div>
		
		
			
		<?php
			$con = mysqli_connect("localhost:3306","root","","hotelares");
			if (mysqli_connect_errno())
			{
				die('Could not connect: ' . mysqli_error($con));
			}
			
			$Start_Date=$_POST['Start_Date'];
			$Finish_Date=$_POST['Finish_Date'];
			
				
		?>
		
		<h1 style="color:darkred;">Fill in, only the information you are intrested in</h1>
		
		<form action = "test2.php" method="POST">
			Choose the City you'd like to stay<br>
			<input type='text' name="City" value=""><br>
			<br>
			Choose the amount of Stars your Hotel you'd like to have<br>
			<input type='number' min='0' name="Stars" value="Stars"><br>
			<br>
			Choose the Hotel Group you prefer<br>
			<input type='number' min='0' name="Hotel_Group_ID" value="Hotel_Group_ID"><br>
			<br>
			Choose the capacity of your room<br>
			<input type='number' min='0' name="Capacity" value="Capacity"><br>
			<br>
			Choose the amenities you need<br>
			<input type='text' name="Amenities" value=""><br>
			<br>
			
			<input type='hidden' name='Start_Date' value='<?php echo "$Start_Date";?>'/>
			<input type='hidden' name='Finish_Date' value='<?php echo "$Finish_Date";?>'/>

			<input type="submit" value="Submit">

		</form>
		
		<h1 style="color:darkred;">If you want more than one room, based on the price you can fill the fields below</h1>

				
		<form action = "test3.php" method="POST">
			Choose the number of rooms you need<br>
			<input type='number' min='0' name="NumberRooms" value="NumberRooms"><br>
			<br>
			Choose the maximum Price of the room<br>
			<input type='number' min='0' name="Price" value="Price"><br>
			<br>
			
			<input type='hidden' name='Start_Date' value='<?php echo "$Start_Date";?>'/>
			<input type='hidden' name='Finish_Date' value='<?php echo "$Finish_Date";?>'/>

			<input type="submit" value="Submit">

		</form>
		
		<br><br>
		
		Available Cities<br>
		<select name = "drop">
		
			<?php
				
				$result = mysqli_query($con, "SELECT City FROM hotel GROUP BY City");
				if($result === FALSE) {
						die(mysqli_error($con)); 
				}
				
			
				while ($row = mysqli_fetch_array($result)) {
						echo "<option value='".$row['City']."'>".$row['City']."</option>";
				}
			?>
				
				
		
		</select>
		
		<br>
		<br>
		
		Star ratings of our available Hotels<br>
		<select name = "drop">
		
			<?php
				
				$result = mysqli_query($con, "SELECT Stars FROM hotel GROUP BY Stars");
				if($result === FALSE) {
					die(mysqli_error($con)); 
				}
				
			
				while ($row = mysqli_fetch_array($result)) {
					echo "<option value='".$row['Stars']."'>".$row['Stars']."</option>";
				}
			?>
				
		</select>
			
			

			

		
		<br>
		<br>
		
		Our Hotel Groups<br>
		<select name = "drop">
		
			<?php
			
				$result = mysqli_query($con, "SELECT Hotel_Group_ID FROM hotel GROUP BY Hotel_Group_ID");
				if($result === FALSE) {
					die(mysqli_error($con)); 
				}
			
		
				while ($row = mysqli_fetch_array($result)) {
					echo "<option value='".$row['Hotel_Group_ID']."'>".$row['Hotel_Group_ID']."</option>";
				}
			?>
				
				
		
		</select>
			

		<br>
		<br>
		Capacity of our Rooms<br>
		<select name = "drop">
		
			<?php
			
				$result = mysqli_query($con, "SELECT Capacity FROM hotelroom GROUP BY Capacity");
				if($result === FALSE) {
					die(mysqli_error($con)); 
				}
			
		
				while ($row = mysqli_fetch_array($result)) {
					echo "<option value='".$row['Capacity']."'>".$row['Capacity']."</option>";
				}
			?>
				
				
		
		</select>
			
		<br>
		<br>
		Available Amenities <br>
		<select name = "drop">
		
			<?php
			
				$result = mysqli_query($con, "SELECT Amenities FROM amenities GROUP BY Amenities");
				if($result === FALSE) {
					die(mysqli_error($con)); 
				}
				
			
					while ($row = mysqli_fetch_array($result)) {
						echo "<option value='".$row['Amenities']."'>".$row['Amenities']."</option>";
					}
			?>
				
				
		
		</select>
			

		<br>
		<br>
		
		
			
			
			
	
	</body>



</html>