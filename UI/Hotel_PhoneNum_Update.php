<?php 
	$con = mysqli_connect("localhost:3306","root","","hotelares");
    if (mysqli_connect_errno())
    {
       die('Could not connect: ' . mysqli_error($con));
    }
	
	$PhoneNum=$_GET['PhoneNum'];
	$Hotel_ID=$_GET['Hotel_ID'];
	
	if ($Hotel_ID==='' or $PhoneNum==='') {
		header('Location:Hotel_PhoneNum_Update.html');
		exit;
	}
	
	$result = mysqli_query($con, "UPDATE phonenum SET  PhoneNum='$PhoneNum' WHERE Hotel_ID='$Hotel_ID'");
	if($result === FALSE) {
         die(mysqli_error($con)); 
    }
	echo "Update Completed";
    mysqli_close($con);
?>