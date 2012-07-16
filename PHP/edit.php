<?php
/*
 * edit.php
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
		
	</div>
	
	<div id="body">
		
		<?php
		session_start();
		$conn = pg_connect("host=localhost dbname=mjeg user=mjeg password=melvz");
		$command = "select * from usernames where username = '".$_SESSION['user']."' ;";
		$result = pg_query( $conn, $command );
		$row = pg_fetch_array($result);
		$id = $row['id'];
		
		require('editfile.php');
		//echo "Username: ".$username."<br/>";
		//echo "Firstname: ".$fname."<br/>";
		//echo "Lastname: ".$lname."<br/>";
		//echo "Email: ".$email."<br/>";
		//echo "Course: ".$course."<br/><br/><hr/>";
		
		
		
	?>
	<center><?echo "EDIT FILEs" ;?></center><br><br>
	<form method="post" action="edit.php">
		Username: <input type="text" value="<?=$username;?>" name="username"/><?echo "Username: ".$username."<br/>";?>
		<br/>
		Password: <input type="password" value="<?=$pass;?>" name="pass"/>
		<br/><br/>
		Firstname: <input type="text" value="<?=$fname;?>" name="fname"/><?echo "Firstname: ".$fname."<br/>";?>
		<br/>
		Lastname: <input type="text" value="<?=$lname; ?>" name="lname" /><?echo "Lastname: ".$lname."<br/>";?>
		<br/>
		Email: <input type="text" value="<?=$email; ?>" name="email"/><?echo "Email: ".$email."<br/>";?>
		<br/>
		Course: <input type="text" value="<?=$course; ?>" name="course"/><?echo "Course: ".$course."<br/>";?>
		<br/>
		<input type="submit" name="submit" value="submit"/>
	</form>
	
	<br/>
	<center><?php echo $error; ?></center>
	</div>
	<div id="foot">
	
		<a href="logout1.php">logout</a>
		<a href="index.php">go back</a>
	</div>
	
 
</body>

</html>
