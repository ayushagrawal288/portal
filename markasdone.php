<?php
include 'config.php';
session_start();
$user=$_SESSION['username'];
$log = $_SESSION['employ'];

if($log != "log"){
  header("Location: login.php");
}

$namekey = $_REQUEST['key'];

$SQL = "UPDATE complain SET status='1' WHERE id = '$namekey'";
$result = mysql_query($SQL);
mysql_close($db_handle);
print "<script>location.href = 'overdue.php'</script>";

?>