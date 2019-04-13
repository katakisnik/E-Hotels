<?php 
	$con = mysqli_connect("localhost:3306","root","","hotelares");
    if (mysqli_connect_errno())
    {
       die('Could not connect: ' . mysqli_error($con));
    }
	
	$Hotel_Group_ID=$_GET['Hotel_Group_ID'];
	$NumberofHotels=$_GET['NumberofHotels'];
	$Street=$_GET['Street'];
	$Street_Number=$_GET['Street_Number'];
	$Postal_Code=$_GET['Postal_Code'];
	$City=$_GET['City'];
	
	if ($Hotel_Group_ID==='' or $NumberofHotels==='' or $Street==='' or $City==='' or $Street_Number==='' or $Postal_Code===''){
            header('Location:Employee-Insert.html');
            exit;
    }
	
	$result = mysqli_query($con, "UPDATE hotelgroup SET NumberofHotels = '$NumberofHotels', Street = '$Street', Street_Number = '$Street_Number', Postal_Code = '$Postal_Code', City = '$City' WHERE Hotel_Group_ID = $Hotel_Group_ID");
	if($result === FALSE) {
         die(mysqli_error($con)); 
    }
	echo "Update Completed";

    mysqli_close($con);
	
?>