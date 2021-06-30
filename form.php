<?php
if(isset($_POST['sub']))
{
	print_r($_POST);
	$fname = $_POST['fname'];
	echo $fname;
	$lname=$_POST['lname'];
	echo $lname;
	$email=$_POST['email'];
	echo $email;
	$birthday=$_POST['birthday'];
	echo $birthday;
	
	
	
}
else{
	echo "no action";
}



?>   

<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="#" method="POST">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value="Shubham"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="Tiwari"><br><br>
   <label for="email">Email:</label>
  <input type="text" id="email" name="email"><br><br>
 
  <input type="reset">
   <label for="birthday">Birthday:</label>
  <input type="date" id="birthday" name="birthday">
  <label for="gender">gender:</label>
  <input type="text" id="gender" name="gender">
   <input type="submit" name="sub" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>
