<?php 
	$con = mysqli_connect("localhost:3306","root","","hotelares");
    if (mysqli_connect_errno())
    {
       die('Could not connect: ' . mysqli_error($con));
    }
	
	$Room_ID=$_GET['Room_ID'];
	$Amenities=$_GET['Amenities'];
	
	if ($Room_ID==='' or $Amenities===''){
            header('Location:Amenities_Update.html');
            exit;
    }
	
	$result = mysqli_query($con, "UPDATE amenities SET Amenities = '$Amenities' WHERE Room_ID = $Room_ID");
	if($result === FALSE) {
         die(mysqli_error($con)); 
    }
	echo "Update Completed";

    mysqli_close($con);
	
?>