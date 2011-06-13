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
  <h1>Login</h1>

  <form name="login" method="post" action="submitLogin.php" id="login">
    <p><label>Email Address:</label> <input type="text" name="email" id="email"/></p>

    <p><label>Password:</label> <input type="password" name="password" id="password"/></p>
<br />
    <input type="submit" value="Submit" />
  </form>
  <br />
  <a href="registrationForm.php"> Register an account </a>
  </div>
</body>
</html>