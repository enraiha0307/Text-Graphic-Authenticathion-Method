<?php
require "conn.php";
$hashuserid=$_POST["hashuserid"];
$image1=$_POST["image1"];
$image2=$_POST["image2"];
$image3=$_POST["image3"];
$image4=$_POST["image4"];
$image5=$_POST["image5"];
$image6=$_POST["image6"];
$image7=$_POST["image7"];
$image8=$_POST["image8"];
$image9=$_POST["image9"];
$image10=$_POST["image10"];
$image11=$_POST["image11"];
$image12=$_POST["image12"];
$image13=$_POST["image13"];
$image14=$_POST["image14"];
$mysql_query1="insert into imagedata (hashid,imagenu) values('$hashuserid','$image1');";
$mysql_query2="insert into imagedata (hashid,imagenu) values('$hashuserid','$image2');";
$mysql_query3="insert into imagedata (hashid,imagenu) values('$hashuserid','$image3');";
$mysql_query4="insert into imagedata (hashid,imagenu) values('$hashuserid','$image4');";
$mysql_query5="insert into imagedata (hashid,imagenu) values('$hashuserid','$image5');";
$mysql_query6="insert into imagedata (hashid,imagenu) values('$hashuserid','$image6');";
$mysql_query7="insert into imagedata (hashid,imagenu) values('$hashuserid','$image7');";
$mysql_query8="insert into imagedata (hashid,imagenu) values('$hashuserid','$image8');";
$mysql_query9="insert into imagedata (hashid,imagenu) values('$hashuserid','$image9');";
$mysql_query10="insert into imagedata (hashid,imagenu) values('$hashuserid','$image10');";
$mysql_query11="insert into imagedata (hashid,imagenu) values('$hashuserid','$image11');";
$mysql_query12="insert into imagedata (hashid,imagenu) values('$hashuserid','$image12');";
$mysql_query13="insert into imagedata (hashid,imagenu) values('$hashuserid','$image13');";
$mysql_query14="insert into imagedata (hashid,imagenu) values('$hashuserid','$image14');";
if($conn->query($mysql_query1)===TRUE)
{
	echo("inserted image1");
}
if($conn->query($mysql_query2)===TRUE)
{
	echo("inserted image2");
}
if($conn->query($mysql_query3)===TRUE)
{
	echo("inserted image3");
}
if($conn->query($mysql_query4)===TRUE)
{
	echo("inserted image4");
}
if($conn->query($mysql_query5)===TRUE)
{
	echo("inserted image5");
}
if($conn->query($mysql_query6)===TRUE)
{
	echo("inserted image6");
}
if($conn->query($mysql_query7)===TRUE)
{
	echo("inserted image7");
}
if($conn->query($mysql_query8)===TRUE)
{
	echo("inserted image8");
}
if($conn->query($mysql_query9)===TRUE)
{
	echo("inserted image9");
}
if($conn->query($mysql_query10)===TRUE)
{
	echo("inserted image10");
}
if($conn->query($mysql_query11)===TRUE)
{
	echo("inserted image11");
}
if($conn->query($mysql_query12)===TRUE)
{
	echo("inserted image12");
}
if($conn->query($mysql_query13)===TRUE)
{
	echo("inserted image13");
}
if($conn->query($mysql_query14)===TRUE)
{
	echo("inserted image14");
}


$conn->close();

?>