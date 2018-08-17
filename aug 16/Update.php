<!DOCTYPE html>
<html>
<head>
	<title> </title>
	<h1>Update_status</h2>
</head>
<body>
</body>
</html>

<?php
    ini_set('display_errors', 1);
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "student";

	$conn=mysqli_connect($servername, $username, $password, $dbname);
	//echo "<pre>";
	//print_r($_POST);
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
 //echo "success";
$ID=$_POST['ID'];
//echo "<pre>";
//print_r($_POST);
//die();
 $Firstname=$_POST['Firstname'];
 $Lastname=$_POST['Lastname'];
 $Gender=$_POST['gender'];
 $Born_date=$_POST['borndate'];
 $Address=$_POST['Address'];
 $City=$_POST['City'];
 $State=implode(",",$_POST["State"]);
 $Country=$_POST['country'];
 $Zip_code=$_POST['zipcode'];
 $Emailid=$_POST['emailid'];
 $Mobileno=$_POST['mobileno'];
 echo $Firstname."<br>"; 
//$State = array_map('trim', $State1);
 $query="UPDATE student_info SET Firstname='$Firstname',Lastname='$Lastname',Gender='$Gender',Born_date='$Born_date',Address='$Address',City='$City',State='$State',Country='$Country',Zip_code='$Zip_code',Email='$Emailid',Mobile_no='$Mobileno' WHERE ID='$ID'";
 $update_query=mysqli_query($conn,$query);
if(!$update_query)
{
	echo "not update";
	die();
}
  echo "Data update Success";
  header("Refresh:4; View.php");
//header("Location:newpage.php");
?>