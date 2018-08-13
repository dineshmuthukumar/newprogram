
<?php

if(isset($_POST['Edit'])) {
	$conn = mysqli_connect("localhost","root","");

	if (!$conn)

	{

	die('Could not connect: ' . mysql_error());

	}

	mysqli_select_db("mysql", $conn);

	$showdetails=mysqli_query($conn,"SELECT * FROM student_info where Firstname='$_POST[name]'");
	while($one_row=mysqli_fetch_array($showdetails)){

		$Firstname_rename=$one_row['Firstname'];
		$Lastname_rename=$one_row['Lastname'];
		$Gender_rename=$one_row['Gender'];
		$Borndate_rename=$one_row['Born_date'];
		$Address_rename=$one_row['Address'];
		$City_rename=$one_row['City'];
		$State_rename=$one_row['State'];
		$Country_rename=$one_row['Country'];
		$Zipcode_rename=$one_row['zip_code'];
		$Emailid_rename=$one_row['Email'];
		$Mobileno_rename=$one_row['Mobile_no'];

	}


	header("Location:newform.html");


}
?>