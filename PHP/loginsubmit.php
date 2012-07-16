
	<?php
	session_start();
	$error= '';
	$username = $_POST['username'];
	$pass = ($_POST['pass']);
	if($_POST['username'] == '')
	{
		$error .='Please input your username.';
	}
	if($_POST['pass'] == '')
	{
		$error .='Put password.';
	}
	if($error != '')
	{
		header('Location:login.php?error='.$error.'&username='.$_POST['username']);
	}
	else
	{
		//kung ok na
		//check naman kung nasa db sya
		$conn = pg_connect("host=localhost dbname=mjeg user=mjeg password=melvz");
		//check connection
		if($conn == FALSE)
		{
			header('Location: login.php?error='.$error.pg_last_error() );
			die();
		}
	else
	{
		//if nakaconnect tayo
		$query = sprintf('SELECT * from usernames WHERE username = \'%s\' AND pass = \'%s\';',$_POST['username'],$_POST['pass']);
		//check user in db here
		$result =pg_query($conn,$query);
			if(pg_num_rows($result)==0)
			{
				//if wala laman sa db sya
				//$error ='Maybe wrong password or username.';
				//echo $result;
				header('Location:login.php?error='.$error.'username or password. doesnt exist');
			}
			else
			{
				//if nasa db sya
			session_start();
			$_SESSION['OKNA']=1;
			$_SESSION['user'] = $_POST['user'];
			header('Location: index.php?error='.$error.'you are logged in &username=' .$_POST['username']);
			}
	}
		
}
?>
