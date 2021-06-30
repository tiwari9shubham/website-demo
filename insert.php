<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php
		$conn = mysqli_connect("localhost", "root", "", "staff");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		if (isset($_POST['insert'])) 
		{
			 //Taking all 6 values from the form data(input)
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$gender = $_POST['gender'];
		$address = $_POST['address'];
		$email = $_POST['email'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO college ( `first_name`, `last_name`, `gender`, `address`, `email`) VALUES ('$first_name',
			'$last_name','$gender','$address','$email')";
		mysqli_query($conn, $sql);
		header("Location: list.php");
		
		// Close connection
		}
		
		
		?>
	</center>
</body>

</html>

