<?php

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

$sql = "INSERT into users(username,password,utype,college) 
values('$Data[1]','md5($Data[2])','$Data[3]','$Data[4]')";
mysql_query($sql);

echo "Users Created";
echo "$Data[1] md5($Data[2]) $Data[3]";
}
fclose($fileh);

//mysql_close($con); 
}
else
{
    die("No file specified!");
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Online Examination</title>

<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>



<div class="style3"></div><div class="style_2"><span class="style3">
<a href="#" title="Online Exam"><strong>For Adroid</strong></a></span>
</div>

<div id="wrap">
<div id="topbar">
  <h1 id="sitename"><a href="#">Online Examination </a></h1>
  <div id="menus">
  <ul id="topmenu">
<li  class="active"><a href="#">Home</a>
</li>
<li><a href="createmultipleusers.html">Create Users</a>
</li>
<li><a href="createTest.html">Create Test</a>
</li>
<li><a href="UploadQuestions.html">Upload Questions</a>
</li>
</ul>
</div>
</div>

<div id="header">
</div>
<div id="content">
<div id="mainpage">


<?php

session_start();

if($_SESSION['myusername'] == "" | $_SESSION['myusername'] == null)

	{
		header("location: index.php");
	}

?>
<h2>Questions are Loaded for test <?php echo $tid; ?></h2>
<h2>Uploaded File Info:</h2>
<ul>
<li>Sent file: <?php echo $_FILES['file']['name'];  ?>
<li>File size: <?php echo $_FILES['file']['size'];  ?> bytes
<li>File type: <?php echo $_FILES['file']['type'];  ?>
</ul>


</div>
<div id="sidebar">

</div>
<div id="sidebarcontents"> 
<ul id="menu">
<li>
  <h2>Admin Controll</h2>
</li>
<li>
	<ul><li><a href="createmultipleusers.html">Create User</a></li>
		<li><a href="createTest.html">Create Test</a></li>
		<li><a href="UploadQuestions.html">Upload Questions</a></li>

	</ul>
</li>
</ul>
</div>

  <div id="sidebarbottom"></div>
</div>
<div class="clear"></div>
</div>

</div>
<div id="footer">
<p>Copyright &copy; 2013 | Online Examination For Android Devices.</p>
</div>
</body>
</html>

