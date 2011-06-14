<?php
	/*get logged-in user id from cookie/session
	session_start();
	$user_id = $_SESSION['user_id'];
	if( isset($_COOKIE['user_id'])){
	$user_id = $_COOKIE['user_id'];
}else{
	setcookie(user_id, $_SESSION['user_id'], time()+60*60*24);
}
   include('db_connect.php');*/
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>Spotsylvania County School Alumni</title>
<link href="CSS.css" rel="stylesheet" type="text/css" /> 
</head>
<body>
<div id="header">
   <table>
	   <tr><th width = 120%><h1>Spotsylvania County Schools Alumni</h1></th>
	   <th><img src = "spotsy.jpg" alt="" /></th></tr>
	</table>
</div>
<div id="menu">
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="search.php">Search</a></li>
		<li><a href="events.php">Events</a></li>
		<li><a href="aboutus.php">About Us</a></li>
		<li><a href="login.php">Login</a></li>
	</ul>
</div>
<div id="content">

</div>
</body>
</html>
