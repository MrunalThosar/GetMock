<?php
$tid = $_POST['testID'];
if( $_FILES['file']['name'] != "" )
{
//code for file upload
echo $_FILES['file']['name'];
move_uploaded_file($_FILES["file"]["tmp_name"],"upload/" . $_FILES["file"]["name"]) or  die( "Could not copy file!");
   

//code to insert into mysql
$conn=mysql_connect("http://mysql15.000webhost.com","a8380572_oesek","sfh1234") or die (mysql_error());

mysql_select_db("a8380572_oesdb") or die (mysql_error());
	
$filename = "upload/" . $_FILES["file"]["name"];
echo $filename;
$fileh = fopen($filename, "r");

while (($Data = fgetcsv($fileh, 100, ",")) !== FALSE)
{
print_r($Data);

$sql = "INSERT into questions(testid,question,optA,optB,optC,optD,correctAns) values('$tid','$Data[1]','$Data[2]','$Data[3]','$Data[4]','$Data[5]','$Data[6]')";
mysql_query($sql);

}
fclose($fileh);

//mysql_close($con); 
}
else
{
    die("No file specified!");
}
?>
<html>
<head>
<title>Uploading Complete</title>
</head>
<body>
<h2>Questions are Loaded for test <?php echo $tid; ?></h2>
<h2>Uploaded File Info:</h2>
<ul>
<li>Sent file: <?php echo $_FILES['file']['name'];  ?>
<li>File size: <?php echo $_FILES['file']['size'];  ?> bytes
<li>File type: <?php echo $_FILES['file']['type'];  ?>
</ul>

</body>
</html>
