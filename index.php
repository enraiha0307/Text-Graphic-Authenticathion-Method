<!Doctype Html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<title>
front page
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
<div class="a">
  <div class="c">
   <p><h2>Welcome!</h2></p>
   </div>
</div>
<div class="b"method="post">
 <a href="log_in.php" button type="button">Log in</a></button>.
 <a href="signup.php" button type="button">Sign up</a></button>.
</div>



</body>

</html>