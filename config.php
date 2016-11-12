<?php    
    $host = "us-cdbr-iron-east-04.cleardb.net"; 
    $user = "b91115c64b0965"; 
    $pass = "91290dfd"; 
    $db = "ad_a0050aee3b0907e"; 
    $p = mysql_connect($host, $user, $pass); 
    $db_found = mysql_select_db($db, $p);
if (!$db_found) {
	echo "DATABASE not found!";
}
 
?>
