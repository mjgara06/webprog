<?php
/*
 * sign-up.php
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
	
	div.box1
	{
		width:40%;
		height:80%;
		background-color:violet;
		margin-top: 40pt;  
		margin-left: auto; 
		margin-right: auto;
		-moz-border-radius:20px 20px 0px 0px;
	}
	div.box
	{
		width:40%;
		height:60%;
		background-color:palegreen;
		opacity:none;  
		margin-left: auto; 
		margin-right: auto;
		margin-top:-20pt; 
		-moz-border-radius:0px 0px 20px 20px;
	}
	a:hover
	{
		color:green;
	}
	h4 
	{
		text-decoration:blink
	} 
	
	</style>
</head>

<body>
	
		
	<div class="box1">
		<center><h1>LOGIN</h1></center>
		<?php
	//	session_start();
	//	$_SESSION['OKNA']=1;
	//	header ('location:index.php');
		
	if(isset( $_GET['error']))
		echo "<h4 style ='text-align:center;color:red'>". $_GET['error']."</h4>";
	else
		echo "<h4 style='text-align:center;background:none;color:red;'>Welcome</h4>";
	?>
	<br>
	</div>
	<div class="box">
	<center>
	<form action="loginsubmit.php" method="post"><br>
	Username: <input type= text size = 15 name = "username" maxlength = 25 value="<?=@$_GET['username']?>" /><br>
	<br>
	Password: <input type= password size = 15 name = "pass" maxlength = 10><br>
	<input type = submit name = submit value = SUBMIT>
	
	<a href="signup.php"><center><small>Signup now</small></a></center>
	</center>
	</form>
	</div>
	
</body>

</html>
