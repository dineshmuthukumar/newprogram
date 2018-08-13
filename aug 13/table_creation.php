<?php

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
echo $;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";

$conn1=mysqli_connect($servername, $username, $password, $dbname);

if (!$conn1) {
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

if (mysqli_query($conn1, $sql)) {
    echo "Table student created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn1);
}

$query="INSERT INTO student(Firstname,Lastname,Gender,Born_date,Address,City,State,Country,Zip_code,Email,Mobile_no) VALUES ($Firstname,$Lastname,$gender,$borndate,$Address,$City,$State,$Country,$Zip_code,$Email,$mobileno)";
$insert=mysqli_query($conn1,$query);
 if(!$insert)
 {
 	die("Connection failed: " . mysqli_connect_error());
 }
 echo "value insert successfully";
?>