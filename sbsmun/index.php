<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sbsmun";


date_default_timezone_set('Asia/Kolkata');
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO `logs`(`sess_id`, `dnt`, `ip`, `pagename`, `modname`) VALUES (

'".md5(sha1(uniqid().time()))."',
'".date('d M,D Y H:i:s',time())."',
'".$_SERVER['REMOTE_ADDR']."',
'unk',
'unk')";

if ($conn->query($sql) === TRUE) {
   header('Location: home.php');
} else {
    echo "Site Down <a href='home.php'></a>";
}

$conn->close();
 

?>