<?php

	$error = '';
	$username = $_POST['username'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$Email = $_POST['email'];
	$month =  $_POST['month'];
	$bday =  $_POST['bday'];
	$byear =  $_POST['byear'];
	$course = $_POST['course'];
	$address = $_POST['address'];
	$gender = $_POST['gender'];
	$status = $_POST['status'];
	$pass = $_POST['pass'];
	$pass2 = $_POST['pass2'];
	
	if( $_POST['username']== '')
		$error .='Please enter your username.';
	if( $_POST['fname']== '')
		$error .='Please enter your first name.';	
	if( $_POST['lname']== '')
		$error .='Please enter your last name.';	
	if( $_POST['email']== '')
		$error .='Please enter your email.';	
	if( $_POST['month']== '')
		$error .='Please select your birthmonth.';
	if( $_POST['bday']== '')
		$error .='Please select your birthdate.';
	if( $_POST['byear']== '')
		$error .='Please select your birthyear.';
	if( $_POST['course']== '')
		$error .='Please enter your course.';		
	if( $_POST['gender']== '')
		$error .='Please select your gender.';
	if( $_POST['address']== '')
		$error .='Please enter your address.';	
	if( $_POST['status']== '')
		$error .='Please select your status.';	
	if( $_POST['pass']== '')
		$error .='Please enter your password.	';
				
	if(!filter_var($Email, FILTER_VALIDATE_EMAIL))	
	{
		$error .= "E-mail is not valid.";	
	}
	
	//if( $_POST['status'] != 'married'||$_POST['status'] != 'single')
		//$error .= 'select status. ';
		
	//if( $_POST['gender'] != 'male'||$_POST['gender'] != 'female')
	
		//$error .= 'select gender. ';
	if( $_POST['pass2'] == '')
	{
		$error .= 'Retype Password. ';
	}	
	if( $_POST['pass'] != $_POST['pass2'])
	{
		$error .= 'Retype Password. ';
	}
			
	if( $error != '')
	{

		header( 'Location: signup.php?error='.$error.'&username='.$_POST['username'].'&fname='.$_POST['fname'].'&email='.$_POST['email'].'&lname='.$_POST['lname'].'&month='.$_POST['month'].'&bday='.$_POST['bday'].'&byear='.$_POST['byear'].'&course='.$_POST['course'].'&status='.$_POST['status'].'&gender='.$_POST['gender'].'&address='.$_POST['address'].'&pass='.$_POST['pass'].$_SERVER['QUERY_STRING']);
	}	
	else
	{

		$query2 = sprintf('SELECT * FROM usernames where username=\'%s\';',$_POST['username']);
			$query = sprintf('INSERT INTO usernames VALUES(default, \'&s\',\'&s\',\'&s\',\'&s\',\'&s\',\'&s\', \'&s\', \'&s\', \'&s\', \'&s\',\'&s\',\'&s\');',

		pg_escape_string($_POST['username']),
		pg_escape_string($_POST['fname']),
		pg_escape_string($_POST['lname']),
		pg_escape_string($_POST['email']),
		pg_escape_string($_POST['month']),
		pg_escape_string($_POST['bday']),
		pg_escape_string($_POST['byear']),
		pg_escape_string($_POST['course']),
		pg_escape_string($_POST['status']),
		pg_escape_string($_POST['gender']),
		pg_escape_string($_POST['address']),
		pg_escape_string(md5($_POST['pass']) ) );
		
	$conn = pg_connect("host=localhost dbname=mjeg user=mjeg password=melvz");
	if( $conn == FALSE )
	{
		header( 'Location: signup.php?error=No connection to DB ');
	}

			$result2=@pg_query($conn,$query2);
				if(pg_num_rows($result2)==1)
				{			//$error.=$query;
						$error ='Username already taken.';
							header( 'Location: signup.php?error='.$error.'&username='.$_POST['username'].'&fname='.$_POST['fname'].'&email='.$_POST['email'].'&lname='.$_POST['lname'].'&month='.$_POST['month'].'&bday='.$_POST['bday'].'&byear='.$_POST['byear'].'&course='.$_POST['course'].'&status='.$_POST['status'].'&gender='.$_POST['gender'].'&address='.$_POST['address'].'&pass='.$_POST['pass'].$_SERVER['QUERY_STRING']);
				}
				else
				{
				
					$birthday = $_POST['month']." ".$_POST['bday']." ".$_POST['byear'];
					$result = pg_query($conn, "select * from usernames;");	
					$string = "insert into usernames(id,username, fname, lname, email, birthday,course, status, gender, address,pass) values(default, '".$_POST['username']."', '".$_POST['fname']."','".$_POST['lname']."','".$_POST['email']."','".$birthday."','".$_POST['course']."','".$_POST['status']."','".$_POST['gender']."','".$_POST['address']."','".$_POST['pass']."');"; //<!--,'".$_POST['pass2']."');";
					$result = pg_query($conn, $string);
					session_start();
					$_SESSION['OKNA']=1;
					$_SESSION['user'] = $_POST['username'];
					header('Location: index.php?error='.$error.'Signup approved.&fname= '.$_POST['fname']);
					//header('Location: home.php');
				}
	
}
?>
