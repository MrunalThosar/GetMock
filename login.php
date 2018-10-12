<?php
require_once('dbconnect.php');
$username = $_POST["u"];
$password = $_POST["p"];
$password = md5($password);
$result = mysqli_query($con,"SELECT * FROM users where username='$username' and password='$password'");
$row = mysqli_fetch_array($result);
$data = $row[0];
if($data)
{
$server_response["success"] = 1;
echo json_encode($server_response);
}
mysqli_close($con);
?>
