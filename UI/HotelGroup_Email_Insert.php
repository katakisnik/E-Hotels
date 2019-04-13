<?php 
	$con = mysqli_connect("localhost:3306","root","","hotelares");
    if (mysqli_connect_errno())
    {
       die('Could not connect: ' . mysqli_error($con));
    }
	
	$EmailAdress=$_GET['Email'];
	$Hotel_Group_ID=$_GET['Hotel_ID'];
	
	if ($Hotel_Group_ID==='' or $EmailAdress==='') {
		header('Location:HotelGroup_Email_Insert.html');
		exit;
	}
	
	$result = mysqli_query($con, "INSERT INTO emailaddressgroup (`Hotel_Group_ID`, `EmailAddress`) VALUES ('$Hotel_Group_ID', '$EmailAdress')");
	if($result === FALSE) {
         die(mysqli_error($con)); 
    }
	echo "Insertion Completed";
    mysqli_close($con);
?>