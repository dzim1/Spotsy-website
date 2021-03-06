<?php
   include('header.php');
   include('db_connect.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <link rel="stylesheet" type="text/css" href="CSS.css" />
  <title>Events</title>
</head>

<body>
<div id="content">
  <H1> Events </H1>
  <table rules = rows>

<?php


	//get the general comments that we've received from users	
	$query = "SELECT user_id, first_name, new_last_name, email, event, invite, event_time, event_date, address1, address2, description, post_date FROM events NATURAL JOIN spotsyUsers ORDER BY post_date DESC";

	$result = mysqli_query($db, $query) or die ("Error Querying Database");
	
	while($row = mysqli_fetch_array($result)){
	    $userId = $row['user_id'];
		$firstName = $row['first_name'];
		$lastName = $row['new_last_name'];
		$email = $row['email'];
		$event = $row['event'];
		$invite = $row['invite'];
		$eventDate = $row['event_date'];
		$eventTime = $row['event_time'];
		$address1 = $row['address1'];
		$address2 = $row['address2'];
		$description = $row['description'];
		$postDate = $row['post_date'];
		
		//display the comment
		echo "<tr><td><b>Name: </b><a href= \"profile.php?id=" . $userId . "\">" . $firstName . " " . $lastName . "</a> (" . $email . ")" . "<br />";  
		echo "<b>What: </b>" . $event . "<br />";
		echo "<b>Who: </b>" . $invite . "<br />";
		echo "<b>When: </b>" . $eventDate . " " . $eventTime . "<br />";
		echo "<b>Where: </b>" . $address1 . " " . $address2 . "<br />";
		echo "<b>Why: </b><br />" . $description;
		echo "</td></tr>";
	}
	
?>

</table>
  <a href="postevent.php"> Post a new event! </a></p>
  
  </div>
</body>
</html>
