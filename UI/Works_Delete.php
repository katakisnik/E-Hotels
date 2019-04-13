<?php 
	$con = mysqli_connect("localhost:3306","root","","hotelares");
    if (mysqli_connect_errno())
    {
       die('Could not connect: ' . mysqli_error($con));
    }
	
	$IRS_Number=$_GET['IRS_Number'];
	
	$result = mysqli_query($con, "DELETE FROM works WHERE IRS_Number = $IRS_Number");
	
	if($result === FALSE) {
         die(mysqli_error($con)); 
    }
	echo "Deletion Completed";

    mysqli_close($con);
	
?>