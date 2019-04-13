<?php 
	$con = mysqli_connect("localhost:3306","root","","hotelares");
    if (mysqli_connect_errno())
    {
       die('Could not connect: ' . mysqli_error($con));
    }
	
	$IRS_Number=$_GET['IRS_Number'];
	$SSN=$_GET['SSN'];
	$First_Registration=$_GET['First_Registration'];
	$L_Name=$_GET['L_Name'];
	$F_Name=$_GET['F_Name'];
	$Street=$_GET['Street'];
	$Street_Number=$_GET['Street_Number'];
	$Postal_Code=$_GET['Postal_Code'];
	$City=$_GET['City'];
	
	if ($IRS_Number==='' or $L_Name==='' or $F_Name==='' or $SSN==='' or $First_Registration==='' or $Street==='' or $City==='' or $Street_Number==='' or $Postal_Code===''){
            header('Location:Customer-Insert.html');
            exit;
    }
	
	$result = mysqli_query($con, "UPDATE customer SET SSN = '$SSN', First_Registration = '$First_Registration', L_Name = '$L_Name', F_Name = '$F_Name', Street = '$Street', Street_Number = '$Street_Number', Postal_Code = '$Postal_Code', City = '$City' WHERE IRS_Number = $IRS_Number");
	if($result === FALSE) {
         die(mysqli_error($con)); 
    }
	echo "Update Completed";

    mysqli_close($con);
	
?>