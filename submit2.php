<!DOCTYPE html>
<html>
<style>
	body{
		color: #17a4ab;
		margin-top:200px;
		text-align:center;
	}
</style>
<body>
<?php

require "conn.php";

session_start();
$var_value3 = $_SESSION['varname3'];
header("Cache-Control: max-age=300, must-revalidate"); 
$var_value = $_SESSION['varname'];
$var_value2=$_SESSION['varname2'];

$img=$_POST['imageno'];
for($i=0;$i<16;$i++){

	if($var_value[$i]==$img){

$re=$var_value2[$i];

$mysql_query="insert into imagedata (hashid,imagenu) values('$var_value3','$re');";
if($conn->query($mysql_query)===TRUE)
{   
	echo "<h1>You have successfuly signed up!!</h1>";
	echo("insert successful");
}
else
{
	echo("<h1>user-id already exists. Hence Sign-up unsuccessful</h1>");
}

break;
	}
	else{
		if($i==15){
		echo "<h1>!!!You have entered wrong or invalid imageno.</h1>";
}
	}
}
?>
</body>
</html>
