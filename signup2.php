<?php

require "conn.php";
$userhas=$_POST['userid'];
$pas=$_POST['password'];
$digest = hash("sha256", utf8_encode($userhas));
$s="select * from userhash where hashid like '$digest' and otp like '$pas';";
$resu=mysqli_query($conn,$s);

$num=mysqli_num_rows($resu);

if(mysqli_num_rows($resu)>0){

	header('location:grid.php');
	echo "hi";
}
else
{
	header('location:signup.php');
}

session_start();
$_SESSION['varname3'] = $digest;

?>

