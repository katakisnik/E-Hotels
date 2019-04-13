<?php 
	$con = mysqli_connect("localhost:3306","root","","hotelares");
    if (mysqli_connect_errno())
    {
       die('Could not connect: ' . mysqli_error($con));
    }
	
	$IRS_Number=$_GET['IRS_Number'];
	$Hotel_ID=$_GET['Hotel_ID'];
	$Start_Date=$_GET['Start_Date'];
	$Position=$_GET['Position'];
	$Finish_Date=$_GET['Finish_Date'];
	
	if ($IRS_Number==='' or $Hotel_ID==='' or $Start_Date==='' or $Position==='' or $Finish_Date===''){
            header('Location:Works_Update.html');
            exit;
    }
	
    $result = mysqli_query($con, "UPDATE works SET Hotel_ID = '$Hotel_ID', Start_Date = '$Start_Date', Position = '$Position', Finish_Date = '$Finish_Date' WHERE IRS_Number = $IRS_Number");
	if($result === FALSE) {
         die(mysqli_error($con)); 
    }
	echo "Update Completed";
    mysqli_close($con);
?>