<?php

session_start();

if($_SESSION['myusername'] == "" | $_SESSION['myusername'] == null)

	{
		header("location: index.php");
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
<?php
session_start();

?>

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
<h2>Welcome <?php echo $_SESSION['myusername'] ?></h2>
<p>

<?php

require_once('dbconnect.php');

$tid = $_GET['key'];

$result = mysqli_query($con,"SELECT * FROM result where testid='$tid'");

echo "<table border='1'><tr><th>Username</th><th>Marks Obtain</th></tr>";

while($row = mysqli_fetch_array($result))
{

$name = $row[1];
$marks = $row[2];


echo "<tr><td>$name</td><td>$marks</td></tr>";


}
echo "</table>";
?>





</p>
</div>
<div id="sidebar">

</div>
<div id="sidebarcontents"> 
<ul id="menu">
<li>
  <h2>Admin Control</h2>
</li>
<li>
	<ul><li><a href="createmultipleusers.html">Create User</a></li>
		<li><a href="createTest.html">Create Test</a></li>
		<li><a href="UploadQuestions.html">Upload Questions</a></li>
		<li><a href="logout.php">Logout</a></li>
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
