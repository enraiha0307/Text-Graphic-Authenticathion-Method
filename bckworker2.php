<?php
require "conn.php";
session_start();
$Pi = $_SESSION['varname'];
$userhash = $_SESSION['hasid'];
$di=$_POST["di"];
$ci=$_POST["ci"];

$pi1=$Pi+1;
$digest = hash("sha256", utf8_encode($pi1));

 $s1 = $digest;
 $s2 = $di;
 $x = bin2hex(pack('H*',$s1) ^ pack('H*',$s2));

$Pj=$x;
$x1="cdac_project";
$x2=hash("sha256", utf8_encode($x1));
$x3 = bin2hex(pack('H*',$x2) ^ pack('H*',$userhash));

$Vi2 = hash("sha256", utf8_encode($x3));

$hashpj=hash("sha256", utf8_encode($Pj));
$x4=bin2hex(pack('H*',$Vi2) ^ pack('H*',$hashpj));

$Ci1=hash("sha256", utf8_encode($x4));

if($Ci1==$ci){
	echo "success";
}
else{
	echo "unsuccess";
}

?>