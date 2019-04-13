<?php 
	$con = mysqli_connect("localhost:3306","root","","hotelares");
    if (mysqli_connect_errno())
    {
       die('Could not connect: ' . mysqli_error($con));
    }
	
	$EmailAdress=$_GET['Email'];
	$Hotel_Group_ID=$_GET['Hotel_Group_ID'];
	
	if ($Hotel_Group_ID==='' or $EmailAdress==='') {
		header('Location:HotelGroup_Email_Update.html');
		exit;
	}
	
	$result = mysqli_query($con, "UPDATE emailaddressgroup SET  EmailAddress='$EmailAdress' WHERE Hotel_Group_ID='$Hotel_Group_ID'");
	if($result === FALSE) {
         die(mysqli_error($con)); 
    }
	echo "Update Completed";
    mysqli_close($con);
?>