<?php                
SESSION_START();
    echo session_id();
$_SESSION['NameOfApplicant']=$_POST['nApp']; 
        
    if($_POST)
    {
        $_SESSION['NameOfApplicant']=$_POST['nApp']; 
        
    }
?>

<html>
    
 <form align="center" action ="stage2.php" method="POST">
     
     
        <hr>PASSPORT APPLICATION STAGE-1 </hr><br><br><br>

<table align="left" >
    <tr> 
        <td><b>Passport Application Information</b></td>	
    </tr> 
	
	<tr>
	    <td>Applying in:
        	<select name="country">
               	<option value="Bangladesh">Bangladesh</option>
                <option value="India">India</option>
                <option value="Pakistan">Pakistan</option>	
           	</select>
		</td>		
	</tr>
	
	<tr>
	    <td>Application Type:
            <b>NEW APPLICATION</b>
        </td>			
	</tr>
	
	<tr>
	    <td>Passport Type:
            <select type="select">
                <option value="Original">Original</option>
                <option value="Fake">Fake</option>
            </select>
		</td>	
	</tr>
	
	<tr>
	    <td>Delivery Type:
          	<input type="radio" name="regular">Regular
			<input type="radio" name="express">Express<br><br>
		</td>	
	</tr>
	
	<tr> 
        <td><b>Personal Information</b></td>	
    </tr> 
	
	<tr>
	    <td>Name of Applicant:</td>
        <td><input type="text" name="nApp"  /></td>
        
	</tr>
	
	<tr>
	    <td>First Part(Given Name):</td>
        <td><input type="text" name="fApp"/></td> 	 
	</tr>
	
	<tr>
	    <td>Second Part(Surname):</td>
        <td><input type="text" name="sApp" pattern="[A-Za-z]"/><br><br></td> 	 
	</tr>
	
	<tr>
	    <td>
            Guardian<input type="checkbox" name="guardian"><br>
        </td>			
	</tr>
	
	<tr>
	    <td>Fathers name:</td>
        <td><input type="text" name="fn" pattern="[A-Za-z]"/><br></td> 	 
	</tr>
	
	<tr>
	    <td>Fathers Nationality:
        	<select name="country">
               	<option value="Bangladeshi">Bangladeshi</option>
                <option value="Indian">Indian</option>
                <option value="Pakistani">Pakistani</option>	
           	</select>
		</td>		
	</tr>
	
	<tr>
	    <td>Fathers Profession:
        	<select name="profession">
               	<option value="Doctor">Doctor</option>
                <option value="Engineer">Engineer</option>
                <option value="Huzur">Huzur</option>	
           	</select>
		</td>	 
	</tr>
	
	<tr>
	    <td>Mothers name:</td>
        <td><input type="text" name="mn" pattern="[A-Za-z]"/><br></td> 	 
	</tr>
	
	<tr>
	    <td>Mothers Nationality:
        	<select name="country">
               	<option value="Bangladeshi">Bangladeshi</option>
                <option value="Indian">Indian</option>
                <option value="Pakistani">Pakistani</option>	
           	</select>
		</td>		
	</tr>
	
	<tr>
	    <td>Mothers Profession:
        	<select name="profession">
               	<option value="Doctor">Doctor</option>
                <option value="Engineer">Engineer</option>
                <option value="Huzur">Huzur</option>	
           	</select>
		</td>	 
	</tr>
	
	<tr>
	    <td>Spouses name:</td>
        <td><input type="text" name="sn" pattern="[A-Za-z]"/><br></td> 	 
	</tr>
	
	<tr>
	    <td>Spouses Nationality:
        	<select name="country">
               	<option value="Bangladeshi">Bangladeshi</option>
                <option value="Indian">Indian</option>
                <option value="Pakistani">Pakistani</option>	
           	</select>
		</td>		
	</tr>
	
	<tr>
	    <td>Spouses Profession:
        	<select name="profession">
               	<option value="Doctor">Doctor</option>
                <option value="Engineer">Engineer</option>
                <option value="Huzur">Huzur</option>	
           	</select>
		</td>	 
	</tr>
	
	<tr>
	    <td>Marital Status:
        	<select name="marital">
               	<option value="Married">Married</option>
                <option value="Unmarried">Unmarried</option>	
           	</select>
		</td>	 
	</tr>
	
	<tr>
	    <td>Applicants Profession:
        	<select name="profession">
               	<option value="Doctor">Doctor</option>
                <option value="Engineer">Engineer</option>
                <option value="Huzur">Huzur</option>	
           	</select>
		</td>	 
	</tr>
	
	<tr>
	    <td>Country of Birth:
        	<select name="country">
               	<option value="Bangladesh">Bangladesh</option>
                <option value="India">India</option>
                <option value="Pakistan">Pakistan</option>	
           	</select>
		</td>		
	</tr>
	
	<tr>
	    <td>Birth District:
        	<select name="district">
               	<option value="Dhaka">Dhaka</option>
                <option value="Mumbai">Mumbai</option>
                <option value="Islamabad">Islamabad</option>	
           	</select>
		</td>		
	</tr>
	
