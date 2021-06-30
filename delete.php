<?php
$conn = mysqli_connect("localhost", "root", "", "staff");

$id = $_GET['delid']; // get id through query string

$del = mysqli_query($conn,"DELETE FROM `college` WHERE `id` ='$id'"); // delete query

if($del)
{
    mysqli_close($conn); // Close connection
    header("location:list.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>