
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
		 <form action="newpage.php" method="post">
	  <fieldset>
		
		 <center> 
	   <table>
            <h1>Enter Your Details</h1>
		 <tr> <td>FirstName</td> <td><input type='text' name="Firstname" placeholder="Enter the First_name....." value="<?php echo $_GET['Firstname_rename'] ?>" /></td></tr>
         <tr> <td>LastName</label></td><td> <input type="text"  name="Lastname" placeholder="Enter the Lastname...." value="<?php echo $_GET['Lastname_rename'] ?>" /> </td></tr>

          <tr><td>Select a profile_file:</td><td> <input type="file" name="myFile"></td> </tr>
          <tr><td> Gender: <?php echo $_GET['Gender_rename']; ?></td><td> <input type="radio" name="gender" value="male" <?php echo ($_GET['Gender_rename']=='Male')?'checked':'' ?>   >  male
         <input type="radio"  name="gender" value="female" <?php echo ($_GET['Gender_rename']=='female')?'checked':'' ?> > female </td> </tr>
      <tr><td> Born Dater: </td> <td> <input type="date" name="borndate" max=2 Placeholder="03-01-1996" value="<?php  echo strftime('%Y-%m-%d',
  strtotime($_GET['Borndate_rename'])); ?>" /> </td></tr>
                                     
          <tr> <td> Address: </td> <td> <textarea rows="4" cols="50" name="Address" ><?php echo $_GET['Address_rename']; ?></textarea></td> </tr>
            <tr> <td>City: </td><td> <select name="City" value="<?php echo $_GET['City_rename'] ?>"/>
            <option value="0"> please select option</option>
            <option value="chennai" <?php if($_GET['City_rename']=="chennai") echo 'selected="selected"'?>>Chennai</option>
            <option value="madurai" <?php if($_GET['City_rename']=="madurai") echo 'selected="selected"'?>>Madurai</option>
            <option value="Trichy"<?php if($_GET['City_rename']=="Trichy") echo 'selected="selected"'?>>Trichy</option>
            <option value="Virudhunagar" <?php if($_GET['City_rename']=="Virudhunagar") echo 'selected="selected"'?>>Virudhunagar</option>  </select> </td></tr>
                <tr> <td>State: </td><td>
                   <input type="checkbox" name="State"  <?php if($_GET['State_rename']=="Tamil_nadu") echo 'checked="checked"'; ?>   value="Tamil_nadu"   >Tamil_nadu<br>
                  <input type="checkbox" name="State" <?php if($_GET['State_rename']=="kerala") echo 'checked="checked"'; ?>
                  value="kerala"> kerala<br>
                  <input type="checkbox" name="State" <?php if($_GET['State_rename']=="karnataka") echo 'checked="checked"'; ?> value="karnataka" > karnataka<br>
		 <tr><td>  country : </td><td><input type="text"     name="country" value="<?php echo $_GET['Country_rename'] ?>"/> </td> </tr>
		  <tr><td> zip_code: </td> <td><input type="numeric"  name="zipcode" placeholder="Enter the zipcode..." value="<?php echo $_GET['Zipcode_rename'] ?>" > </td></tr>
		  <tr><td> Email_id:</td><td> <input type="Email"    name="emailid" placeholder="Enter the Your Email_id...." value="<?php echo $_GET['Emailid_rename'] ?>"> </td></tr>
          <tr><td> Mobile_number:</td><td><input type="number" name="mobileno"  placeholder="Enter Mobile Number..." value="<?php echo $_GET['Mobileno_rename'] ?>"> </td></tr>
		     
		
	
		<tr><td>  <input type="submit" name="submit" value="submit"> </td>
        <td> <input type="reset" name="reset" value="reset"> </td></tr>
        <td> <input type="submit" name="">
		</table>
		</center>	
		</fieldset>
		
	</body>
</html>
 <?