</table>

<!-- LEFT SIDE ENDED-->

<!-- RIGHT SIDE STARTED-->

<table align="center"> 
	
	<tr>
	    <td>Date of Birth:</td>
        <td><input type="text" name="dob"/></td>	
	</tr>
	
	<tr>
	    <td>Gender:
          	<input type="radio" name="male">Male
			<input type="radio" name="female">Female
			<input type="radio" name="others">Others
		</td>	
	</tr>
	
	<tr>
	    <td>Birth ID No:</td>
        <td><input type="text" name="bid" pattern="[0-9]"/></td>	
	</tr>
	
	<tr>
	    <td>National ID No:</td>
        <td><input type="text" name="nid" pattern="[0-9]"/></td>	
	</tr>
	
	<tr>
	    <td>Tax ID No:</td>
        <td><input type="text" name="tid" pattern="[0-9]"/></td>	
	</tr>
	
	<tr>
	     <td>Height:</td >
		 <td><input type="text" name="heightcm" pattern="[0-9]"/>cm</td>
         <td><input type="text" name="heightinch" pattern="[0-9]"/>inch</td>		 
	</tr>
	
	<tr>
	    <td>Religion:
        	<select name="religion">
               	<option value="Muslim">Muslim</option>
                <option value="Hindu">Hindu</option>
                <option value="Christan">Christan</option>	
           	</select>
		</td>		
	</tr>
	
	<tr>
	    <td>Email:</td>
        <td><input type="text" name="email"/><br><br>
		</td>	
	</tr>
	
	<tr>
	    <td><b>Citizenship Information</b></td>
	</tr>
	
	<tr>
	    <td>Nationality:
        	<select name="nationality">
               	<option value="Bangladeshi">Bangladeshi</option>
                <option value="Indian">Indian</option>
                <option value="Pakistani">Pakistani</option>	
           	</select>
		</td>		
	</tr>
	
	<tr>
	    <td>Citizenship Status:
        	<select name="citizenship">
               	<option value="Birth">Birth</option>
                <option value="Death">Death</option>
           	</select>
		</td>		
	</tr>
	
	<tr>
	    <td>Dual Citizenship:
          	<input type="radio" name="yes">Yes
			<input type="radio" name="no">No<br><br>
		</td>	
	</tr>
	
	<tr>
	    <td><b>Present Address</b></td>
	</tr>
	
	<tr>
	    <td>Village/House:</td>
        <td><input type="text" name="house"/>
		</td>	
	</tr>
	
	<tr>
	    <td>Road/Block/Sector:</td>
        <td><input type="text" name="road"/>
		</td>	
	</tr>
	
	<tr>
	    <td>District:
        	<select name="district">
               	<option value="Dhaka">Dhaka</option>
                <option value="Mumbai">Mumbai</option>
                <option value="Islamabad">Islamabad</option>	
           	</select>
		</td>		
	</tr>
	
	<tr>
	    <td>Police Station:
        	<select name="police">
               	<option value="Mirpur">Mirpur</option>
                <option value="Pabna">Pabna</option>
                <option value="Banani">Banani</option>	
           	</select>
		</td>		
	</tr>
	
	<tr>
	    <td>Post Office:
        	<select name="post">
               	<option value="Gulshan">Gulshan</option>
                <option value="Mohakhali">Mohakhali</option>
                <option value="Kuril">Kuril</option>	
           	</select>
		</td>		
	</tr>
	
	<tr>
	    <td><b>Permanent Address</b></td>
	</tr>
	
	<tr>
	    <td>
            <input type="checkbox" name="sameasabove">Same as above<br>
        </td>			
	</tr>
	
	<tr>
	    <td>Village/House:</td>
        <td><input type="text" name="house"/>
		</td>	
	</tr>
	
	<tr>
	    <td>Road/Block/Sector:</td>
        <td><input type="text" name="road"/>
		</td>	
	</tr>
	
	<tr>
	    <td>District:
        	<select name="district">
               	<option value="Dhaka">Dhaka</option>
                <option value="Mumbai">Mumbai</option>
                <option value="Islamabad">Islamabad</option>	
           	</select>
		</td>		
	</tr>
	
	<tr>
	    <td>Police Station:
        	<select name="police">
               	<option value="Mirpur">Mirpur</option>
                <option value="Pabna">Pabna</option>
                <option value="Banani">Banani</option>	
           	</select>
		</td>		
	</tr>
	
	<tr>
	    <td>Post Office:
        	<select name="post">
               	<option value="Gulshan">Gulshan</option>
                <option value="Mohakhali">Mohakhali</option>
                <option value="Kuril">Kuril</option>	
           	</select>
		</td>		
	</tr>
	
	<tr>
	    <td><button type="submit">SAVE & NEXT</button></td>  
         
	</tr>
	
</table>
     
    </form>


    
</html>
                