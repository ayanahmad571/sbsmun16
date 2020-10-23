<?php
include('db_auth.php');
?>
<?php
$web_config =array();

$web_mastersql = "SELECT * FROM web_config where valid = 1 limit 1 ";
$wmrs = $conn->query($web_mastersql);

if ($wmrs->num_rows == 1) {
    // output data of each row
   $wmrw = $wmrs->fetch_assoc();
   
   $web_config = $wmrw;
} else {
    echo "0 results";
}


?>
<?php
$pg_config =array();

$page_mastersql = "SELECT * FROM links_o_pages where lo_page_url = '".basename($_SERVER['PHP_SELF'])."' and lo_valid= 1 limit 1  ";

/*echo '<script>alert("'.$page_mastersql.'");</script>';
*/
$pgrs = $conn->query($page_mastersql);

if ($pgrs->num_rows == 1) {
    // output data of each row
   $pgrw = $pgrs->fetch_assoc();
   
   $pg_config = $pgrw;
} else {
    echo "0 results";
}


?> 
 
 