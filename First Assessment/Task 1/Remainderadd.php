<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "college";


$name=$_POST['name'];
$time2=$_POST['Time'];



$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "college";

$conn=mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "success";

$query="INSERT INTO Remainder_Llist(name,status) VALUES('$name','$time2')";
$insert=mysqli_query($conn,$query);
if(!$insert)
{
	die();
}
echo "success";
$time1 = date("g:i:s");
//echo $time1."<br>";
	$time1 = strtotime("1/1/2018 $time1");
	$time2 = strtotime("1/1/2018 $time2");
$difference = ($time2 - $time1)/3600;
$difference=$difference."hours and Minuties remaining";
if($difference<0)
{
	$difference="Expired";
}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Remainder_List</h2>
<a href="Remainderlist.php"> Add List</a>
<a href="Check.php"> Check Session </a>
</body>
</html>


<?php
  
 echo "<table border='1' width=300 height=300>

 <tr>

 <th>Name</th>
 <th>Time</th>
 </tr>";
 $show=mysqli_query($conn,"SELECT * FROM Remainder_List");
while ($row = mysqli_fetch_assoc($show)) {
	echo "<tr>";

	 echo "<td>" . $row['name'] . "</td>";

	 echo "<td>" . $row['Status'] . "</td>";
	 echo "</tr>";
	 $time=$row['Status'];

  
   }

   //header('refresh:Update.php');



?>