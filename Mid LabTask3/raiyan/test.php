<!DOCTYPE html>
<html>
<BODY>
<?php
	
	

	$ar=array("Raiyan"=>"1234","Ehsan"=>"1234");
	$a=0;
	echo "<br>";
	foreach($ar as $k=>$v){
		if($_POST["n"] == $k && $_POST["p"] == $v){
			$a=1;
		}
	}
	if($a==1){
		echo "Sucessful Login";
	}
	else{
		echo "Error Login";
	}

?>
</BODY>
</html>