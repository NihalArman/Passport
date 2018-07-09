<?php

    SESSION_START();

?>

<hr>PASSPORT APPLICATION STAGE-3
<form  align="center" action ="result.php" method="POST">

<table align="left" action ="result.php" method="POST">

    <tr> 
        <td><b>Payment Information</b></td>	
    </tr>  </hr><br><br>
	
	<tr>
	    <td>Payment Type:
          	<input type="radio" name="online">Online
			<input type="radio" name="nononline">Non-Online<br><br>
		</td>	
	</tr>
	
	<tr>
	    <td>
            <input type="checkbox" name="payment">Skip Payment<br><br>
        </td>			
	</tr>
	
	<tr>
	    <td>Amount:
        	<select name="amount">
               	<option value="BDT">BDT</option>
                <option value="USD">USD</option>
                <option value="EURO">EURO</option>	
           	</select>
		</td>
        <td><input type="text" name="money"/></td>		
	</tr>
	
	<tr>
	    <td>Date of Payment:</td>
        <td><input type="text" name="dateofpay"/>
		</td>	
	</tr>
	
	<tr>
	    <td>Receipt No:</td>
        <td><input type="text" name="receipt"/>
		</td>	
	</tr>
	
	<tr>
	    <td>Name of Bank:
        	<select name="bank">
               	<option value="DhakaBank">Dhaka Bank</option>
                <option value="UCCBank">UCC Bank</option>
                <option value="IslamiBank">Islami Bank</option>	
           	</select>
        </td>			
	</tr>
	
	<tr>
	    <td>Name of Branch:
        	<select name="branch">
               	<option value="Banani">Banani</option>
                <option value="Mirpur">Mirpur</option>
                <option value="Uttara">Uttara</option>	
           	</select>
        </td>			
	</tr>
	
	<tr>
	    <td><button type="button" onclick="history.go(-1);">PREVIOUS PAGE</button></td>
	    <td><button type="submit">SAVE & NEXT</button></td>  
	</tr>
	
</table>

</form>