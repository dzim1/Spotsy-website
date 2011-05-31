<?php include "header.html" ?>

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

  <form name="basicInfo" method="post" id="basicInfo" onsubmit="validateReg()">
    <p><label>First Name:</label> <input type="text" name="firstName" id="firstname"/>

    <label>Last Name:</label> <input type="text" name=
    "lastName" id="lastname"/></p>

    <p><label>Date of graduation</label> <input type="text" name="gradDate" id="graddate"/></p>

    <p><label>Elementary School attended:</label> 
	<select name="elementary" id="elementary">
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
	</select>
	</p>

    <p><label>Middle School attended:</label>
	<select name="middle" id="middle">
		<option value="Battlefield">Battlefield</option>
		<option value="Chancellor">Chancellor</option>
		<option value="Freedom">Freedom</option>
		<option value="Ni River">Ni River</option>
		<option value="Post Oak">Post Oak</option>
		<option value="Spotsylvania">Spotsylvania</option>
		<option value="Thornburg">Thornburg</option>
		<option value="Other">Other</option>
	</select>
	</p>

    <p><label>High School attended:</label>
	<select name="high" id="high">
		<option value="Chancellor">Chancellor</option>
		<option value="Courtland">Courtland</option>
		<option value="Massaponax">Massaponax</option>
		<option value="Riverbend">Riverbend</option>
		<option value="Spotsylvania">Spotsylvania</option>
		<option value="Other">Other</option>
	</select>	
	</p>
<br />
    <input type="submit" value="Search" />
  </form>
  </div>
</body>
</html>