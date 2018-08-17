
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
		 <form action="View.php" method="post" enctype="multipart/form-data">
	  <fieldset>
		
		 <center> 
	   <table>
            <h1>Enter Your Details</h1>
		 <tr> <td><strong>FIRSTNAME</strong></td> <td><input type='text' name="Firstname" placeholder="Enter the First_name....." /></td></tr>
         <tr> <td>LASTNAME</label></td><td> <input type="text"  name="Lastname" placeholder="Enter the Lastname...."  /> </td></tr>

          <tr><td>SELECT PROFILE FILE</td><td> <input type="file" name="upload"></td> </tr>
          <tr><td> GENDER: </td><td> <input type="radio" name="gender" value="male"    >  male
         <input type="radio"  name="gender" value="female" > female </td> </tr>
      <tr><td> BORN DATE: </td> <td> <input type="date" name="borndate" max=2 Placeholder="03-01-1996"  /> </td></tr>
                                     
          <tr> <td> ADDRESS: </td> <td> <textarea rows="4" cols="50" name="Address" ></textarea></td> </tr>
            <tr> <td>CITY: </td><td> <select name="City" v/>
            <option value="0"> please select option</option>
            <option value="chennai" >Chennai</option>
            <option value="madurai" >Madurai</option>
            <option value="Trichy">Trichy</option>
            <option value="Virudhunagar" >Virudhunagar</option>  </select> </td></tr>
                <tr> <td>STATE: <h3>Choose Multiple Choice</h3></td>
                  <td> <input type="checkbox" name="State[]"     value="Tamil_nadu"   >Tamil_nadu<br>
                  <input type="checkbox" name="State[]"      value="kerala"> kerala<br>
                  <input type="checkbox" name="State[]"       value="karnataka" > karnataka<br>
		 <tr><td>  COUNTRY: </td><td><input type="text"     name="country"/> </td> </tr>
		  <tr><td> ZIP_CODE: </td> <td><input type="numeric"  name="zipcode" placeholder="Enter the zipcode..." > </td></tr>
		  <tr><td> EMAIL_ID:</td><td> <input type="Email"    name="emailid" placeholder="Enter the Your Email_id...." > </td></tr>
          <tr><td> MOBILE_NUMBER:</td><td><input type="number" name="mobileno"  placeholder="Enter Mobile Number..." > </td></tr>
		     
		
	
		<tr><td>  <input type="submit" name="submit" value="submit"> </td>
        <td> <input type="reset" name="reset" value="reset"> </td></tr> </form>
    <tr><td> <a href="View.php" >View_details </a></td></tr>
		</table>
		</center>	
		</fieldset>
		
	</body>
</html>
 
