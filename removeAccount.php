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
   $query = "DELETE FROM spotsyUsers WHERE email = '$userEmail' AND password = SHA('$userPassword')";
   $result = mysqli_query($db, $query) or die ("Error Querying Database");

    if ($row = mysqli_fetch_array($result))
   {
		echo "<center><h2>Sorry to see you go, $first_name!</h2>\n";
   		echo "<h3>Click <a href= \"index.php\">here</a> to continue, or use the menu above.</h3></center>";
		echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>";
   }
   else
    {
   		echo "<div class=\"content\"><h2><center>We don't have that account on record!</center></h2>
				<h3><center>Don't have an account yet?  Click <a href = \"registrationForm.php\">here</a> to register!</center></h3>";
		echo "<br/><table width=50% ><b><h3><medium><font color=\"#FF0000\">Incorrect username or password!</font></medium></h3></b>";
   		echo "<form action=submitLogin.php method=\"POST\" >
				<tr><td>Email: </td><td><input type=\"text\" name=\"email\" />*</td></tr>
				<tr><td>Password: </td><td><input type=\"password\" name=\"password\"  />*</td></tr>
				</table>
				<table>
				<tr><td><small>*These fields are <b><u>required</b></u>!</small></td></tr>
				<tr><td><br></td></tr>
				<tr><td><input type=\"submit\" value=\"Submit\" class=\"formbutton\"></td></tr>
				</table>
				</center>";
		echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>";

    }

	mysqli_close($db);
?>
</body>
</html>

