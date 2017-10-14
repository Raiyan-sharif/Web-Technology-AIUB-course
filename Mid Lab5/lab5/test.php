<?php
	$name = $_REQUEST["n"];
	$password =$_REQUEST["p"];
	$user=array("15-28958-1"=>"12345","15-28858-1"=>"123456");
	$admin=array("151-28958-1"=>"12345","151-28858-1"=>"123456");
	
	$flag1=0;
	$flag2=0;
	
	if(strlen($name)==10){
		foreach($user as $k=>$v){
			if($name == $k && $password == $v){
				$flag1=1;
			}
		}
		if($flag1==1){
			header('location:user.php');
		}
		else{
			echo "Error Login";
		}
	}
	else if(strlen($name)==11){
		foreach($admin as $k=>$v){
			if($name == $k && $password == $v){
				$flag2=1;
			}
		}
		if($flag2==1){
			header('location:Admin.php');
		}
		else{
			echo "Error Login";
		}
	}
	else{
		echo "Error in Id";
	}

?>
