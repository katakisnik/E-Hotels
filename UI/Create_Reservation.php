<?php 
	$con = mysqli_connect("localhost:3306","root","","hotelares");
    if (mysqli_connect_errno())
    {
       die('Could not connect: ' . mysqli_error($con));
    }
	
	$IRS_Number=$_POST['IRS_Number'];
	$Room_ID=$_POST['drop'];
	$Start_Date=$_POST['Start_Date'];
	$Finish_Date=$_POST['Finish_Date'];
	
	if ($Start_Date==="" or $Finish_Date==="") {
		echo "You can't make a reservation without setting the start and finish date. Please go back!";
		exit;
	}
	
	if ($IRS_Number==='') {
		echo "You need to enter your registered IRS_Number, Please try again!";
		exit;
	}
	
	$result = mysqli_query($con, "INSERT INTO reserves (C_IRS_Number, Room_ID, Start_Date, Finish_Date, Paid) VALUES ('$IRS_Number', '$Room_ID', '$Start_Date', '$Finish_Date', 'NO')");
	if($result === FALSE) {
         echo"You need to sign up first";
		 exit;	
    }
	echo "Reservation has been made, thank you for selecting our Company!";
    mysqli_close($con);
?>