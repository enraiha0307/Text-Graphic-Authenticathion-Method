<DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
  <meta charset="utf-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

  <title> Sign-Up Form</title>
  <link rel="stylesheet" href="signup.css">
</head>
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

<form class="box" action="signup2.php" method="post">
<h1>Sign Up</h1>
<input type="text" name="userid" placeholder="User-ID">
<input type="password" name="password" placeholder="One Time Password">
<input type="submit" name="" value="Create">

<form> 
</body>
</html>

