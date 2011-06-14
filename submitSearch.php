<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <link rel="stylesheet" type="text/css" href="CSS.css" />
  <title>Search</title>
</head>

<body>
<div id="content">

<?php
   include('header.php');
   include('db_connect.php');
   
   
   $firstName = $_POST['firstname'];
   $lastName = $_POST['lastname'];
   $date = $_POST['year'];
   $elementary = $_POST['elementary'];
   $middle = $_POST['middle'];
   $high = $_POST['high'];
   $query = "";
   
	if($firstName != "" || $lastName != "") {
		if($firstName != "" && $lastName == "") {
			$query = "SELECT user_id, first_name, new_last_name FROMspotsyUsers WHERE first_name = '$firstName' ORDER BY new_last_name;";
		} else if ($firstName == "" && $lastName != "") {
			$query = "SELECT user_id, first_name, new_last_name FROM spotsyUsers WHERE old_last_name = '$lastName' OR new_last_name = '$lastName' ORDER BY new_last_name;";
		} else {
			$query = "SELECT user_id, first_name, new_last_name FROM spotsyUsers WHERE first_name = '$firstName' AND (old_last_name = '$lastName' OR new_last_name = '$lastName') ORDER BY new_last_name ;";
		}
	} else if($date != "") {
	    $query = "SELECT user_id, first_name, new_last_name FROM spotsyUsers WHERE graduation_year = '$date' ORDER BY new_last_name ;";
	} else if($elementary != "") {
		$query = "SELECT user_id, first_name, new_last_name FROM spotsyUsers WHERE elementary = '$elementary' ORDER BY new_last_name ;";
	} else if($middle != "") {
		$query = "SELECT user_id, first_name, new_last_name FROM spotsyUsers WHERE middle = '$middle' ORDER BY new_last_name ;";
	} else if($high != "") {
		$query = "SELECT user_id, first_name, new_last_name FROM spotsyUsers WHERE high = '$high' ORDER BY new_last_name ;";
	}

	$result = mysqli_query($db, $query) or die("Error Querying Database");
	echo '<H1>Search Results</H1>';
	
	while($row = mysqli_fetch_array($result)) {
		$first = $row['first_name'];
		$last = $row['new_last_name'];
		$id = $row['user_id'];
			
		echo "<a href=profile.php?id=" . $id . ">" . $first . " " . $last . "</a><br>";
	}
?>
</div>
</body>
</html>
