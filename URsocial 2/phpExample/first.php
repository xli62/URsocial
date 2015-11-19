<!DOCTYPE html>
<html>
<head>
<title>PHP GET and POST Method Example</title>
<!-- Include CSS  File Here-->
<link rel="stylesheet" href="css/style.css"/>
<!-- Include JavaScript File Here-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="js/get_post.js"></script>
</head>
<body>
<div class="container">
<div class="main">
<form method="" action="first.php" id="form">
<h2>PHP GET and POST Method Example</h2>
<label>Select Form Method :</label>
<span><input type="radio" name="method" value="post"> POST
<input type="radio" name="method" value="get"> GET </span>
<label>First Name :</label>
<input type="text" name="fname" id="fname" />
<label>Last Name :</label>
<input type="text" name="lname" id="lname" />
<label>Age :</label>
<input type="text" name="age" id="age" />
<label>SchoolID :</label>
<input type="text" name="sID" id="sID" />
<label>LocationID :</label>
<input type="text" name="lID" id="lID" />
<input type="submit" name="submit" id="submit" value="Submit">
</form>
<?php include "second.php";?>
</div>
</div>
</body>
</html>