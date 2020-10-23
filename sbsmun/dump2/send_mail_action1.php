<?php
include('db_auth.php');
if(isset($_POST['nme_frm'])){
if(isset($_POST['eml_frm'])){
if(isset($_POST['sbj_frm'])){
if(isset($_POST['msg_frm'])){
if(isset($_POST['m_lassh1_hsh'])){
if(isset($_POST['subm_bt'])){
	
?>
<?php
   





$p_name = $_POST['nme_frm'];
$p_email = $_POST['eml_frm'];
$msg_subj = $_POST['sbj_frm'];
$msg= $_POST['msg_frm'];
$toeml = 'anonymous.code.anonymous@gmail.com';
$hash=$_POST['m_lassh1_hsh'];


$hashsql = "SELECT * FROM mail_rec where ml_hsh = '".$hash."'";
$hashres = $conn->query($hashsql);

if ($hashres->num_rows >0) {
die('Cant send same mail more than once');
} else {


require 'mail/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->SMTPDebug = 1;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'basherswilldoit@gmail.com';                 // SMTP username
$mail->Password = $pass;                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->From = '-'.$p_email.'-';
$mail->FromName = $p_name.'@'.$p_email;
$mail->addAddress($toeml, 'SBSMUNREFFERSL');     // Add a recipient

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $msg_subj;
$mail->Body    = $msg;
$mail->AltBody = $msg;

if(!$mail->send()) {

$errorsendingsql = "INSERT INTO `mail_rec`(`ml_hsh`,`ml_from_name`, `ml_from_email`, `ml_to_email`, `ml_subj`, `ml_content`, `ml_timestamp_sent`,`error_msg`,`ml_sent`) VALUES (
 '".$hash."',
 '".$p_name."',
 '".$p_email."',
 '".$toeml."',
 '".$msg_subj."',
 '".$msg."',
 '".time()."',
 'Mailer Error: ' . ".$conn->escape_string($mail->ErrorInfo)."',
 0
)";

if ($conn->query($errorsendingsql) === TRUE) {
    die('Mail not sent');
} else {
    die ("Error: " . $errorsendingsql . "<br>" . $conn->error);
}



} else {
    
	
$noerrsql = "INSERT INTO `mail_rec`(`ml_hsh`,`ml_from_name`, `ml_from_email`, `ml_to_email`, `ml_subj`, `ml_content`, `ml_timestamp_sent`,`error_msg`) VALUES (
 '".$hash."',
 '".$p_name."',
 '".$p_email."',
'".$toeml."',
 '".$msg_subj."',
 '".$msg."',
 '".time()."',
 '-None-'
)";

if ($conn->query($noerrsql) === TRUE) {
    header('Location: index.php');
} else {
    die ("Error: " . $noerrsql . "<br>" . $conn->error);
}


	
	
	
	
}




}


}
}
}
}
}
}

?>