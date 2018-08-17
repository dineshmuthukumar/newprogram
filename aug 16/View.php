
<?php
//echo "<pre>";
//print_r($_POST);

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "student";

$conn=mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$Firstname=$_POST['Firstname'];
$Lastname=$_POST['Lastname'];
$gender=$_POST['gender'];
$borndate=$_POST['borndate'];
$Address=$_POST['Address'];
$City=$_POST['City'];
$Country=$_POST['country'];
$Zip_code=$_POST['zipcode'];
$Email=$_POST['emailid'];
$mobileno=$_POST['mobileno'];
$State = implode(",",$_POST["State"]);
  
 //$name=$_FILES['upload']['name'];
 //$target_dir = "upload/";
 //$target_file = $target_dir . basename($_FILES["upload"]["name"]);
 // Select file type
 //$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


//$target_path = "uploadpath:/"; 
//$target_path = $target_path.basename( $_FILES['upload']['name']);


//$file_name = $_FILES['upload']['name'];
//$file_type = $_FILES['upload']['type'];
//$file_tmp_name = $_FILES['upload']['tmp_name'];
//$file_size = $_FILES['upload']['size'];
//$target_dir = "uploads/";
//$targetDir = "uploads/";
//$fileName = basename($_FILES["upload"]["name"]);
//$targetFilePath = $targetDir . $fileName;
//$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
//$allowTypes = array('jpg','png','jpeg','gif','pdf');
//print_r(__LINE__);
//print_r($fileName);
//die();


 //$file = $_FILES['upload']['tmp_name'];

//$image= addslashes(file_get_contents($_FILES['upload']['tmp_name']));    
//echo $file;
//die();
    //$image_name = addslashes($_FILES['upload']['name']);

//move_uploaded_file($file_tmp_name,$target_dir.$file_name);
$targetDir = "uploads/";
$fileName = basename($_FILES["upload"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
if($_POST['submit'])
{
$query="INSERT INTO student_info(Profile,Firstname,Lastname,Gender,Born_date,Address,City,State,Country,Zip_code,Email,Mobile_no) VALUES ('$fileName','$Firstname','$Lastname','$gender','$borndate','$Address','$City','$State','$Country','$Zip_code','$Email','$mobileno')";
$insert=mysqli_query($conn,$query);
move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
 if(!$insert)
 {
 	print("If Your Details Already exists");
 	//die("Connection failed: " . mysqli_connect_error());
 }
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

   echo '<td><a href="Edit.php?id=' . $row['ID'] . '">Edit</a></td>';

   echo '<td><a href="Delete.php?id=' . $row['ID'] . '">Delete</a></td>';

	 echo "</tr>";

  
   }


/*  echo " <tr><td><input type="submit" name="Edit" value="Edit"></td>";
   echo "<td><input type="Submit" name="Delete" value="Delete"></td>";
   echo "<td><input type="submit" name="submit"></td></tr>";
   echo "</table>";

*/
?>
 <!DOCTYPE html>
 <html>
 <head>
   <title></title>
 </head>
 <script>
    input[type=submit]{
     float:left;
 }


 </script>
 <body>
  <form action="newform.php">
  <table>
    <tr><td><input type="Submit" name="Home" value="Home"  <ul class="nav nav-list primary left-menu" float="right"> </td></tr>
  </table> 
 </body>
 </html>

