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
			
			$dd=$_POST['mydropdown'];
			$result = mysqli_query($con, "SELECT * FROM $dd");
		
			if ($dd=='hotel'){
				echo"<div style=\"margin:auto;\">";
 
				echo"<h1 style=\"text-align:center;color:#77419b;font-family:Lucida Handwriting;color:darkred;\"><strong>Hotels</strong></h1>";
				echo "<table align = 'center'>";
				echo "<tr>";
				echo "<td>";echo "<strong>";echo "Hotel_ID";echo "</strong>";echo "</td>"; 
				echo "<td>";echo "<strong>";echo "Hotel_Group_ID";echo "</strong>";echo "</td>"; 				
				echo "<td>";echo "<strong>";echo "Stars";echo "</strong>";echo "</td>"; 
				echo "<td>";echo "<strong>";echo "Number_Rooms";echo "</strong>";echo "</td>";
				echo "<td>";echo "<strong>";echo "Street";echo "</strong>";echo "</td>";         
				echo "<td>";echo "<strong>";echo "Street_Number";echo "</strong>";echo "</td>"; 
				echo "<td>";echo "<strong>";echo "Postal_Code";echo "</strong>";echo "</td>"; 
				echo "<td>";echo "<strong>";echo "City";echo "</strong>";echo "</td>"; 
				echo "</tr>";
			
				
             
				while($row = mysqli_fetch_array($result)) {
					echo "<tr>";
					echo "<td>"; echo $row['Hotel_ID']; echo "</td>";
					echo "<td>"; echo $row['Hotel_Group_ID']; echo "</td>";
					echo "<td>";echo $row['Stars'];echo "</td>"; 
					echo "<td>";echo $row['Number_Rooms'];echo "</td>";
					echo "<td>";echo $row['Street'];echo "</td>";        
					echo "<td>";echo $row['Street_Number'];echo "</td>"; 
					echo "<td>";echo $row['Postal_Code'];echo "</td>"; 
					echo "<td>";echo $row['City'];echo "</td>"; 
					echo "</tr>";
				}
				echo "</table>";
			}
			
			if ($dd=='hotelgroup'){
				echo"<div style=\"margin:auto;\">";
 
				echo"<h1 style=\"text-align:center;color:#77419b;font-family:Lucida Handwriting;color:darkred;\"><strong>Hotel Groups</strong></h1>";
				echo "<table align = 'center'>";
				echo "<tr>";
				echo "<td>";echo "<strong>";echo "Hotel_Group_ID";echo "</strong>";echo "</td>"; 
				echo "<td>";echo "<strong>";echo "Number_of_Hotels";echo "</strong>";echo "</td>"; 
				echo "<td>";echo "<strong>";echo "Street";echo "</strong>";echo "</td>";         
				echo "<td>";echo "<strong>";echo "Street_Number";echo "</strong>";echo "</td>"; 
				echo "<td>";echo "<strong>";echo "Postal_Code";echo "</strong>";echo "</td>"; 
				echo "<td>";echo "<strong>";echo "City";echo "</strong>";echo "</td>"; 
				echo "</tr>";
			
				
             
				while($row = mysqli_fetch_array($result)) {
					echo "<tr>";
					echo "<td>"; echo $row['Hotel_Group_ID']; echo "</td>"; 
					echo "<td>";echo $row['NumberofHotels'];echo "</td>";
					echo "<td>";echo $row['Street'];echo "</td>";        
					echo "<td>";echo $row['Street_Number'];echo "</td>"; 
					echo "<td>";echo $row['Postal_Code'];echo "</td>"; 
					echo "<td>";echo $row['City'];echo "</td>"; 
					echo "</tr>";
				}
				echo "</table>";
			}
			
			if ($dd=='hotelroom'){
				echo"<div style=\"margin:auto;\">";
 
				echo"<h1 style=\"text-align:center;color:#77419b;font-family:Lucida Handwriting;color:darkred;\"><strong>Hotel Rooms</strong></h1>";
				echo "<table align = 'center'>";
				echo "<tr>";
				echo "<td>";echo "<strong>";echo "Room_ID";echo "</strong>";echo "</td>";
				echo "<td>";echo "<strong>";echo "Hotel_ID";echo "</strong>";echo "</td>";	
				echo "<td>";echo "<strong>";echo "Price";echo "</strong>";echo "</td>"; 
				echo "<td>";echo "<strong>";echo "Repairs_needed";echo "</strong>";echo "</td>";         
				echo "<td>";echo "<strong>";echo "Expandable";echo "</strong>";echo "</td>"; 
				echo "<td>";echo "<strong>";echo "View";echo "</strong>";echo "</td>"; 
				echo "<td>";echo "<strong>";echo "Capacity";echo "</strong>";echo "</td>"; 
				echo "</tr>";
			
				
             
				while($row = mysqli_fetch_array($result)) {
					echo "<tr>";
					echo "<td>"; echo $row['Room_ID']; echo "</td>"; 
					echo "<td>"; echo $row['Hotel_ID']; echo "</td>";
					echo "<td>";echo $row['Price'];echo "</td>";
					echo "<td>";echo $row['Repairs_need'];echo "</td>";        
					echo "<td>";echo $row['Expandable'];echo "</td>"; 
					echo "<td>";echo $row['View'];echo "</td>"; 
					echo "<td>";echo $row['Capacity'];echo "</td>"; 
					echo "</tr>";
				}
				echo "</table>";
			}
			
			if ($dd=='employee'){
				echo"<div style=\"margin:auto;\">";
 
				echo"<h1 style=\"text-align:center;color:#77419b;font-family:Lucida Handwriting;color:darkred;\"><strong>Employees</strong></h1>";
				echo "<table align = 'center'>";
				echo "<tr>";
				echo "<td>";echo "<strong>";echo "IRS_Number";echo "</strong>";echo "</td>"; 
				echo "<td>";echo "<strong>";echo "SSN";echo "</strong>";echo "</td>"; 
				echo "<td>";echo "<strong>";echo "Last_Name";echo "</strong>";echo "</td>";
				echo "<td>";echo "<strong>";echo "First_Name";echo "</strong>";echo "</td>"; 
				echo "<td>";echo "<strong>";echo "Street";echo "</strong>";echo "</td>"; 
				echo "<td>";echo "<strong>";echo "Street_Number";echo "</strong>";echo "</td>"; 
				echo "<td>";echo "<strong>";echo "Postal_Code";echo "</strong>";echo "</td>"; 
				echo "<td>";echo "<strong>";echo "City";echo "</strong>";echo "</td>"; 
				echo "</tr>";
			
				
             
				while($row = mysqli_fetch_array($result)) {
					echo "<tr>";
					echo "<td>"; echo $row['IRS_Number']; echo "</td>";
					echo "<td>";echo $row['SSN'];echo "</td>"; 
					echo "<td>";echo $row['L_Name'];echo "</td>";
					echo "<td>";echo $row['F_Name'];echo "</td>";
					echo "<td>";echo $row['Street'];echo "</td>";        
					echo "<td>";echo $row['Street_Number'];echo "</td>"; 
					echo "<td>";echo $row['Postal_Code'];echo "</td>"; 
					echo "<td>";echo $row['City'];echo "</td>"; 
					echo "</tr>";
				}
				echo "</table>";
			}
			
			if ($dd=='customer'){
				echo"<div style=\"margin:auto;\">";
 
				echo"<h1 style=\"text-align:center;color:#77419b;font-family:Lucida Handwriting;color:darkred;\"><strong>Customers</strong></h1>";
				echo "<table align = 'center'>";
				echo "<tr>";
				echo "<td>";echo "<strong>";echo "IRS_Number";echo "</strong>";echo "</td>"; 
				echo "<td>";echo "<strong>";echo "SSN";echo "</strong>";echo "</td>"; 
				echo "<td>";echo "<strong>";echo "First_Registration";echo "</strong>";echo "</td>"; 
				echo "<td>";echo "<strong>";echo "Last_Name";echo "</strong>";echo "</td>";
				echo "<td>";echo "<strong>";echo "First_Name";echo "</strong>";echo "</td>"; 
				echo "<td>";echo "<strong>";echo "Street";echo "</strong>";echo "</td>"; 
				echo "<td>";echo "<strong>";echo "Street_Number";echo "</strong>";echo "</td>"; 
				echo "<td>";echo "<strong>";echo "Postal_Code";echo "</strong>";echo "</td>"; 
				echo "<td>";echo "<strong>";echo "City";echo "</strong>";echo "</td>"; 
				echo "</tr>";
			
				
             
				while($row = mysqli_fetch_array($result)) {
					echo "<tr>";
					echo "<td>"; echo $row['IRS_Number']; echo "</td>";
					echo "<td>";echo $row['SSN'];echo "</td>"; 
					echo "<td>"; echo $row['First_Registration']; echo "</td>";
					echo "<td>";echo $row['L_Name'];echo "</td>";
					echo "<td>";echo $row['F_Name'];echo "</td>";
					echo "<td>";echo $row['Street'];echo "</td>";        
					echo "<td>";echo $row['Street_Number'];echo "</td>"; 
					echo "<td>";echo $row['Postal_Code'];echo "</td>"; 
					echo "<td>";echo $row['City'];echo "</td>"; 
					echo "</tr>";
				}
				echo "</table>";
			}
			
			if ($dd=='rents'){
				echo"<div style=\"margin:auto;\">";
 
				echo"<h1 style=\"text-align:center;color:#77419b;font-family:Lucida Handwriting;color:darkred;\"><strong>Rents</strong></h1>";
				echo "<table align = 'center'>";
				echo "<tr>";
				echo "<td>";echo "<strong>";echo "Start_Date";echo "</strong>";echo "</td>"; 
				echo "<td>";echo "<strong>";echo "Room_ID";echo "</strong>";echo "</td>"; 
				echo "<td>";echo "<strong>";echo "E_IRS_Number";echo "</strong>";echo "</td>"; 
				echo "<td>";echo "<strong>";echo "C_IRS_Number";echo "</strong>";echo "</td>";
				echo "<td>";echo "<strong>";echo "Finish_Date";echo "</strong>";echo "</td>"; 
				echo "<td>";echo "<strong>";echo "Payment_amount";echo "</strong>";echo "</td>"; 
				echo "<td>";echo "<strong>";echo "Payment_method";echo "</strong>";echo "</td>"; 
				echo "</tr>";
			
				
             
				while($row = mysqli_fetch_array($result)) {
					echo "<tr>";
					echo "<td>"; echo $row['Start_Date']; echo "</td>";
					echo "<td>";echo $row['Room_ID'];echo "</td>"; 
					echo "<td>"; echo $row['E_IRS_Number']; echo "</td>";
					echo "<td>";echo $row['C_IRS_Number'];echo "</td>";
					echo "<td>";echo $row['Finish_Date'];echo "</td>";        
					echo "<td>";echo $row['Pay_amount'];echo "</td>"; 
					echo "<td>";echo $row['Pay_method'];echo "</td>";  
					echo "</tr>";
				}
				echo "</table>";
			}
			
			if ($dd=='reserves'){
				echo"<div style=\"margin:auto;\">";
 
				echo"<h1 style=\"text-align:center;color:#77419b;font-family:Lucida Handwriting;color:darkred;\"><strong>Reservations</strong></h1>";
				echo "<table align = 'center'>";
				echo "<tr>";
				echo "<td>";echo "<strong>";echo "C_IRS_Number";echo "</strong>";echo "</td>"; 
				echo "<td>";echo "<strong>";echo "Room_ID";echo "</strong>";echo "</td>"; 
				echo "<td>";echo "<strong>";echo "Start_Date";echo "</strong>";echo "</td>"; 
				echo "<td>";echo "<strong>";echo "Paid";echo "</strong>";echo "</td>";
				echo "<td>";echo "<strong>";echo "Finish_Date";echo "</strong>";echo "</td>";  
				echo "</tr>";
			
				
             
				while($row = mysqli_fetch_array($result)) {
					echo "<tr>";
					echo "<td>"; echo $row['C_IRS_Number']; echo "</td>";
					echo "<td>";echo $row['Room_ID'];echo "</td>"; 
					echo "<td>"; echo $row['Start_Date']; echo "</td>";
					echo "<td>";echo $row['Paid'];echo "</td>";
					echo "<td>";echo $row['Finish_Date'];echo "</td>";
					echo "</tr>";
				}
				echo "</table>";
			}
			
			if ($dd=='amenities'){
				echo"<div style=\"margin:auto;\">";
 
				echo"<h1 style=\"text-align:center;color:#77419b;font-family:Lucida Handwriting;color:darkred;\"><strong>Amenities</strong></h1>";
				echo "<table align = 'center'>";
				echo "<tr>";
				echo "<td>";echo "<strong>";echo "Room_ID";echo "</strong>";echo "</td>"; 
				echo "<td>";echo "<strong>";echo "Amenities";echo "</strong>";echo "</td>";  
				echo "</tr>";
			
				
             
				while($row = mysqli_fetch_array($result)) {
					echo "<tr>";
					echo "<td>"; echo $row['Room_ID']; echo "</td>";
					echo "<td>";echo $row['Amenities'];echo "</td>";   
					echo "</tr>";
				}
				echo "</table>";
			}
			
			
			
			if ($dd=='works'){
				echo"<div style=\"margin:auto;\">";
 
				echo"<h1 style=\"text-align:center;color:#77419b;font-family:Lucida Handwriting;color:darkred;\"><strong>Works</strong></h1>";
				echo "<table align = 'center'>";
				echo "<tr>";
				echo "<td>";echo "<strong>";echo "IRS_Number";echo "</strong>";echo "</td>"; 
				echo "<td>";echo "<strong>";echo "Hotel_ID";echo "</strong>";echo "</td>"; 
				echo "<td>";echo "<strong>";echo "Start_Date";echo "</strong>";echo "</td>"; 
				echo "<td>";echo "<strong>";echo "Position";echo "</strong>";echo "</td>";
				echo "<td>";echo "<strong>";echo "Finish_Date";echo "</strong>";echo "</td>";  
				echo "</tr>";
			
				
             
				while($row = mysqli_fetch_array($result)) {
					echo "<tr>";
					echo "<td>"; echo $row['IRS_Number']; echo "</td>";
					echo "<td>";echo $row['Hotel_ID'];echo "</td>"; 
					echo "<td>"; echo $row['Start_Date']; echo "</td>";
					echo "<td>";echo $row['Position'];echo "</td>";
					echo "<td>";echo $row['Finish_Date'];echo "</td>";  
					echo "</tr>";
				}
				echo "</table>";
			}
			
			if ($dd=='emailaddress'){
				echo"<div style=\"margin:auto;\">";
 
				echo"<h1 style=\"text-align:center;color:#77419b;font-family:Lucida Handwriting;color:darkred;\"><strong>Hotel Emails</strong></h1>";
				echo "<table align = 'center'>";
				echo "<tr>";
				echo "<td>";echo "<strong>";echo "Hotel_ID";echo "</strong>";echo "</td>"; 
				echo "<td>";echo "<strong>";echo "EmailAdress";echo "</strong>";echo "</td>"; 
				echo "</tr>";
			
				
             
				while($row = mysqli_fetch_array($result)) {
					echo "<tr>";
					echo "<td>"; echo $row['Hotel_ID']; echo "</td>";
					echo "<td>";echo $row['EmailAddress'];echo "</td>";   
					echo "</tr>";
				}
				echo "</table>";
			}
			
			if ($dd=='emailaddressgroup'){
				echo"<div style=\"margin:auto;\">";
 
				echo"<h1 style=\"text-align:center;color:#77419b;font-family:Lucida Handwriting;color:darkred;\"><strong>Hotel Group Emails</strong></h1>";
				echo "<table align = 'center'>";
				echo "<tr>";
				echo "<td>";echo "<strong>";echo "Hotel_Group_ID";echo "</strong>";echo "</td>"; 
				echo "<td>";echo "<strong>";echo "EmailAdress";echo "</strong>";echo "</td>"; 
				echo "</tr>";
			
				
             
				while($row = mysqli_fetch_array($result)) {
					echo "<tr>";
					echo "<td>"; echo $row['Hotel_Group_ID']; echo "</td>";
					echo "<td>";echo $row['EmailAddress'];echo "</td>";   
					echo "</tr>";
				}
				echo "</table>";
			}
			
			if ($dd=='phonenum'){
				echo"<div style=\"margin:auto;\">";
 
				echo"<h1 style=\"text-align:center;color:#77419b;font-family:Lucida Handwriting;color:darkred;\"><strong>Hotel Phonenumbers</strong></h1>";
				echo "<table align = 'center'>";
				echo "<tr>";
				echo "<td>";echo "<strong>";echo "Hotel_ID";echo "</strong>";echo "</td>"; 
				echo "<td>";echo "<strong>";echo "PhoneNumber";echo "</strong>";echo "</td>"; 
				echo "</tr>";
			
				
             
				while($row = mysqli_fetch_array($result)) {
					echo "<tr>";
					echo "<td>"; echo $row['Hotel_ID']; echo "</td>";
					echo "<td>";echo $row['PhoneNum'];echo "</td>";   
					echo "</tr>";
				}
				echo "</table>";
			}
			
			if ($dd=='phonenumgroup'){
				echo"<div style=\"margin:auto;\">";
 
				echo"<h1 style=\"text-align:center;color:#77419b;font-family:Lucida Handwriting;color:darkred;\"><strong>Hotel Group Phonenumbers</strong></h1>";
				echo "<table align = 'center'>";
				echo "<tr>";
				echo "<td>";echo "<strong>";echo "Hotel_Group_ID";echo "</strong>";echo "</td>"; 
				echo "<td>";echo "<strong>";echo "PhoneNumber";echo "</strong>";echo "</td>"; 
				echo "</tr>";
			
				
             
				while($row = mysqli_fetch_array($result)) {
					echo "<tr>";
					echo "<td>"; echo $row['Hotel_Group_ID']; echo "</td>";
					echo "<td>";echo $row['PhoneNum'];echo "</td>";   
					echo "</tr>";
				}
				echo "</table>";
			}
			
			
			
			
			
			mysqli_close($con);
		?>
	</body>



</html>

 