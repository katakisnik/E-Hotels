<?php 
	$con = mysqli_connect("localhost:3306","root","","hotelares");
    if (mysqli_connect_errno())
    {
       die('Could not connect: ' . mysqli_error($con));
    }
	
	$EmailAdress=$_GET['Email'];
	$Hotel_ID=$_GET['Hotel_ID'];
	
	if ($Hotel_ID==='' or $EmailAdress==='') {
		header('Location:Hotel_Email_Insert.html');
		exit;
	}
	
	$result = mysqli_query($con, "INSERT INTO `emailaddress` (`Hotel_ID`, `EmailAddress`) VALUES ('$Hotel_ID', '$EmailAdress')");
	if($result === FALSE) {
         die(mysqli_error($con)); 
    }
	echo "Insertion Completed";
    mysqli_close($con);
?>