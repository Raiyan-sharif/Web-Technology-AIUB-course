<!DOCTYPE html>
<html>
<BODY>
<?php
	
	$fn=$_REQUEST["fname"];
	$ln=$_REQUEST["lname"];
	$pn=$_REQUEST["phone"];
	$ei=$_REQUEST["emailId"];
	$pass=$_REQUEST["pass"];
	if($_REQUEST["fname"] ==null || $_REQUEST["lname"]==null||$_REQUEST["phone"]==null ||$_REQUEST["emailId"]==null||$_REQUEST["pass"] ==null||$_REQUEST["cpass"] ==null)
	{
		if($_REQUEST["pass"] !=$_REQUEST["cpass"] &&(strlen($_REQUEST["pass"])<8) )
		{
			echo "password no match or empty";
		}
		else{
			echo "Empty field";
		}
	}
	else{
		if(strlen($_REQUEST["pass"])<=8){
			echo "password length too short";
		}
		else if($_REQUEST["pass"] != $_REQUEST["cpass"]){
			echo "Both password are not same";
		}
		
		else{
			echo "<center>
				<table border=1px>
				  <tr>
					<th>First Name</th>
					<td>$fn</th> 
					
				  </tr>
				  <tr>
					<th>Last Name</td>
					<td>$ln</td>
					
				  </tr>
				  <tr>
					<th>Phone</td>
					<td>$pn</td>
					
				  </tr>
				  <tr>
					<th>Email Id</td>
					<td>$ei</td>
					
				  </tr>
				  <tr>
					<th>Password</td>
					<td>$pass</td>
					
				  </tr>
				  
				</table>
			</center>";
		}
		
	}

?>
</BODY>
</html>