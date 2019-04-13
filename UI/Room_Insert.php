<?php 
	$con = mysqli_connect("localhost:3306","root","","hotelares");
    if (mysqli_connect_errno())
    {
       die('Could not connect: ' . mysqli_error($con));
    }
	
	$Hotel_ID=$_GET['Hotel_ID'];
	$Price=$_GET['Price'];
	$Repairs_need=$_GET['Repairs_need'];
	$Capacity=$_GET['Capacity'];
	$Expandable=$_GET['Expandable'];
	$View=$_GET['View'];
	
	
	if ($Hotel_ID==='' or $Price==='' or $Repairs_need==='' or $Capacity==='' or $Expandable==='' or $View===''){
            header('Location:Room_Insert.html');
            exit;
    }
	
	$result = mysqli_query($con, "INSERT INTO hotelroom (Hotel_ID, Price, Repairs_need, Capacity, Expandable, View) VALUES ('$Hotel_ID', '$Price', '$Repairs_need', '$Capacity', '$Expandable', '$View')");
	if($result === FALSE) {
         die(mysqli_error($con)); 
    }
	echo "Insertion Completed";
    mysqli_close($con);
?>