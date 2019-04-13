<?php 
	$con = mysqli_connect("localhost:3306","root","","hotelares");
    if (mysqli_connect_errno())
    {
       die('Could not connect: ' . mysqli_error($con));
    }
	
	$Hotel_ID=$_GET['Hotel_ID'];
	$Room_ID=$_GET['Room_ID'];
	$Price=$_GET['Price'];
	$Repairs_need=$_GET['Repairs_need'];
	$Expandable=$_GET['Expandable'];
	$Capacity=$_GET['Capacity'];
	$View=$_GET['View'];
	
	if ($Hotel_ID==='' or $Room_ID==='' or $Price==='' or $Repairs_need==='' or $Expandable==='' or $Capacity==='' or $View===''){
            header('Location:Room_Update.html');
            exit;
    }
	
	$result = mysqli_query($con, "UPDATE hotelroom SET Hotel_ID = '$Hotel_ID', Price = '$Price', Repairs_need = '$Repairs_need', Capacity = '$Capacity', Expandable = '$Expandable', View = '$View' WHERE Room_ID = $Room_ID");
	if($result === FALSE) {
         die(mysqli_error($con)); 
    }
	echo "Update Completed";

    mysqli_close($con);
	
?>