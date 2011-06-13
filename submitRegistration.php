<?php
	include('db_connect.php');
	include('header.php');

	$error = "none";
	
	//get user input from post
	$userFirstName = strip_tags(trim($_POST['firstname']));
	$userLastName = strip_tags(trim($_POST['lastname']));
	$userNewLastName = strip_tags(trim($_POST['currlastname']));
	$userPassword = strip_tags(trim($_POST['password1']));
	$userPasswordAgain = strip_tags(trim($_POST['password2']));
	$userEmail = strip_tags(trim($_POST['email']));
	$userGradMonth = $_POST['month'];
	$userGradDay = $_POST['day'];
	$userGradYear = $_POST['year'];
	$userElementary = $_POST['elementary'];
	$userMiddle = $_POST['middle'];
	$userHigh = $_POST['high'];

	//check if user's username is already in db or not
	$username = mysqli_real_escape_string($db,  $userEmail);
	$query = "SELECT * FROM users WHERE (email = '$userEmail')";
	//echo $query;
	$result = mysqli_query($db, $query) or die("Error Querying Database");


	//test for any errors
	if (empty($userFirstName)|| empty($userLastName) || empty($userNewLastName) 
		|| empty($userPassword) || empty($userPasswordAgain) || empty($userEmail))  {
			$error = "empty";
	} else if ($row = mysqli_fetch_array($result)) {
		$error = "username";
 	} else  if ($userPassword != $userPasswordAgain){
		$error = "pwd";
	} else if (strpos($userEmail, '@') == false) {
		$error = "email";
	}

	if(($error == "none")){

   //prevent mysql injection
   $userFirstName = mysqli_real_escape_string($db, $userFirstName);
   $userLastName = mysqli_real_escape_string($db, $userLastName);
   $userNewLastName = mysqli_real_escape_string($db, $userNewLastName);
   $userPassword = mysqli_real_escape_string($db, $userPassword);
   $userEmail = mysqli_real_escape_string($db, $userEmail);
      
      
      
	$query = "START TRANSACTION";
	$result = mysqli_query($db, $query) or die ("Error Querying Database");  
	  
     //if there are no errors, add user to db
   $query = "INSERT INTO users (first_name, old_last_name, new_last_name, password, email, graduation_month, graduation_day, graduation_year, elementary, middle, high) VALUES ('$userFirstName', '$userLastName', '$userNewLastName', SHA('$userPassword'), '$userEmail', '$userGradMonth', '$userGradDay', '$userGradYear', '$userElementary', '$userMiddle', '$userHigh');";
   
   $result = mysqli_query($db, $query) or die ("Error Querying Database");
   
   $query = "COMMIT";
   $result = mysqli_query($db, $query) or die ("Error Querying Database");
   
?>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta name="generator" content=
  "HTML Tidy for Linux/x86 (vers 11 February 2007), see www.w3.org" />
  <link rel="stylesheet" type="text/css" href="CSS.css" />
  <title>Registration</title>
</head>

<body>


<div class="content">
<center><h1>Thanks for joining!</h1>
<h2>Your account has been created!  Please, log in. </h2></center>

</div>


<?php
   }
   mysqli_close($db);
?>


</body>
</html>