<?php 
	$con = mysqli_connect("localhost:3306","root","","hotelares");
    if (mysqli_connect_errno())
    {
       die('Could not connect: ' . mysqli_error($con));
    }
	
	$Room_ID=$_GET['Room_ID'];
	$Amenities=$_GET['Amenities'];
	
	
	if ($Room_ID==='' or $Amenities===''){
            header('Location:Amenities_Insert.html');
            exit;
    }
	
	$result = mysqli_query($con, "INSERT INTO amenities (Amenities, Room_ID) VALUES ('$Amenities', '$Room_ID')");
	if($result === FALSE) {
         die(mysqli_error($con)); 
    }
	echo "Insertion Completed";
    mysqli_close($con);
?>