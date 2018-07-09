<?php
SESSION_START();
    echo session_id();
    $_SESSION['NameOfApplicant']=$_POST['nApp']; 
    
    if(isset($_SESSION["NameOfApplicant"]))
    {
        echo "SESSION CHECK ".$_SESSION["NameOfApplicant"]."found ";
        print_r ($_SESSION["NameOfApplicant"]);
    }
    else
    {
        echo "value not set";
    }
    
?>

<html>
   <?php
        echo "SESSION CHECK again ".$_SESSION["NameOfApplicant"];
        $test = $_POST['fApp'];
        echo "post value is ".$test;
        
        
    ?>
<hr>PASSPORT APPLICATION STAGE-2 </hr><br><br><br>

<form align="center" action ="stage3.php" method="POST">

<table align="left">

    <tr> 
        <td><b>Applicant Contact Information</b></td>	
    </tr> 
	
	<tr>
	    <td>Office No:</td>
        <td><input type="text" name="on"/></td>	
	</tr>
	
	<tr>
	    <td>Residence No:</td>
        <td><input type="text" name="rn"/></td>	
	</tr>
	
	<tr>
	    <td>Mobile No:</td>
        <td><input type="text" name="mn"/><br><br></td>	
	</tr>
	
	<tr> 
        <td><b>Emergency Contact Persons Details</b></td>	
    </tr> 
	
	<tr>
	    <td>Name:</td>
        <td><input type="text" name="name"/></td>	
	</tr>
	
	<tr>
	    <td>Country:
        	<select name="country">
               	<option value="Bangladesh">Bangladesh</option>
                <option value="India">India</option>
                <option value="Pakistan">Pakistan</option>	
           	</select>
		</td>		
	</tr>
	
	<tr>
	    <td>
            <input type="checkbox" name="present">Same as present address<br>
        </td>			
	</tr>
	
	<tr>
	    <td>
            <input type="checkbox" name="present">Same as permanent address<br>
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
	    <td>Contact No:</td>
        <td><input type="text" name="contact" pattern="[0-9]"/></td>	
	</tr>
	
	<tr>
	    <td>Email:</td>
        <td><input type="text" name="email"/>
		</td>	
	</tr>
	
	<tr>
	    <td>Relationship:
        	<select name="relationship">
               	<option value="Yes">Yes</option>
                <option value="No">No</option>	
           	</select>
		</td>		
	</tr>

</table>

<table align="center"> 
    
    <tr> 
        <td><b>Old Passport Information</b></td>	
    </tr>   

    <tr>
	    <td>Passport No:</td>
        <td><input type="text" name="passport"/></td>	
	</tr>	
	
	<tr>
	    <td>Place of Issue:</td>
        <td><input type="text" name="place"/></td>	
	</tr>
	
	<tr>
	    <td>Date of Issue:</td>
        <td><input type="text" name="date"/></td>	
	</tr>
	
	<tr>
	    <td>Re-issue Reason:
        	<select name="reissue">
               	<option value="Lost">Lost</option>
                <option value="Outdated">Outdated</option>	
           	</select>
		</td>		
	</tr>
	
	<tr>
	    <td><button type="button" onclick="history.go(-1);">PREVIOUS PAGE</button></td>
	    <td><button type="submit">SAVE & NEXT</button></td>  
	</tr>

</table>

</form>
</html>