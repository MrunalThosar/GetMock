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
<li>
</li>
<li>
</li>
<li></a>
</li>
</ul>
</div>
</div>
<div id="header">
</div>
<div id="content">
<div id="mainpage">
<h2>Welcome to Our Website!</h2>
<p>


<?php
require_once('dbconnect.php');
$user = $_POST["u"];
$email = $_POST["e"];
$pass = $_POST["p"];
$clg = $_POST["c"];
$pass= md5($pass);

$result1 = mysqli_query($con," SELECT max(userid) FROM users ");
$row = mysqli_fetch_array($result1);
$uid = $row[0] + 1;


$result = mysqli_query($con,"INSERT INTO users(userid,username,email,password,utype,college) VALUES ($uid,'$user','$email','$pass','teacher','$clg')");

if($result)
{
echo "<h2>Registration Succeeded </h2>";
}
else
{
echo "<h2>Error</h2>";
}

mysqli_close($con);

?>





<hr>

</p>
<p>


<h2>Teacher Login</h2>

<form action="weblogin.php" method="POST">
<table>
<tr>
<td>Username</td><td><input type="text" name="u"/></td>
</tr>

<tr>
<td>Password</td><td><input type="password" name="p"/></td>
</tr>

<tr>
<td></td><td><input type="submit" value="Login"></td>
</tr>
</table>
</form>
</p>

</div>
<div id="sidebar">

</div>
<div id="sidebarcontents"> 
<ul id="menu">
<li>
  
</div>

  <div id="sidebarbottom"></div>
</div>
<div class="clear"></div>
</div>

</div>
<div id="footer">
<p>Copyright &copy; 2014 | Online Examination For Android Devices.</p>
</div>
</body>
</html>
