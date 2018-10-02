<?php
$con=mysqli_connect("host","oesek","pass","oesdb");
if (mysqli_connect_errno($con))
{
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>