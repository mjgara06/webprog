<?php
/*
 * index.php
 * 
 * Copyright 2012 Melvin John E. Gara <mjeg@csserver2>
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 * MA 02110-1301, USA.
 */

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>untitled</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 0.21" />
	<style type="text/css">
	
	div
	{
		margin-left:auto;
		margin-right:auto;
		width:800px;
	}
	#head
	{
		height:100px;
		background-image:url('Pag1920x1200.jpg');
		background-repeat:none;
		background-position:center;
		background-size:100% 150%;
		-moz-border-radius:20px 20px 0px 0px;
	}
	#body
	{
		height:500px;
		background-color:lightblue;
	}
	#foot
	{
		heigth:80%;
		background-color:skyblue;
	}
	a:hover
	{
		color:white;
		
	}
	h4 
	{
		text-decoration:blink
	} 
	a
	{
		color:blue;
		margin-left:2%;
		text-decoration:none;
	}
	</style>
</head>

<body>

	<div id="head">
		
	<?php
		if (isset( $_GET['error']))
		echo "<h4 style='text-align:center;color:white;'>". $_GET['error']."</h4>";
	?>
	
	</div>
	<div id="body">
		<center>You're inside</center>
		
		
		
		
	</div>
	
	<div id="foot">
	
		<a href="logout1.php">logout</a>
		<a href="edit.php">edit files</a>
	</div>
	<!--require('checklogin.php');
	?>
	//main content
	//your page here
	//logout button
		-->
	
</body>

</html>
