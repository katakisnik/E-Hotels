<?php 
	$con = mysqli_connect("localhost:3306","root","","hotelares");
    if (mysqli_connect_errno())
    {
       die('Could not connect: ' . mysqli_error($con));
    }
	
	$Hotel_Group_ID=$_GET['Hotel_Group_ID'];
	
	$result = mysqli_query($con, "DELETE FROM phonenumgroup WHERE Hotel_Group_ID = $Hotel_Group_ID");
	
	if($result === FALSE) {
         die(mysqli_error($con)); 
    }
	echo "Deletion Completed";

    mysqli_close($con);
	
?>
