<?php
require_once("config.php");
$conn = mysql_connect(HOST,USERNAME,PASSWORD);
mysql_select_db(DATABASE_NAME,$conn);
 
$server_response = array();
$u = getuser();
if(is_array($u)) {
$server_response["uname"] = $u;
$server_response["success"] = 1;
echo json_encode($server_response);
}
function getuser() {
$query  =  "select * from user";
$result = mysql_query($query);
if (!$result) {
die('Invalid query: ' . mysql_error());
}
while($row=mysql_fetch_array($result)) {
$list[] = $row;
}
return $list;
}
?>