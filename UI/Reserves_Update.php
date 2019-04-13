<?php 
	$con = mysqli_connect("localhost:3306","root","","hotelares");
    if (mysqli_connect_errno())
    {
       die('Could not connect: ' . mysqli_error($con));
    }
	
	$C_IRS_Number=$_GET['C_IRS_Number'];
	$Room_ID=$_GET['Room_ID'];
	$Start_Date=$_GET['Start_Date'];
	$Paid=$_GET['Paid'];
	$Finish_Date=$_GET['Finish_Date'];
	
	if ($C_IRS_Number==='' or $Room_ID==='' or $Start_Date==='' or $Paid==='' or $Finish_Date===''){
            header('Location:Reserves_Update.html');
            exit;
    }
	
    $result = mysqli_query($con, "UPDATE reserves SET C_IRS_Number = '$C_IRS_Number', Start_Date = '$Start_Date', Paid = '$Paid', Finish_Date = '$Finish_Date' WHERE C_IRS_Number = $C_IRS_Number AND Room_ID = '$Room_ID'");
	if($result === FALSE) {
         die(mysqli_error($con)); 
    }
	echo "Update Completed";
    mysqli_close($con);
?>