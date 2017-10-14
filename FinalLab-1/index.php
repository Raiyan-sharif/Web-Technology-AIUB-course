<?php
function getJSONFromDB($sql){
	$conn = mysqli_connect("localhost", "root", "","UserInfo");
	//echo $sql;
	$result = mysqli_query($conn, $sql)or die(mysqli_error());
	$arr=array();
	while($row = mysqli_fetch_assoc($result)) {
		$arr[]=$row;
	}
	return json_encode($arr);
}
$jsonData= getJSONFromDB("select * from User");

$jsn=json_decode($jsonData);
echo "<pre>";
print_r($jsn);
echo "</pre>";
$flag=false;
foreach($jsn as $v){
	if($v->UserName== $_POST["n"]&&  $v->Password == $_POST["p"]){
		$flag=true;
	}
		
}
if($flag == true){
echo "login Successfully";}
else{
	echo "error";
}

?>