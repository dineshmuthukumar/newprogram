
<?php

ini_set('display_errors', 1);

   $id=$_GET['id'];
   echo $id;
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
  echo "success";


	$showdetails=mysqli_query($conn,"SELECT * FROM student_info where ID='$id'");
	echo "<pre>";

	while($one_row=mysqli_fetch_array($showdetails)){


		$Firstname_rename=$one_row['Firstname'];
		$Lastname_rename=$one_row['Lastname'];
		$Gender_rename=$one_row['Gender'];
		$Borndate_rename=$one_row['Born_date'];
		$Address_rename=$one_row['Address'];
		$City_rename=$one_row['City'];
		$State_rename=$one_row['State'];
		$Country_rename=$one_row['Country'];

		$Zipcode_rename=$one_row['Zip_code'];

		$Zipcode_rename=$one_row['zip_code'];

		$Emailid_rename=$one_row['Email'];
		$Mobileno_rename=$one_row['Mobile_no'];

	}
?>



<html>
	<head></head>
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
#message {
    display:none;
    background: #f1f1f1;
    color: #000;
    position: relative;
    padding: 20px;
    margin-top: 10px;
}
#message p {
    padding: 10px 35px;
    font-size: 18px;
}
valid {
    color: green;
}
valid:before {
    position: relative;
    left: -35px;
    content: "✔";
}
invalid {
    color: red;
}
invalid:before {
    position: relative;
    left: -35px;
    content: "✖";
}
input[type=submit]:hover {
     color: #45a049;
 }
 input[type=reset]:hover {
      color: #45a049;
  }
	</style>
	
	<body>
		 <form action="Update.php" method="post">
	  <fieldset>
		
		 <center> 
	   <table>
            <h1>Enter Your Details</h1>
		 <tr> <td>FirstName</td> <td><input type='text' name="Firstname" placeholder="Enter the First_name....." value="<?php echo $one_row['Firstname'] ?>" /></td></tr>
         <tr> <td>LastName</label></td><td> <input type="text"  name="Lastname" placeholder="Enter the Lastname...." value="<?php echo $one_row['Lastname'] ?>" /> </td></tr>

          <tr><td>Select a profile_file:</td><td> <input type="file" name="myFile"></td> </tr>
          <tr><td> Gender: <?php echo $_GET['Gender_rename']; ?></td><td> <input type="radio" name="gender" value="male" checked=<?php if($one_row['Gender'] = "male") { echo "true"; }?>   >  male
         <input type="radio"  name="gender" value="female" checked=<?php if($one_row['Gender'] = "female") { echo "true"; }?> > female </td> </tr>
      <tr><td> Born Dater: </td> <td> <input type="date" name="borndate" max=2 Placeholder="03-01-1996" value="<?php  echo strftime('%Y-%m-%d',
  strtotime($one_row['Born_date'])); ?>" /> </td></tr>
                                     
          <tr> <td> Address: </td> <td> <textarea rows="4" cols="50" name="Address" ><?php echo $one_row['Address']; ?></textarea></td> </tr>
            <tr> <td>City: </td><td> <select name="City" value="<?php echo $_GET['City_rename'] ?>"/>
            <option value="0"> please select option</option>
            <option value="chennai" <?php if($one_row['City']=="chennai") echo 'selected="selected"'?>>Chennai</option>
            <option value="madurai" <?php if($one_row['City']=="madurai") echo 'selected="selected"'?>>Madurai</option>
            <option value="Trichy"<?php if($one_row['City']=="Trichy") echo 'selected="selected"'?>>Trichy</option>
            <option value="Virudhunagar" <?php if($one_row['City']=="Virudhunagar") echo 'selected="selected"'?>>Virudhunagar</option>  </select> </td></tr>
                <tr> <td>State: </td><td>
                   <input type="checkbox" name="State"  <?php if($one_row['State']=="Tamil_nadu") echo 'checked="checked"'; ?>   value="Tamil_nadu"   >Tamil_nadu<br>
                  <input type="checkbox" name="State" <?php if($one_row['State']=="kerala") echo 'checked="checked"'; ?>
                  value="kerala"> kerala<br>
                  <input type="checkbox" name="State" <?php if($one_row['State']=="karnataka") echo 'checked="checked"'; ?> value="karnataka" > karnataka<br>
		 <tr><td>  country : </td><td><input type="text"     name="country" value="<?php echo $one_row['Country'] ?>"/> </td> </tr>
		  <tr><td> zip_code: </td> <td><input type="numeric"  name="zipcode" placeholder="Enter the zipcode..." value="<?php echo $one_row['Zipcode'] ?>" > </td></tr>
		  <tr><td> Email_id:</td><td> <input type="Email"    name="emailid" placeholder="Enter the Your Email_id...." value="<?php echo $one_row['Emailid'] ?>"> </td></tr>
          <tr><td> Mobile_number:</td><td><input type="number" name="mobileno"  placeholder="Enter Mobile Number..." value="<?php echo $one_row['Mobileno'] ?>"> </td></tr>
		     
		
	
		<tr><td>  <input type="submit" name="submit" value="Update"> </td>
        <td> <input type="reset" name="reset" value="reset"> </td></tr> </form>
		</table>
		</center>	
		</fieldset>
		
	</body>
</html>
 
