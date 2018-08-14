
<?php
ini_set('display_errors', 1);

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
$password = "root";
$dbname = "student";

$conn=mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql code to create table
$sql = "CREATE TABLE IF NOT EXISTS student_info (
      ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
       Firstname VARCHAR(30) NOT NULL,
       Lastname VARCHAR(30) NOT NULL,
       Gender  VARCHAR(8) NOT NULL,
       Born_date VARCHAR(11) NOT Null,
       Address VARCHAR(50) NOT NULL,
       City VARCHAR(7) NOT NULL,
       State VARCHAR(30) NOT NULL,
       Country VARCHAR(7) NOT NULL,
       Zip_code VARCHAR(7) NOT NULL,
       Email VARCHAR(50) NOT NULL  ,
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
 	print("If Your Details Already exists");
 	//die("Connection failed: " . mysqli_connect_error());
 }
 //echo "value insert successfully";
 echo "<table border='1' width=500 height=400>

 <tr>

 <th>First_name</th>
 <th>Last_name</th>
 <th>Date_of_birth</th>
  <th>Mobile_no</th>
  <th>edit</th>
  <th>Delete</th>

 </tr>";
$show=mysqli_query($conn,"SELECT * FROM student_info");
while ($row = mysqli_fetch_assoc($show)) {
	echo "<tr>";

	 echo "<td>" . $row['Firstname'] . "</td>";

	 echo "<td>" . $row['Lastname'] . "</td>";

	 echo "<td>" . $row['Born_date'] . "</td>";

	 echo "<td>" . $row['Mobile_no'] . "</td>";

   echo '<td><a href="redirect_form.php?id=' . $row['ID'] . '">Edit</a></td>';

   echo '<td><a href="Update.php?id=' . $row['ID'] . '">Delete</a></td>';

	 echo "</tr>";

  
   }


/*  echo " <tr><td><input type="submit" name="Edit" value="Edit"></td>";
   echo "<td><input type="Submit" name="Delete" value="Delete"></td>";
   echo "<td><input type="submit" name="submit"></td></tr>";
   echo "</table>";

*/
?>


