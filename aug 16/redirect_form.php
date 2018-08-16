
<?php
ini_set('display_errors', 1);

   $id=$_GET['id'];
   echo $id;
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "student";

	$conn=mysqli_connect($servername, $username, $password, $dbname);
	echo "<pre>";
	//print_r( $conn);

	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
  echo "success";


	$showdetails=mysqli_query($conn,"SELECT * FROM student_info where ID='$id'");
	echo "<pre>";

	while($one_row=mysqli_fetch_assoc($showdetails)){

		$Firstname_rename=$one_row['Firstname'];
		$Lastname_rename=$one_row['Lastname'];
		$Gender_rename=$one_row['Gender'];
		$Borndate_rename=$one_row['Born_date'];
		$Address_rename=$one_row['Address'];
		$City_rename=$one_row['City'];
		$State_rename=$one_row['State'];
		$Country_rename=$one_row['Country'];
		$Zipcode_rename=$one_row['Zip_code'];
		$Emailid_rename=$one_row['Email'];
		$Mobileno_rename=$one_row['Mobile_no'];

	}

header("Location: newform.php?Firstname_rename=$Firstname_rename&Lastname=$Lastname_rename&Gender=$Gender_rename&Borndate_rename=$Borndate_rename&Address_rename=$Address_rename&City_rename=$City_rename&State_rename=$State_rename&Country_rename=$Country_rename&Zipcode_rename=$Zipcode_rename&Emailid_rename=$Emailid_rename&Mobileno_rename=$Mobileno_rename");



?>