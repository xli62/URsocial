
Hello Hello
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
<input type="submit" name="submit" id="submit" value="Submit">
</form>
<?php include "second.php";?>
</div>
