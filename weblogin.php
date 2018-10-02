<?php
require_once('dbconnect.php');
$username = $_POST["u"];
$password = $_POST["p"];

$username = stripslashes($username);
$password = stripslashes($password);

$password = md5($password);
$result = mysqli_query($con,"SELECT * FROM users where username='$username' and password='$password' and utype='teacher'");
$row = mysqli_fetch_array($result);
$data = $row[0];
if($data)
{
	session_start();

	$_SESSION['myusername'] = $row[1];//username
	header("location:AdminHome.php");

}
else
{
	echo "Wrong Username or Password !";
}
mysqli_close($con);
ob_end_flush();


?>