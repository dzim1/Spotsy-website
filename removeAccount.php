<?php include "header.php" ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <link rel="stylesheet" type="text/css" href="CSS.css" />
  <title>Login</title>
</head>

<body>
<div id="content">

<?php
	//get user input from post and escape mysql injection
	$userEmail = strip_tags(trim($_POST['email']));
	$userPassword = strip_tags(trim($_POST['password']));
      include('db_connect.php');
	$userEmail = mysqli_real_escape_string($db, $userEmail);
    $userPassword = mysqli_real_escape_string($db, $userPassword);


   //select user from db with the given username and password
   $userquery = "DELETE FROM spotsyUsers WHERE email = '$userEmail' AND password = SHA('$userPassword')";
   $result = mysqli_query($db, $userquery) or die ("Error Querying Database");

    if (!$row = mysqli_fetch_array($result))
   {
		echo "<center><h2>Sorry to see you go!</h2>\n";
   		echo "<h3>Click <a href= \"index.php\">here</a> to continue, or use the menu above.</h3></center>";
		echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>";
   }
   
	mysqli_close($db);
?>
</body>
</html>

