<!DOCTYPE html>
<html lang="en">

<head>
	<title>GFG- Store Data</title>
</head>

<body>
	<center>
		<h1>Storing Form data in Database</h1>

		<form action="insert.php" method="post">
			<p>

				<label for="firstName">First Name:</label>
				<input type="text" name="first_name" id="firstName">
			</p>


			
			<p>
				<label for="lastName">Last Name:</label>
				<input type="text" name="last_name" id="lastName">
			</p>


			
			<p>
				<label for="Gender">Gender:</label>
				
				<input type="radio" name="gender" value="male" checked>male
				<input type="radio" name="gender" value="female">female
				<input type="radio" name="gender" value="other">other
			</p>

			
			
			<p>
				<label for="Address">Address:</label>
				<input type="text" name="address" id="Address">
			</p>

			
			
			<p>
				<label for="emailAddress">Email Address:</label>
				<input type="text" name="email" id="emailAddress">
			</p>

			
			<input type="submit" name="insert" value="Submit">
		</form>
	</center>
</body>

</html>

