<?php

require "conn.php";
$userid=$_POST["userid"];
$pwi=$_POST["userotp"];
$s="UPDATE `userhash` SET `pwi` = '$pwi' WHERE `userhash`.`hashid` = '$userid'";

if(mysqli_query($conn,$s))
{
   echo "record updated";
}
else
{
	echo "not updated";
}

?>