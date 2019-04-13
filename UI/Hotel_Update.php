<?php 
	$con = mysqli_connect("localhost:3306","root","","hotelares");
    if (mysqli_connect_errno())
    {
       die('Could not connect: ' . mysqli_error($con));
    }
	
	$Hotel_ID=$_GET['Hotel_ID'];
	$Hotel_Group_ID=$_GET['Hotel_Group_ID'];
	$Stars=$_GET['Stars'];
	$Number_Rooms=$_GET['Number_Rooms'];
	$Street=$_GET['Street'];
	$Street_Number=$_GET['Street_Number'];
	$Postal_Code=$_GET['Postal_Code'];
	$City=$_GET['City'];
	
	if ($Hotel_ID==='' or $Hotel_Group_ID==='' or $Stars==='' or $Number_Rooms==='' or $Street==='' or $City==='' or $Street_Number==='' or $Postal_Code===''){
            header('Location:Hotel_Update.html');
            exit;
    }
	
	$result = mysqli_query($con, "UPDATE hotel SET Hotel_Group_ID = '$Hotel_Group_ID', Stars = '$Stars', Number_Rooms = '$Number_Rooms', Street = '$Street', Street_Number = '$Street_Number', Postal_Code = '$Postal_Code', City = '$City' WHERE Hotel_ID = $Hotel_ID");
	if($result === FALSE) {
         die(mysqli_error($con)); 
    }
	echo "Update Completed";

    mysqli_close($con);
	
?>