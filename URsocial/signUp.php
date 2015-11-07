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

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

      <div class="container">

        <div class="navbar-header">

          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

            <span class="sr-only">Toggle navigation</span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

          </button>

          <a class="navbar-brand" href="#">UR Socail</a>

        </div>

        <div id="navbar" class="navbar-collapse collapse">

          <form class="navbar-form navbar-right" role="form">

            <div class="form-group">

              <input type="text" placeholder="Email" class="form-control">

            </div>

            <div class="form-group">

              <input type="password" placeholder="Password" class="form-control">

            </div>

            <button type="submit" class="btn btn-success">Sign in</button>

          </form>

        </div><!--/.navbar-collapse -->

      </div>

    </nav>


    <div class="container">
<form method="POST" action="signUp.php" id="form">
<h2>Register for URSocial!</h2>

<label>First Name :</label>
<input type="text" name="fname" id="fname" /><br/>
<label>Last Name :</label>
<input type="text" name="lname" id="lname" /><br/>
<label>Age :</label>
<input type="text" name="age" id="age" /><br/>
<label>SchoolID :</label>
<input type="text" name="sID" id="sID" /><br/>
<label>LocationID :</label>
<input type="text" name="lID" id="lID" /><br/>
<span><input type="radio" name="method" value="post">Accept Terms and get Social!</span><br/>
<input type="submit" name="submit" id="submit" value="Submit">
</form>
<p>PHP happens here</p>
<?php
if(isset($_POST['fname']))
{
echo "<h2>php block entgerred</h2>";

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$age = $_POST['age'];
$sID = $_POST['sID'];
$lID = $_POST['lID'];
echo "<span class='success'>Form Submitted By <b>POST METHOD</b></span><br/>";
echo "First Name : ".$fname."<br/>Last Name : ".$lname."<br/>Age :".$age."<br/>School ID :".$sID."<br/>LocID :".$lID;

$serverName = "GARRETTSURFACE"; //serverName\instanceName
$connectionInfo = array( "Database"=>"URSocial", "UID"=>"sa", "PWD"=>"Ralphie08");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}

$sql = "INSERT INTO Students (firstname,lastname,age,schoolID,locationID) VALUES ('Jimmy','Smith',20,1,1)";
$stmt = sqlsrv_query($conn, $sql, $params);
if( $stmt === false ) {
     die( print_r( sqlsrv_errors(), true));
}

$sql = "INSERT INTO Students (firstname,lastname,age,schoolID,locationID) VALUES ('$fname','$lname',$age,$sID,$lID)";
$stmt = sqlsrv_query( $conn, $sql, $params);
echo $stmt;
}
?>




<p>End of php</p>

      <footer>

        <p>&copy; Company 2015</p>

      </footer>

    </div> <!-- /container -->        
</body>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>

</html>



