<?php include "header.php" ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <link rel="stylesheet" type="text/css" href="CSS.css" />
  <title>Search</title>
</head>

<body>
<div id="content">
  <h1>Search for an SCS alumni</h1>

  <p>*you do not have to fill all fields</p>

  <form name="basicInfo" method="post" id="basicInfo"  action="submitSearch.php">
    <table><tr><td>
    <p><b>First Name: </b></td><td><input type="text" name="firstname" id="firstname"/></p></td></tr>
    
    <tr><td><p><b>Last Name: </b></td><td> <input type="text" name="lastname" id="lastname"/></td>
    <td><input type = "submit" value = "Search" /></p></td></tr>
	
	<tr><td>
    <p><b>Date of graduation: </b></td>
	
	<td><select name="year" id="year">
	    <option value="">-Select One-</option>
		<option value="2011">2011</option>
		<option value="2010">2010</option>
		<option value="2009">2009</option>
		<option value="2008">2008</option>
		<option value="2007">2007</option>
		<option value="2006">2006</option>
		<option value="2005">2005</option>
		<option value="2004">2004</option>
		<option value="2003">2003</option>
		<option value="2002">2002</option>
		<option value="2001">2001</option>
		<option value="2000">2000</option>
	</select></td>
	
	<td><input type = "submit" value = "Search" /></p></td></tr>


    <tr><td><p><b>Elementary School attended: </b> </td>
	<td><select name="elementary" id="elementary">
	    <option value="">-Select One-</option>
		<option value="Battlefield">Battlefield</option>
		<option value="Berkeley">Berkeley</option>
		<option value="Brock Road">Brock Road</option>
		<option value="Cedar Forest">Cedar Forest</option>
		<option value="Chancellor">Chancellor</option>
		<option value="Courthouse Road">Courthouse Road</option>
		<option value="Courtland">Courtland</option>
		<option value="Lee Hill">Cedar Forest</option>
		<option value="Harrison Road">Harrison Road</option>
		<option value="Livingston">Livingston</option>
		<option value="Parkside">Parkside</option>
		<option value="Riverview">Riverview</option>
		<option value="Robert E. Lee">Robert E. Lee</option>
		<option value="Salem">Salem</option>
		<option value="Smith Station">Smith Station</option>
		<option value="Spotswood">Spotswood</option>
		<option value="Wilderness">Wilderness</option>
		<option value="Other">Other</option>
	</select></td>
	
    
	<td><input type = "submit" value = "Search" /></p></td></tr>

    <p><tr><td><b>Middle School attended: </b></td>
	<td><select name="middle" id="middle">
	    <option value="">-Select One-</option>
		<option value="Battlefield">Battlefield</option>
		<option value="Chancellor">Chancellor</option>
		<option value="Freedom">Freedom</option>
		<option value="Ni River">Ni River</option>
		<option value="Post Oak">Post Oak</option>
		<option value="Spotsylvania">Spotsylvania</option>
		<option value="Thornburg">Thornburg</option>
		<option value="Other">Other</option>
	</select></td>
	

	<td><input type = "submit" value = "Search" /></p></td></tr>

	
    <tr><td><p><b>High School attended: </b></td>
	<td><select name="high" id="high">
	    <option value="">-Select One-</option>
		<option value="Chancellor">Chancellor</option>
		<option value="Courtland">Courtland</option>
		<option value="Massaponax">Massaponax</option>
		<option value="Riverbend">Riverbend</option>
		<option value="Spotsylvania">Spotsylvania</option>
		<option value="Other">Other</option>
	</select></td>
	
	
	<td><input type = "submit" value = "Search" /></p></td></tr></table>

<br />
  </form>
  </div>
</body>
</html>
