<?php 
	$con = mysqli_connect("localhost:3306","root","","hotelares");
    if (mysqli_connect_errno())
    {
       die('Could not connect: ' . mysqli_error($con));
    }
	
	$C_IRS_Number=$_GET['C_IRS_Number'];
	$Room_ID=$_GET['Room_ID'];

	
	$result = mysqli_query($con, "DELETE FROM reserves WHERE C_IRS_Number = $C_IRS_Number AND Room_ID='$Room_ID'");
	
	if($result === FALSE) {
         die(mysqli_error($con)); 
    }
	echo "Deletion Completed";

    mysqli_close($con);
	
?>