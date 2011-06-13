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

  <form name="basicInfo" method="post" id="basicInfo" onsubmit="validateReg()">
    <p><label>First Name:</label> <input type="text" name="firstName" id="firstname"/>

    <label>Last Name:</label> <input type="text" name=
    "lastName" id="lastname"/></p>

    <p><label>Date of graduation:</label>
	<select name="month" id="month">
		<option value="1">January</option>
		<option value="2">February</option>
		<option value="3">March</option>
		<option value="4">April</option>
		<option value="5">May</option>
		<option value="6">June</option>
		<option value="7">July</option>
		<option value="8">August</option>
		<option value="9">September</option>
		<option value="10">October</option>
		<option value="11">November</option>
		<option value="12">December</option>
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
    <input type="submit" value="Search" />
  </form>
  </div>
</body>
</html>