<?php 
	$con = mysqli_connect("localhost:3306","root","","hotelares");
    if (mysqli_connect_errno())
    {
       die('Could not connect: ' . mysqli_error($con));
    }
	
	$EmailAdress=$_GET['Email'];
	$Hotel_ID=$_GET['Hotel_ID'];
	
	if ($Hotel_ID==='' or $EmailAdress==='') {
		header('Location:Hotel_Email_Update.html');
		exit;
	}
	
	$result = mysqli_query($con, "UPDATE `emailaddress` SET  EmailAddress='$EmailAdress' WHERE Hotel_ID='$Hotel_ID'");
	if($result === FALSE) {
         die(mysqli_error($con)); 
    }
	echo "Update Completed";
    mysqli_close($con);
?>