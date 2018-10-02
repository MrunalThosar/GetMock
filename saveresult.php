<?php
require_once('dbconnect.php');
$user = $_POST["u"];
$marks = $_POST["m"];
$testid = $_POST["tid"];

//to get total no of questions for each student
$result = mysqli_query($con,"INSERT INTO result VALUE ($testid,'$user',$marks)");

if($result)
{
$server_response["success"] = 1;
echo json_encode($server_response);
}
mysqli_close($con);

?>


