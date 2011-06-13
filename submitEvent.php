<?php
	include('header.php');
	include('db_connect.php');
	session_start();

	$eventName = $_POST['event'];
	$eventInvite = $_POST['invited'];
	$eventDate = $_POST['eventdate'];
	$eventTime = $_POST['eventtime'];
	$eventAddress1 = $_POST['address1'];
	$eventAddress2 = $_POST['address2'];
	$description = $_POST['description'];
	$date = getdate();
	
	$timestamp = $date['year'] . "-" . $date['mon'] . "-" . $date['mday'] 
					. " " . $date['hours'] . ":" . $date['minutes'] . ":" . $date['seconds'];
				
	
	$userID = $_SESSION['user_id'];
	$name = mysqli_real_escape_string($db, strip_tags(trim($eventName)));
	$invite = mysqli_real_escape_string($db, strip_tags(trim($eventInvite)));
	$eventDate = mysqli_real_escape_string($db, strip_tags(trim($eventDate)));
	$address1 = mysqli_real_escape_string($db, strip_tags(trim($eventAddress1)));
	$address2 = mysqli_real_escape_string($db, strip_tags(trim($eventAddress2)));
	
	
	if (($userID != "") AND ($name != "") AND ($invite != "") AND ($date != "") AND ($address1 != "")){

		$query = "INSERT INTO events (`user_id`, `event`, `invite`, `event_date`, `event_time`, `address1`, `address2`, `post_date`, `description`) 
					VALUES ('$userID', '$name', '$invite', '$eventDate', '$eventTime', '$address1', '$address2', '$timestamp', '$description');";
		$result = mysqli_query($db, $query) or die ("Error Querying Database");
		mysqli_close($db);	

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <link rel="stylesheet" type="text/css" href="CSS.css" />
  <title>Post Event</title>
</head>

<body>

<div class="content">

<h1><center>Your new event has been posted!</h1>

<?php
	//one of the fields must have been empty, therefore, an error message is displayed
	} else {
?>
		<div class="content">
		
		<center>Your event was not sent. You did not fill in all of the fields. Please revisit <a href="postevent.php">this page</a>. <br>
<?php
	}
?>
</center>

</div>


</body>
</html>
