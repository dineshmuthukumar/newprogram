<?php
if(isset($_POST['update']))
{
<<<<<<< HEAD
$link = mysqli_connect("localhost", "root", "root", "student");
=======
$link = mysqli_connect("localhost", "root", "", "student");
>>>>>>> dc58f877b6542fefd85b5e30f84fc2073e8a8d7e

if(!$link)
{
	 die("ERROR: Could not connect. " . mysqli_connect_error());
}

<<<<<<< HEAD
$delete_query=mysqli_query($link, "UPDATE student_info SET Firstname='$_POST['Firstname']',Lastname='$_POST['Lastname']',Gender='$_POST['gender']',Born_date='$_POST['borndate']',Address='$_POST['Address']',City='$_POST['City']',State='$_POST['State']',Country='$_POST['country']',Zip_code='$_POST['zipcode']',Email='$_POST['emailid']',Mobile_no='$_POST['mobileno']' WHERE Email_='$_POST['Emailid']'");
if(!$delete_query)
=======
$delete_query=mysqli_query($link, "UPDATE student_info SET Firstname='$_POST['Firstname']',Lastname='$_POST['Lastname']',Gender='$_POST['gender']',Born_date='$_POST['borndate']',Address='$_POST['Address']',City='$_POST['City']',State='$_POST['State']',Country='$_POST['country']',Zip_code='$_POST['zipcode']',Email='$_POST['emailid']',Mobile_no='$_POST['mobileno']'= WHERE Email_='$_POST['Emailid']'");
if(!delete_query)
>>>>>>> dc58f877b6542fefd85b5e30f84fc2073e8a8d7e
{
  
	die();
}
<script>alert('update query successfully')</script>
header("Location:newpage.php");

}
?>