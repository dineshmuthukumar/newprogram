
<?php

ini_set('display_errors', 1);

   $id=$_GET['id'];
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "student";

	$conn=mysqli_connect($servername, $username, $password, $dbname);
	echo "<pre>";
	//print_r( $conn);

	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}


	$showdetails=mysqli_query($conn,"SELECT * FROM student_info where ID='$id'");
	echo "<pre>";

	while($one_row=mysqli_fetch_array($showdetails)){


		$Firstname_rename=$one_row['Firstname'];
		$Lastname_rename=$one_row['Lastname'];
		$Gender_rename=$one_row['Gender'];
		$Borndate_rename=$one_row['Born_date'];
		$Address_rename=$one_row['Address'];
		$City_rename=$one_row['City'];
		$State1= explode(',',$one_row['State']);
		$Country_rename=$one_row['Country'];

		$Zipcode_rename=$one_row['Zip_code'];

		$Emailid_rename=$one_row['Email'];
		$Mobileno_rename=$one_row['Mobile_no'];
		$image=$one_row['Profile'];

	}
	$State = array_map('trim', $State1); 
?>



<html>
	<head> </head>
	<style>
    fieldset {
        background-color:green ;
        color:blue;
    }
input[type=submit], input[type=reset]{
    background-color: green;
    color: yellow;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
}
valid {
    color: green;
}
valid:before {
    position: relative;
    left: -35px;
    content: "✔";
}
input[type=submit]:hover {
     color: #45a049;
 }
 input[type=reset]:hover {
      color: #45a049;
  }
	</style>
	
	<body>
 <form action="Update.php" method="POST">
  <fieldset>
		 <center> 
	           <table>
              <h1>Enter Your Update Details</h1>
     <tr> <td>ID</td> <td><input type='hidden' name="ID"  value="<?php echo $id ?>"  /></td></tr>
 <tr> <td>FirstName</td> <td><input type='text' name="Firstname" placeholder="Enter the First_name....." value="<?php echo $Firstname_rename ?>" /></td></tr>
 <tr> <td>LastName</td><td> <input type="text"  name="Lastname" placeholder="Enter the Lastname...." value="<?php echo $Lastname_rename ?>" /> </td></tr>
<tr><td>Select a profile_file:</td><td> <input type="file" name="myFile" value="<?php echo $image  ?>"  accept="image/*" ></td><td><img src='<?php echo $image;?>' width="100" height="100" alt='old_image'/> </td> </tr>
<tr><td> Gender: <?php echo $Gender_rename; ?></td><td> <input type="radio" name="gender" value="male" <?php if($Gender_rename =="male") { echo "checked"; }?> > male
<input type="radio"  name="gender" value="female" <?php if($Gender_rename == "female") { echo "checked"; }?> > female </td> </tr>
<tr><td> Born Dater: </td> <td> <input type="date" name="borndate" max=2 Placeholder="03-01-1996" value="<?php  echo strftime('%Y-%m-%d',strtotime($Borndate_rename)); ?>" /> </td></tr>
 <tr> <td> Address: </td> <td> <textarea rows="4" cols="50" name="Address" ><?php echo $Address_rename; ?></textarea></td> </tr>
 <tr> <td>City: </td><td> <select name="City" value="<?php echo $City_rename?>"/>
 <option value="0"> please select option</option>
 <option value="chennai" <?php if($City_rename=="chennai") echo 'selected="selected"'?>>Chennai</option>
 <option value="madurai" <?php if($City_rename=="madurai") echo 'selected="selected"'?>>Madurai</option>
 <option value="Trichy"<?php if($City_rename=="Trichy") echo 'selected="selected"'?>>Trichy</option>
 <option value="Virudhunagar" <?php if($City_rename=="Virudhunagar") echo 'selected="selected"'?>>Virudhunagar</option>  </select> </td></tr>
 <tr> <td>State: </td><td>
 <input type="checkbox" name="State[]"  <?php if(in_array("Tamil_nadu",$State)) echo 'checked="checked"'; ?>   value="Tamil_nadu"   >Tamil_nadu<br>
 <input type="checkbox" name="State[]" <?php if(in_array("kerala",$State)) echo 'checked="checked"'; ?> value="kerala"> kerala<br>
 <input type="checkbox" name="State[]" <?php if(in_array("karnataka",$State)) echo 'checked="checked"'; ?> value="karnataka" > karnataka<br>
<tr><td>country : </td><td><input type="text"     name="country" value="<?php echo $Country_rename ?>"/> </td> </tr>
	<tr><td> zip_code: </td> <td><input type="numeric"  name="zipcode" placeholder="Enter the zipcode..." value="<?php echo $Zipcode_rename ?>" > </td></tr>
	<tr><td> Email_id:</td><td> <input type="Email"    name="emailid" placeholder="Enter the Your Email_id...." value="<?php echo $Emailid_rename ?>"> </td></tr>
    <tr><td> Mobile_number:</td><td><input type="number" name="mobileno"  placeholder="Enter Mobile Number..." value="<?php echo $Mobileno_rename ?>"> </td></tr>
	<tr><td>  <input type="submit" name="submit" value="Update"> </td>
    <td> <input type="reset" name="reset" value="reset"> </td></tr> 
          </form>
		</table>
	</center>	
		</fieldset>
		 </body>
</html>
 
