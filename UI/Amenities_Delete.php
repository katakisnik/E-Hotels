<?php 
	$con = mysqli_connect("localhost:3306","root","","hotelares");
    if (mysqli_connect_errno())
    {
       die('Could not connect: ' . mysqli_error($con));
    }
	
	$Room_ID=$_GET['Room_ID'];
	
	$result = mysqli_query($con, "DELETE FROM amenities WHERE Room_ID = $Room_ID");
	
	if($result === FALSE) {
         die(mysqli_error($con)); 
    }
	echo "Deletion Completed";

    mysqli_close($con);
	
?>