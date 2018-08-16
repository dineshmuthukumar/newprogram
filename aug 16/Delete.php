<?php
ini_set('display_errors', 1);
$id=$_GET['id'];
echo $id;
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "student";

	$conn=mysqli_connect($servername, $username, $password, $dbname);
	

if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}

$query="DELETE FROM student_info WHERE student_info.ID = '$id'";

$delete_query=mysqli_query($conn,$query);
if(!$delete_query)
{
die();
}
echo "delete successfully";
 header("Refresh:0; View.php");
?>