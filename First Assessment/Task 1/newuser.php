<?php
ini_set('display_errors', 1);
$name=$_POST['name'];
$gender=$_POST['gender'];
$Address=$_POST['Address'];
$City=$_POST['City'];
$State=$_POST['State'];
$Country=$_POST['Country'];
$Mobileno=$_POST['Mobileno'];
$Username=$_POST['Username'];
$Password=$_POST['Password'];

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "college";
echo "<pre>";
print_r($_POST);

$conn=mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "success";
if($_POST['Submit'])
{
$query="INSERT INTO student_info(name,gender,Address,City,State,Mobile_no,Country,Username,Password) VALUES ('$name','$gender','$Address','$City','$State','$Mobileno','$Country','$Username','$Password')";
$insert=mysqli_query($conn,$query);
 if(!$insert)
 {
 	print("If Your Details Already exists");
 	//die("Connection failed: " . mysqli_connect_error());
 }
 echo "success";
 echo "your Registration is Successfully";
 echo "please Check Login link";
 echo "<a href="Login.php">Login</a>"

}
?>

<!DOCTYPE html>
 <html>
 <head>
   <title></title>
 </head>
 <script>

 </script>
 <body>
  <form action="Login.php">
  <table>
    <tr><td><input type="Submit" name="Login" value="Login"  float="right"> </td></tr>
  </table> 
 </body>
 </html>