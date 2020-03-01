<?php
require "conn.php";

$hash_id=$_POST["user_name"];
$name=$_POST["name"];
$mysql_query="insert into userhash (hashid,name) values('$hash_id','$name')";
$result=mysqli_query($conn ,$mysql_query);
if(mysqli_num_rows($result)>0){
echo "login success";
}
else{
echo "login unsuccess";
}
?>