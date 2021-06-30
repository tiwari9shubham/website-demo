<?php
$conn = mysqli_connect("localhost", "root", "", "staff");
$id = $_GET['upid'];
$qry = mysqli_query($conn,"select * from college where id='$id'");
//echo $id;
$data = mysqli_fetch_assoc($qry);
print_r($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="update.php" method="post" >
		<table>
		
				
				<input type="hidden" name="upid" value="<?php echo $data['id']; ?>">
	
			<tr>
				<td>first name</td>
				<td><input type="text" name="first_name" value="<?php echo $data['first_name']; ?>"></td>
			</tr>
			<tr>
				<td>last name</td>
				<td><input type="text" name="last_name" value="<?php echo $data['last_name']; ?>"></td>
			</tr>
			<tr>
				<td>gender</td>
				<td><input type="text" name="gender" value="<?php echo $data['gender']; ?>"></td>
			</tr>
			<tr>
				<td>address</td>
				<td><input type="text" name="address" value="<?php echo $data['address']; ?>"></td>
			</tr>
			<tr>
				<td>email</td>
				<td><input type="text" name="email" value="<?php echo $data['email']; ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="updata" value="update"></td>
			</tr>
		</table>
	</form>
	<?php

if (isset($_POST['updata']))
 {
    $upid = $_POST['upid'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    //update data
    echo $sql = "UPDATE COLLEGE  SET first_name = '$first_name',last_name='$last_name', gender='$gender',address='$address',email='$email' WHERE id='$upid'";
  $data =  mysqli_query($conn,$sql);
  if($data)
  {
  	echo "record updated successfully";
  }
  else
  {
  	echo "record not updated";
  }

   header("location:list.php");
    //close connection

      }




?>
</body>
</html>