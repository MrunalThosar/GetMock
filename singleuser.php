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





<?php
require_once('dbconnect.php');
$username = $_POST["uname"];
$password = $_POST["pass"];
$t = $_POST["type"];

$password = md5($password);

$result1 = mysqli_query($con," SELECT max(userid) FROM users ");
$row = mysqli_fetch_array($result1);
$uid = $row[0] + 1;

$result = mysqli_query($con,"INSERT INTO users(userid,username,password,utype) VALUES($uid,'$username','$password','$t')");


if($result)
{
echo "<h2>User Created</h2>";
}
else
{
echo "<h2>User already exist!</h2>";
}

mysqli_close($con);
?>



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
