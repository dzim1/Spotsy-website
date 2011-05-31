<?php include "header.html" ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <link rel="stylesheet" type="text/css" href="CSS.css" />
  <script type = "text/javascript" src = "validate.js"></script>
  <title>Post an Event</title>
</head>

<body>
<div id="content">
  <h1>Post a New Event</h1>

  <p>Fill in all information to share an event</p>

  <form name="postevent" method="post" id="postevent">
    <p><label>Name of Event:</label> <input type="text" name="event" id="event"/></p>

    <p><label>Date the event is schedualed:</label> <input type="text" name="eventdate" id="eventdate"/></p>

    <p><label>Time of the event:</label> <input type="text" name="eventtime" id="eventtime" /></p>

    <p><label>Description of event:</label><br /> <textarea rows="10" cols="50"></textarea></p>
<br />
    <input type="submit" value="Submit" />
  </form>
  </div>
</body>
</html>