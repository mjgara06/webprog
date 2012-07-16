<?php
	
	if(!isset($_POST['submit']))
	{
		$username = $row['username'];
		$fname = $row['fname'];
		$lname = $row['lname'];
		$email = $row['email'];
		$course = $row['course'];
		$pass = $row['pass'];
		$error = "";
	}
	else
	{
		$utos = "update usernames set username='".$_POST['username']."' where id=".$id.""; 
		$result = pg_query($conn, $utos);
		$username = $_POST['username'];
		$_SESSION['user'] = $_POST['username'];
		
		$utos = "update usernames set pass='".$_POST['pass']."' where id=".$id."";
		$result = pg_query($conn, $utos);
		$pass = $_POST['pass'];
		
		$utos = "update usernames set fname='".$_POST['fname']."' where id=".$id."";
		$result = pg_query($conn, $utos);
		$fname = $_POST['fname'];
		
		$utos = "update usernames set lname='".$_POST['lname']."' where id=".$id."";
		$result = pg_query($conn, $utos);
		$lname = $_POST['lname'];
		
		$utos = "update usernames set email='".$_POST['email']."' where id=".$id."";
		$result = pg_query($conn, $utos);
		$email = $_POST['email'];
		
		$utos = "update usernames set course='".$_POST['course']."' where id=".$id."";
		$result = pg_query($conn, $utos);
		$course = $_POST['course'];
		
		
		
		$_SESSION['user'] = $_POST['username'];
		$error = "edit complete<br/>";
	}
?>
