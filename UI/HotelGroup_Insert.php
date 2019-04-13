<?php 
	$con = mysqli_connect("localhost:3306","root","","hotelares");
    if (mysqli_connect_errno())
    {
       die('Could not connect: ' . mysqli_error($con));
    }
	
	$NumberofHotels=$_GET['NumberofHotels'];
	$Street=$_GET['Street'];
	$Street_Number=$_GET['Street_Number'];
	$Postal_Code=$_GET['Postal_Code'];
	$City=$_GET['City'];
	
	if ($NumberofHotels==='' or $Street==='' or $City==='' or $Street_Number==='' or $Postal_Code===''){
            header('Location:HotelGroup_Insert.html');
            exit;
    }
	
	$result = mysqli_query($con, "INSERT INTO hotelgroup (NumberofHotels, `Street`, `Street_Number`, `Postal_Code`, `City`) VALUES ('$NumberofHotels', '$Street', '$Street_Number', '$Postal_Code', '$City')");
	if($result === FALSE) {
         die(mysqli_error($con)); 
    }
	echo "Insertion Completed";
    mysqli_close($con);
?>