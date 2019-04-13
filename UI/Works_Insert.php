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
            header('Location:Works_Insert.html');
            exit;
    }
	
    $result = mysqli_query($con, "INSERT INTO `works` (`IRS_Number`, `Hotel_ID`, `Start_Date`, `Position`, `Finish_Date`) VALUES ('$IRS_Number', '$Hotel_ID', '$Start_Date', '$Position', '$Finish_Date')");
	if($result === FALSE) {
         die(mysqli_error($con)); 
    }
	echo "Insertion Completed";
    mysqli_close($con);
?>