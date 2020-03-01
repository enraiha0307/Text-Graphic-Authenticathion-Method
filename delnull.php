<?php

require "conn.php";
$pwi=$_POST["pwi"];
$s="delete from userhash where pwi like '';";
$resu=mysqli_query($conn,$s);

if($resu)
{
   echo "record deleted";
}
else
{
	echo "no need to delete";
}

?>