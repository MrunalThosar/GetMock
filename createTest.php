<?php

session_start();

if($_SESSION['myusername'] == "" | $_SESSION['myusername'] == null)

	{
		header("location: index.php");
	}

?>

<?php
require_once('dbconnect.php');

$testname = $_POST['tname'];	
$totalq = $_POST['noq'];
$time = $_POST['time'];


$u = $_SESSION['myusername'];
$sql = "INSERT into test(testname,noofquestions,time,created_by)
 values('$testname','$totalq','time','$u')";
mysql_query($sql);

echo "Test Created";


?>
