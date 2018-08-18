<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
</head>
<body>
</body>
</html>
<?php
session_start();
ini_set('display_errors', 1);
$name=$_POST['Username'];
$Pwd=$_POST['Password'];

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "college";

$conn=mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "success";
$query="SELECT Username,Password FROM student_info WHERE Username='$name' && Password='$Pwd'";
//echo $query;
$check_query=mysqli_query($conn,$query);

//echo "<pre">

if (mysqli_num_rows($check_query) > 0)
 {
    // output data of each row
    while($row = mysqli_fetch_assoc($check_query)) {
        echo "Username: " . $row["Username"].$row["Password"]. "<br>";
        header('location:Remainderadd.php');
    }
} else {
    echo "0 results";
}

?>


<!DOCTYPE html>
 <html>
 <head>
   <title></title>
 </head>
 <body>
  <form action="Endpage.php">
  <table>
    <tr><td><input type="Submit" name="Home" value="View"  float="right"> </td></tr>
  </table> 
 </body>
 </html>