<?php 
	$con = mysqli_connect("localhost:3306","root","","hotelares");
    if (mysqli_connect_errno())
    {
       die('Could not connect: ' . mysqli_error($con));
    }
	
	$Start_Date=$_GET['Start_Date'];
	$Room_ID=$_GET['Room_ID'];
	$E_IRS_Number=$_GET['E_IRS_Number'];
	$C_IRS_Number=$_GET['C_IRS_Number'];
	$Finish_Date=$_GET['Finish_Date'];
	$Pay_amount=$_GET['Pay_amount'];
	$Pay_method=$_GET['Pay_method'];
	
	if ($Start_Date==='' or $Room_ID==='' or $E_IRS_Number==='' or $C_IRS_Number==='' or $Finish_Date==='' or $Pay_amount==='' or $Pay_method===''){
            header('Location:Rents_Update.html');
            exit;
    }
	
    $result = mysqli_query($con, "UPDATE rents SET Start_Date = '$Start_Date', E_IRS_Number = '$E_IRS_Number', Finish_Date = '$Finish_Date', Pay_amount = '$Pay_amount', Pay_method = '$Pay_method' WHERE C_IRS_Number = $C_IRS_Number AND Room_ID = '$Room_ID'");
	if($result === FALSE) {
         die(mysqli_error($con)); 
    }
	echo "Update Completed";
    mysqli_close($con);
?>