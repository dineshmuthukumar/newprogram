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
if($_POST['submit'])
{
$query="INSERT INTO Remainder_List(name,status) VALUES('$name','$time2')";
//echo $query;
//die();
$insert=mysqli_query($conn,$query);
if(!$insert)
{
	//echo "data is not insert";
}
//echo "success";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<script >
	

</script>
<body>
	<center>
	<h2>Remainder_List</h2>
	<table>
<tr><td><a href='Remainderlist.php'> Add List</a></td><td><a href='Homepage.php'> Home_page</a></td></tr>
</table>
</center>
</body>
</html>


<?php
   echo "<center>";
 echo "<table border='1' width=400 height=400>

 <tr>

 <th>Name</th>
 <th>Time</th>
 </tr>";
 $show=mysqli_query($conn,"SELECT * FROM Remainder_List"); # fetch all lines
while ($row = mysqli_fetch_assoc($show)) {
	echo "<tr>";

	 echo "<td>" . $row['name'] . "</td>";

	 //echo "<td>" . $row['Status'] . "</td>";
	 //echo "</tr>";
	 $time=$row['Status'];

	 $time1 = date("g:i:s"); # curent time
	 $time1 = strtotime("1/1/2018 $time1"); #format date
	$time2 = strtotime("1/1/2018 $time");
$difference = ($time2 - $time1)/3600;
$difference=$difference."hours and Minuties remaining";
if($difference<0)
{
	$difference="Expired";
}

echo "<td>" . $difference . "</td>";
	 echo "</tr>";

   echo "</center>";
   }
?>