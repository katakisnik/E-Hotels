<?php 
	$con = mysqli_connect("localhost:3306","root","","hotelares");
    if (mysqli_connect_errno())
    {
       die('Could not connect: ' . mysqli_error($con));
    }
	
	$PhoneNum=$_GET['PhoneNum'];
	$Hotel_Group_ID=$_GET['Hotel_Group_ID'];
	
	if ($Hotel_Group_ID==='' or $PhoneNum==='') {
		header('Location:HotelGroup_PhoneNum_Insert.html');
		exit;
	}
	
	$result = mysqli_query($con, "INSERT INTO phonenumgroup (Hotel_Group_ID, PhoneNum) VALUES ('$Hotel_Group_ID', '$PhoneNum')");
	if($result === FALSE) {
         die(mysqli_error($con)); 
    }
	echo "Insertion Completed";
    mysqli_close($con);
?>