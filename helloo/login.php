<?php
require "conn.php";
$user_name=$_POST["user_name"];
$user_pass=$_POST["password"];
$mysql_query="select * from userhash where hashid like '$user_name';";
$mysql_result=mysqli_query($conn ,$mysql_query);
if(mysqli_num_rows($mysql_result)>0){
echo "user-id already exists";
}
else{
echo "user-id valid";
}

?>
