<?php 
	$con = mysqli_connect("localhost:3306","root","","hotelares");
    if (mysqli_connect_errno())
    {
       die('Could not connect: ' . mysqli_error($con));
    }
	
	$PhoneNum=$_GET['PhoneNum'];
	$Hotel_Group_ID=$_GET['Hotel_Group_ID'];
	
	if ($Hotel_Group_ID==='' or $PhoneNum==='') {
		header('Location:HotelGroup_PhoneNum_Update.html');
		exit;
	}
	
	$result = mysqli_query($con, "UPDATE phonenumgroup SET  PhoneNum='$PhoneNum' WHERE Hotel_Group_ID='$Hotel_Group_ID'");
	if($result === FALSE) {
         die(mysqli_error($con)); 
    }
	echo "Update Completed";
    mysqli_close($con);
?>