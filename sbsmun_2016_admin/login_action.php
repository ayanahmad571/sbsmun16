<?php 
include('include.php');
?>

<?php
if(isset($_POST['usr_nm']) and isset($_POST['pw'])){
	
	
	
	
	
	
	if(isset($_POST['usr_nm'])){
		$uid = $_POST['usr_nm'];
	}else{
    header("Location: login.php?error=4");
		die('Username is not valid');
	}
	
	if(isset($_POST['pw'])){
		$pw=$_POST['pw'];
	}else{
    header("Location: login.php?error=4");
		die("Password is not valid");
	}
	
	
	
	
	
	


$sql = "SELECT * FROM `adm_usrs_inf` where adm_username='".$uid."' and adm_password='".md5($pw)."' and adm_valid=1 ";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // output data of each row

    foreach($row = $result->fetch_assoc() as $rk=>$rv) {
        session_regenerate_id();
		$_SESSION[strtoupper($rk)]=$rv;
		$_SESSION['SESS_IIID'] = 'I4';

}


if($_SESSION['ADM_VALIDTILL'] == 0){
}else{
	if($_SESSION['ADM_VALIDTILL'] < time()){
		session_destroy();
		die('you session has timed out');
	}
}

header('Location: home.php');
} else {
    header("Location: login.php?error=4");
}
	
	
	
	
	
	
	
	
	
}else{
	header('Location: login.php?msg=enterallfields');
}
?>