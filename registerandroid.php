<?php
require "conn.php";
$userid=$_POST["userid"];
$userotp=$_POST["userotp"];
$publicke=$_POST["publick"];
$mysql_query="insert into userhash (hashid,pwi,publickey) values('$userid','$userotp','$publicke');";
if($conn->query($mysql_query)===TRUE)
{
	echo("insert successful");
}
else
{
	echo("user-id invalid or it already exists");
}

$conn->close();

?>
