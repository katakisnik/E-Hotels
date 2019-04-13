<html>
	<head>
		<title>Find Room</title>
		<link type="text/css" rel="stylesheet" href="bootstrap.css"/>
	</head>
	
	<body>
		<br>
		<br>
		<div style="margin:auto;">

			<h1 style="text-align:center;color:#77419b;font-family:Lucida Handwriting;color:darkred;"><strong>Find a Room</strong></h1>
	
		</div>
		
		<form action="test.php" method = "POST">
			Start Date<br>
			<input type="date" name="Start_Date" value="Start_Date" >
			<br>
			<br>
			Finish Date<br>
			<input type="date" name="Finish_Date" value="Finish_Date" >
			<br>
			(If you don't wanna make a reservation, you can leave the dates blank)<br>
			<input type="submit" value="Submit">
		</form>
		
		<br>
		<br>
		<br>
		<a href="View1.php"><button>Available Rooms per Town</button></a>
		<br>
		<br>
		<br>
		<a href="View2.php"><button>Available Rooms ordered by their Capacity</button></a>
		
	</body>
</html>