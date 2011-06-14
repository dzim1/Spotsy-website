<?php
   include('header.php');
   include('db_connect.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <link rel="stylesheet" type="text/css" href="CSS.css" />
  <title>Profile</title>
</head>

<body>
<div id="content">

<?php
   $userId = $_GET["id"];
   
   $query = "SELECT * FROM spotsyUsers WHERE user_id = $userId;";

   $result = mysqli_query($db, $query) or die ("Error Querying Database - 1");
	
	while($row = mysqli_fetch_array($result)){
		$firstName = $row['first_name'];
		$lastName = $row['new_last_name'];
		$email = $row['email'];
		$gradMonth = $row['graduation_month'];
		$gradDay = $row['graduation_day'];
		$gradYear = $row['graduation_year'];
		$elementary = $row['elementary'];
		$middle = $row['middle'];
		$high = $row['high'];
	}
	echo "<H1> Alumni Profile </H1>";
	echo "<b>Name: </b>" . $firstName . " " . $lastName . "<br />";
	echo "<b>Email: </b>" . $email . "<br />";
	echo "<b>Date Graduated: </b>" . $gradMonth . "/" . $gradDay . "/" . $gradYear ."<br />";
	echo "<b>Elementary School Attended: </b>" . $elementary . "<br />";
	echo "<b>Middle School Attended: </b>" . $middle . "<br />";
	echo "<b>High School Attended: </b>" . $high;
?>
</div>
</body>
</html>
