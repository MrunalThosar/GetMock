<?php
require_once('dbconnect.php');
$testid = $_POST["tid"];
$qu = $_POST["q"];
$a = $_POST["A"];
$b = $_POST["B"];
$c = $_POST["C"];
$d = $_POST["D"];
$ca = $_POST["CA"];

$result = mysqli_query($con,"INSERT INTO questions(testid,question,optA,optB,optC,optD,correctAns) VALUES($testid,'$qu','$a','$b','$c','$d','$ca')";

if($result)
{
echo "Question Uploaded";
}
mysqli_close($con);

?>