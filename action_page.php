//<?php
//$con = mysqli_connect("localhost","root","","project");


//$all_functions = get_defined_functions();
//function writeMsg() {
 // echo "Hello world!";
//  <?php
// database connection code

// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','project');

// get the post records
$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtPhone = $_POST['txtPhone'];
$txtMessage = $_POST['txtMessage'];

// database insert SQL code
$sql = "INSERT INTO `tbl_contact` (`Id`, `fldName`, `fldEmail`, `fldPhone`, `fldMessage`) VALUES ('0', '$txtName', '$txtEmail', '$txtPhone', '$txtMessage')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Contact Records Inserted";
}
?>
}

//function awani()
//{
	//echo "awanish";
//}

//awani();
//echo "<pre>";
//print_r($all_functions);
//print_r($_POST);

?>


