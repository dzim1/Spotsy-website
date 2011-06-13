<?php include "header.php" ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta name="generator" content=
  "HTML Tidy for Linux/x86 (vers 11 February 2007), see www.w3.org" />
  <link rel="stylesheet" type="text/css" href="CSS.css" />
  <script type = "text/javascript" src = "validate.js"></script>
  <title>Registration</title>
</head>

<body>
<div id="content">
  <h1>Registration Information</h1>

  <p>Enter the following information</p>

  <form name="basicInfo" method="post" action="submitRegistration.php" id="basicInfo" onsubmit="">
    <p><label>First Name:</label> <input type="text" name="firstname" id="firstname"/></p>

    <p><label>Last Name (at graduation):</label> <input type="text" name=
    "lastname" id="lastname"/></p>

    <p><label>Current Last Name:</label> <input type="text" name="currlastname" id="currlastname" /></p>

    <p><label>Current email address:</label> <input type="text" name=
    "email" id="email"/></p>
	
	<p><label>Password for login:</label> <input type="password" name=
    "password1" id="password1"/></p>
	
	<p><label>Password again:</label> <input type="password" name=
    "password2" id="password2"/></p>

    <p><label>Date of graduation:</label>
	<select name="month" id="month">
		<option value="Januaray">January</option>
		<option value="February">February</option>
		<option value="March">March</option>
		<option value="April">April</option>
		<option value="May">May</option>
		<option value="June">June</option>
		<option value="July">July</option>
		<option value="August">August</option>
		<option value="September">September</option>
		<option value="October">October</option>
		<option value="November">November</option>
		<option value="December">December</option>
	</select>

	<select name="day">
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
		<option value="13">13</option>
		<option value="14">14</option>
		<option value="15">15</option>
		<option value="16">16</option>
		<option value="17">17</option>
		<option value="18">18</option>
		<option value="19">19</option>
		<option value="20">20</option>
		<option value="21">21</option>
		<option value="22">22</option>
		<option value="23">23</option>
		<option value="24">24</option>
		<option value="25">25</option>
		<option value="26">26</option>
		<option value="27">27</option>
		<option value="28">28</option>
		<option value="29">29</option>
		<option value="30">30</option>
		<option value="31">31</option>
	</select>
	
	<select name="year" id="year">
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
	</select></p>

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
    <input type="submit" value="Submit" />
  </form>
  </div>
</body>
</html>

