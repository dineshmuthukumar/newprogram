
<?php
include ("include/redirect_form.php");
$Firstname=$_POST['Firstname'];
$Lastname=$_POST['Lastname'];
$gender=$_POST['gender'];
$borndate=$_POST['borndate'];
$Address=$_POST['Address'];
$City=$_POST['City'];
$State=$_POST['State'];
$Country=$_POST['country'];
$Zip_code=$_POST['zipcode'];
$Email=$_POST['emailid'];
$mobileno=$_POST['mobileno'];
echo "<pre>";
//print_r($_POST);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";

$Connection=mysqli_connect($servername, $username, $password, $dbname); # connect the database 

if (!$Connection) {
    die("Connection failed: " . mysqli_connect_error()); // error not connection statement
}
$query="INSERT INTO student_info(Firstname,Lastname,Gender,Born_date,Address,City,State,Country,Zip_code,Email,Mobile_no) VALUES ('$Firstname','$Lastname','$gender','$borndate','$Address','$City','$State','$Country','$Zip_code','$Email','$mobileno')"; # insert query in db
$insert_query=mysqli_query($Connection,$query);  # execute the query statement
 if(!$insert_query)
 {
 	//print("If Your Details Already exists");
 	//die("Connection failed: " . mysqli_connect_error());
 }
 //echo "value insert successfully";
 echo "<table border='1' width=500 height=400> // table create

 <tr>

 <th>First_name</th>
 <th>Last_name</th>
 <th>Date_of_birth</th>
  <th>Mobile_no</th>

 </tr>";
$display_query=mysqli_query($Connection,"SELECT * FROM student_info"); // execute the query statement
while ($row = mysqli_fetch_assoc($display_query)) { // fetch the database while loop display the all details
	echo "<tr>";

	 echo "<td>" . $row['Firstname'] . "</td>";

	 echo "<td>" . $row['Lastname'] . "</td>";

	 echo "<td>" . $row['Born_date'] . "</td>";

	 echo "<td>" . $row['Mobile_no'] . "</td>";

	 echo "</tr>";



  
   }
?>
<html>
<head></head>
<body>
<table>
	<form method="POST" action=redirect_form.php>
	<td><input type="submit" name="submit" value="Edit"></td></tr> </form>
	<h4>Edit the Current User Data</h4>
	<tr><td><input type="Submit" name="Delete" value="Delete"></td></tr>
</table>
</body>
</html>