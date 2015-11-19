<?php
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(-1);
if(isset($_POST['fname']))
{
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
$sql = "INSERT INTO Students (firstname,lastname,age,schoolID,locationID) VALUES (?,?,?,?,?)";
$params array($fname,$lname,$age,$sID,$lID);
$stmt = sqlsrv_query( $conn, $sql, $params);
echo $stmt;
}
?>
