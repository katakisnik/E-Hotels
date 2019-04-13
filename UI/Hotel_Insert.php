<?php 
	$con = mysqli_connect("localhost:3306","root","","hotelares");
    if (mysqli_connect_errno())
    {
       die('Could not connect: ' . mysqli_error($con));
    }
	
	$Hotel_Group_ID=$_GET['Hotel_Group_ID'];
	$Stars=$_GET['Stars'];
	$Number_Rooms=$_GET['Number_Rooms'];
	$Street=$_GET['Street'];
	$Street_Number=$_GET['Street_Number'];
	$Postal_Code=$_GET['Postal_Code'];
	$City=$_GET['City'];
	
	if ($Hotel_Group_ID==='' or $Stars==='' or $Number_Rooms==='' or $Street==='' or $City==='' or $Street_Number==='' or $Postal_Code===''){
            header('Location:Hotel_Insert.html');
            exit;
    }
	
	$result = mysqli_query($con, "INSERT INTO hotel (Hotel_Group_ID, Stars, Number_Rooms, `Street`, `Street_Number`, `Postal_Code`, `City`) VALUES ('$Hotel_Group_ID', '$Stars', '$Number_Rooms', '$Street', '$Street_Number', '$Postal_Code', '$City')");
	if($result === FALSE) {
         die(mysqli_error($con)); 
    }
	echo "Insertion Completed";
    mysqli_close($con);
?>