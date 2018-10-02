<?php
require_once('dbconnect.php');
$tid = $_POST["testid"];
//to get total no of questions for each student
$result = mysqli_query($con,"UPDATE test SET status = 'A' WHERE testid = $tid");
//echo $result;

//$row = mysqli_fetch_array($result);
//$data = $row[0];
if($result)
{
$server_response["success"] = 1;
echo json_encode($server_response);
}
mysqli_close($con);

?>


