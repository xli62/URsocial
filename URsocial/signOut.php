<!doctype html>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->

<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->

<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->

<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->

    <head>

        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title></title>

        <meta name="description" content="">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">



        <link rel="stylesheet" href="css/bootstrap.min.css">

        <style>

            body {

                padding-top: 50px;

                padding-bottom: 20px;

            }

        </style>

        <link rel="stylesheet" href="css/bootstrap-theme.min.css">

        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

    </head>

    <body>

        <!--[if lt IE 8]>

            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>

        <![endif]-->

<?php include "inc/nav.inc"; ?>

    <div class="container">
	
	<div class="fieldset">
<form method="POST" action="signUp.php" id="form">
<div class="fieldsetheader">Register for URSocial!</div>
<br/>

<label>First Name :</label>
<input type="text" name="fname" id="fname" /><br/>
<label>Last Name :</label>
<input type="text" name="lname" id="lname" /><br/>
<label>Age :</label>
<input type="text" name="age" id="age" /><br/>
<label>Email<label>
<input type="text" name="email" id="email" /><br/>
<label>SchoolID :</label>
<input type="text" name="sID" id="sID" /><br/>
<label>LocationID :</label>
<input type="text" name="lID" id="lID" /><br/>
<span><input type="radio" name="method" value="post">Accept Terms and get Social!</span><br/>
<input type="submit" name="submit" id="submit" value="Submit">
</form>

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$cookie_name = 'phpCookieName';
$cookie_value = $fname;
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), '/');

}
?>

<script>
function signOut() {
    var cookie_name = 'phpCookieName';
	delete_cookie(cookie_name);
}
</script>

</div>

      <footer>

        <p>&copy; URsocial 2015</p>

      </footer>

    </div> <!-- /container -->        
</body>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>

</html>



