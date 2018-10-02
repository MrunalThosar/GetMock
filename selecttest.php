<?php
require_once('dbconnect.php');
$tid = $_POST["testid"];
//to get total no of questions for each student
$tnoofqres = mysqli_query($con,"SELECT noofquestions from test where testid='$tid'");

$row = mysqli_fetch_array($tnoofqres);
$totalnoofq = $row[0];
  // system's test id

$result = mysqli_query($con,"SELECT * FROM questions where testid='$tid' order by rand() limit 0 , $totalnoofq");


while($row = mysqli_fetch_array($result) )
{
$res[] = $row;

}

$server_response["questions"]=$res;
echo json_encode($server_response);
mysqli_close($con);
?>


