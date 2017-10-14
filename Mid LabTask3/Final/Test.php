<!DOCTYPE html>
<html>
<BODY>
<?php
	
	

	if($_REQUEST["fname"] ==null || $_REQUEST["lname"]==null|| $_REQUEST["DOBMonth"] == "Select month" || $_REQUEST["DOBDay"]=="Select Day"||$_REQUEST["DOBYear"]=="Select Year"||$_REQUEST["phone"]==null ||$_REQUEST["email"]==null||$_REQUEST["pass"] ==null||$_REQUEST["cpass"] ==null)
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
		
		else{echo "OK";}
		
	}

?>
</BODY>
</html>