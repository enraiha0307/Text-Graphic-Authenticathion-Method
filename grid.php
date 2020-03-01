<?php

$pic=array();

for($i=1;$i<=100;$i++)
{
	$pic[$i-1]=$i;
}

$b=array();
for($i=1;$i<=100;$i++)
{
  $b[$i-1]=mt_rand(100,1000);
}

    shuffle($pic);//printing the image


?>



<!Doctype Html>
<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="grid.css">

</head>
<title>
image page
</title>
 <body>

<script>
$(function() {
    if(window.history && window.history.pushState) {
        window.history.pushState('', null, './');
        $(window).on('popstate', function() {
            // alert('Back button was pressed.');
            document.location.href = '#';

        });
    }
});
</script>
  
<p>Choose any one image</p>
<div class="grid-container">
  <div class="grid-item" id="demo1"> 
<?php
  echo	"<img src=\"images\images($pic[0])\" height=100px width=100px>"
?>
 <div class="desc"> <?php echo"$b[0]" ?>
 </div>
</div>
  <div class="grid-item" id="demo2">
  <?php
  echo	"<img src=\"images\images($pic[1])\" height=100px width=100px>"
?>
<div class="desc"> <?php echo"$b[1]" ?>
</div>
  </div>
  <div class="grid-item" id="demo3">
  	<?php
  echo	"<img src=\"images\images($pic[2])\" height=100px width=100px>"
?>
  <div class="desc"> <?php echo"$b[2]" ?>
  </div>
</div>  
  <div class="grid-item" id="demo4">
  	<?php
  echo	"<img src=\"images\images($pic[3])\" height=100px width=100px>"
?>
  <div class="desc"> <?php echo"$b[3]" ?>
  </div>
</div>
  <div class="grid-item" id="demo5">
  	<?php
  echo	"<img src=\"images\images($pic[4])\" height=100px width=100px>"
?>
  <div class="desc"> <?php echo"$b[4]" ?>
  </div>
</div>
  <div class="grid-item" id="demo6">
  	<?php
  echo	"<img src=\"images\images($pic[5])\" height=100px width=100px>"
?>
  <div class="desc"> <?php echo"$b[5]" ?>
  </div>
</div>  
  <div class="grid-item" id="demo7">
  	<?php
  echo	"<img src=\"images\images($pic[6])\" height=100px width=100px>"
?>
  <div class="desc"> <?php echo"$b[6]" ?>
  </div>
</div>
  <div class="grid-item" id="demo8">
  	<?php
  echo	"<img src=\"images\images($pic[7])\" height=100px width=100px>"
?>
  <div class="desc"> <?php echo"$b[7]" ?>
  </div>
</div>
  <div class="grid-item" id="demo9">
  	<?php
  echo	"<img src=\"images\images($pic[8])\" height=100px width=100px>"
?>
  <div class="desc"> <?php echo"$b[8]" ?>
  </div>
</div>  
  <div class="grid-item" id="demo10">
  	<?php
  echo	"<img src=\"images\images($pic[9])\" height=100px width=100px>"
?>
  <div class="desc"> <?php echo"$b[9]" ?>
  </div>
</div>
  <div class="grid-item" id="demo11">
  	<?php
  echo	"<img src=\"images\images($pic[10])\" height=100px width=100px>"
?>
  <div class="desc"> <?php echo"$b[10]" ?>
  </div>
</div>
  <div class="grid-item" id="demo12">
  	<?php
  echo	"<img src=\"images\images($pic[11])\" height=100px width=100px>"
?>
  <div class="desc"> <?php echo"$b[11]" ?>
  </div>
</div>  
  <div class="grid-item" id="demo13">
  	<?php
  echo	"<img src=\"images\images($pic[12])\" height=100px width=100px>"
?>
  <div class="desc"> <?php echo"$b[12]" ?>
  </div>
</div>
  <div class="grid-item" id="demo14">
  	<?php
  echo	"<img src=\"images\images($pic[13])\" height=100px width=100px>"
?>
  <div class="desc"> <?php echo"$b[13]" ?>
  </div>  
</div>
  <div class="grid-item" id="demo15">
  	<?php
  echo	"<img src=\"images\images($pic[14])\" height=100px width=100px>"
?>
  <div class="desc"> <?php echo"$b[14]" ?>
  </div>
  </div>  
  <div class="grid-item" id="demo16">
  	<?php
  echo	"<img src=\"images\images($pic[15])\" height=100px width=100px>"
?>
  <div class="desc"> <?php echo"$b[15]" ?>
  </div>
</div>

</div>
<div class="box" method="post">
  <form action='submit2.php' method="post" >
<input type="text" name="imageno" placeholder="Enter Image Number">
<input type="text" name="tag" placeholder="Enter tag/description fro selected image">
<input type="submit" name="" value="Submit">

</form>

<?php
session_start();
$_SESSION['varname'] = $b;
$_SESSION['varname2']=$pic;

?>