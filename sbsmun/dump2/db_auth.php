<?php
date_default_timezone_set('Asia/Kolkata');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mun2016";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
 } 
 
 ?>
<?php 
foreach($_POST as $key=>$v){
	$_POST[$key] = $conn->escape_string($v);
}

foreach($_POST as $rrr){
	if(trim($rrr) == ''){
		die('Don\'t enter Blank Values');
	}
}
?>

