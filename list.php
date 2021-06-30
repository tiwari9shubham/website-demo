<?php 
$conn = mysqli_connect("localhost","root","","staff");
$sql = mysqli_query($conn,"select * from college");
// print_r($sql);
// echo "<pre>";
// while ($row = mysqli_fetch_assoc($sql)) 
// {
// 	print_r($row);
// }


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<table class="table" border="1" align="center">
	<tr>
		<th>id</th>
		<th>first name</th>
		<th>last name</th>
		<th>gender</th>
		<th>address</th>
		<th>email</th>
		<th>action</th>
	</tr>
	<?php while ($row = mysqli_fetch_assoc($sql)) 
{ ?>
	<tr>
		<td><?php echo $row['id']; ?></td>
		<td><?php echo $row['first_name']; ?></td>
		<td><?php echo $row['last_name']; ?></td>
		<td><?php echo $row['gender']; ?></td>
		<td><?php echo $row['address']; ?></td>
		<td><?php echo $row['email']; ?></td>
	    <td> <a href="delete.php?delid=<?php echo $row['id']; ?>">delete</a> ||
	    	<a href="update.php?upid=<?php echo $row['id']; ?>">update</a>
	    </td>

	</tr>
	<?php } ?>
</table>
<div align="center">
	<a href="index.php">insert</a>
</div>

</body>
</html>