
<?php
ini_set('display_errors', 1);
//include('redirect_form.php');
/*echo "Entered Details is" ."<br>";
echo "Firstname is"." ".$_POST["Firstname"]."<br>";
echo "Lastname is"." ".$_POST["Lastname"]."<br>";
echo "upload File is"." " .$_POST["myFile"]."<br>";
echo "Gender is"." ".$_POST["gender"]."<br>";
echo "born_date is"." ".$_POST["borndate"]."<br>";
echo "Address is"." ".$_POST["Address"]."<br>";
echo "City is"." ".$_POST["City"]."<br>";
echo "State is"." ".$_POST["State"]."<br>";
echo "Country is"." ".$_POST["country"]."<br>";
echo "Phone_no is"." ".$_POST["zipcode"]."<br>";
echo "Hobbies was"." ".$_POST["mobileno"]."<br>";
echo "Email_id is"." ".$_POST["emailid"]."<br>";
*/

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

$conn=mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql code to create table
$sql = "CREATE TABLE IF NOT EXISTS student_info (
       Firstname VARCHAR(30) NOT NULL,
       Lastname VARCHAR(30) NOT NULL,
       Gender  VARCHAR(5) NOT NULL,
       Born_date VARCHAR(11) NOT Null,
       Address VARCHAR(50) NOT NULL,
       City VARCHAR(7) NOT NULL,
       State VARCHAR(8) NOT NULL,
       Country VARCHAR(7) NOT NULL,
       Zip_code VARCHAR(7) NOT NULL,
       Email VARCHAR(50) NOT NULL  PRIMARY KEY,
        Mobile_no VARCHAR(12) NOT NULL)";

if (mysqli_query($conn, $sql)) {
   // echo "Table student created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
$query="INSERT INTO student_info(Firstname,Lastname,Gender,Born_date,Address,City,State,Country,Zip_code,Email,Mobile_no) VALUES ('$Firstname','$Lastname','$gender','$borndate','$Address','$City','$State','$Country','$Zip_code','$Email','$mobileno')";
$insert=mysqli_query($conn,$query);
 if(!$insert)
 {
 	//print("If Your Details Already exists");
 	//die("Connection failed: " . mysqli_connect_error());
 }
 //echo "value insert successfully";
 echo "<table border='1' width=500 height=400>

 <tr>

 <th>First_name</th>
 <th>Last_name</th>
 <th>Date_of_birth</th>
  <th>Mobile_no</th>

 </tr>";
$show=mysqli_query($conn,"SELECT * FROM student_info");
while ($row = mysqli_fetch_assoc($show)) {
	echo "<tr>";

	 echo "<td>" . $row['Firstname'] . "</td>";

	 echo "<td>" . $row['Lastname'] . "</td>";

	 echo "<td>" . $row['Born_date'] . "</td>";

	 echo "<td>" . $row['Mobile_no'] . "</td>";

	 echo "</tr>";



  
   }


/*  echo " <tr><td><input type="submit" name="Edit" value="Edit"></td>";
   echo "<td><input type="Submit" name="Delete" value="Delete"></td>";
   echo "<td><input type="submit" name="submit"></td></tr>";
   echo "</table>";

*/
?>


<html>
<head></head>
<body>
<table>
	<form method="POST" action=redirect_form.php>
	<td><input type="submit" name="submit" value="Edit"></td></tr> </form>
	<tr><td><input type="Submit" name="Delete" value="Delete"></td></tr>
</table>
</body>
</html>