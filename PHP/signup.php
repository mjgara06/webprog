<?php
/*
 * signup.php
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
	<style ="text/css">
	div.box1
	{
		width:40%;
		height:40%;
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
		margin-top:0pt; 
		-moz-border-radius:0px 0px 20px 20px;
	}
	h6
	{
		color:red;
	}
	a:hover
	{
		color:blue;
	}
	h4 
	{
		text-decoration:blink;
	} 
	</style>
</head>

<body>
	
	<div class="box1"><br>
		<?php
	//	session_start();
	//	$_SESSION['OKNA']=1;
	//	header ('location:index.php');
		
	if(isset( $_GET['error']))
		echo "<h4 style =text-align:center;color:red;>". $_GET['error']."</h4>";
	else
		echo "<h4 style='text-align:center;background:whiter;color:red;'>hello</h4>";
	?>
	<center><h1>Signup</h1></center>
	<center><a href="login.php"><small>Login</small></a></center>
	<form action="signupsubmit.php" method="POST"><br>
	</div>
	<div class="box">
		<br>
	<center>
	
	Username: <input type= text size = 15 name = "username" maxlength = 25 value="<?=@$_GET['username']?>" /><br>
	Firstname: <input type= text size = 15 name = "fname" maxlength = 25 value="<?=@$_GET['fname']?>" /><br>
	Lastname: <input type= text size = 15 name = "lname" maxlength = 25 value="<?=@$_GET['lname']?>" /><br>
	Email_add: <input type= text size = 15 name = "email" maxlength = 25 value="<?=@$_GET['email']?>" /><br>
	Birthday:<select name="month"> 					
			 <option value="">choose month...</option>
					<?php
						//$a=array("1"=>"January","2"=>"February","3"=>"March","4"=>"April","5"=>"May","6"=>"June","7"=>"July","8"=>"August","9"=>"September","10"=>"October","11"=>"November","12"=>"December",);
						//for($i=1;$i<=12;$i++)
						//{
						//	echo "<option value='$i'>$a[$i]</option>";
	
						//}
					?> <option value="1" <? if($_GET['month']==1)echo "selected='selected'"; ?> >January</option>
					<option value="2" <? if($_GET['month']==2)echo "selected='selected'"; ?> >February</option>	

					<option value="3" <? if($_GET['month']==3)echo "selected='selected'"; ?> >March</option>
					<option value="4" <? if($_GET['month']==4)echo "selected='selected'"; ?> >April</option>
					<option value="5" <? if($_GET['month']==5)echo "selected='selected'"; ?> >May</option>
					<option value="6" <? if($_GET['month']==6)echo "selected='selected'"; ?> >June</option>
					<option value="7" <? if($_GET['month']==7)echo "selected='selected'"; ?> >July</option>
					<option value="8" <? if($_GET['month']==8)echo "selected='selected'"; ?> >August</option>

					<option value="9" <? if($_GET['month']==9)echo "selected='selected'"; ?> >September</option>
					<option value="10" <? if($_GET['month']==10)echo "selected='selected'"; ?> >October</option>
					<option value="11" <? if($_GET['month']==11)echo "selected='selected'"; ?> >November</option>
					<option value="12" <? if($_GET['month']==12)echo "selected='selected'"; ?> >December</option>
				</select>
				<select name="bday"> 					
				<option value="">day</option>
					
					<option value="1" <? if($_GET['bday']==1)echo "selected='selected'"; ?> > 1 </option>
					<option value="2" <? if($_GET['bday']==2)echo "selected='selected'"; ?> > 2 </option>
					<option value="3" <? if($_GET['bday']==3)echo "selected='selected'"; ?> > 3 </option>
					<option value="4" <? if($_GET['bday']==4)echo "selected='selected'"; ?> > 4 </option>
					<option value="5" <? if($_GET['bday']==5)echo "selected='selected'"; ?> > 5 </option>

					<option value="6" <? if($_GET['bday']==6)echo "selected='selected'"; ?> > 6 </option>
					<option value="7" <? if($_GET['bday']==7)echo "selected='selected'"; ?> > 7 </option>
					<option value="8" <? if($_GET['bday']==8)echo "selected='selected'"; ?> > 8 </option>
					<option value="9" <? if($_GET['bday']==9)echo "selected='selected'"; ?> > 9 </option>
					<option value="10" <? if($_GET['bday']==10)echo "selected='selected'"; ?> > 10 </option>

					<option value="11" <? if($_GET['bday']==11)echo "selected='selected'"; ?> > 11 </option>
					<option value="12" <? if($_GET['bday']==12)echo "selected='selected'"; ?> > 12 </option>
					<option value="13" <? if($_GET['bday']==13)echo "selected='selected'"; ?> > 13 </option>
					<option value="14" <? if($_GET['bday']==14)echo "selected='selected'"; ?> > 14 </option>
					<option value="15" <? if($_GET['bday']==15)echo "selected='selected'"; ?> > 15 </option>

					<option value="16" <? if($_GET['bday']==16)echo "selected='selected'"; ?> > 16 </option>
					<option value="17" <? if($_GET['bday']==17)echo "selected='selected'"; ?> > 17 </option>
					<option value="18" <? if($_GET['bday']==18)echo "selected='selected'"; ?> > 18 </option>
					<option value="19" <? if($_GET['bday']==19)echo "selected='selected'"; ?> > 19 </option>
					<option value="20" <? if($_GET['bday']==20)echo "selected='selected'"; ?> > 20 </option>

					<option value="21" <? if($_GET['bday']==21)echo "selected='selected'"; ?> > 21 </option>
					<option value="22" <? if($_GET['bday']==22)echo "selected='selected'"; ?> > 22 </option>
					<option value="23" <? if($_GET['bday']==23)echo "selected='selected'"; ?> > 23 </option>
					<option value="24" <? if($_GET['bday']==24)echo "selected='selected'"; ?> > 24 </option>
					<option value="25" <? if($_GET['bday']==25)echo "selected='selected'"; ?> > 25 </option>

					<option value="26" <? if($_GET['bday']==26)echo "selected='selected'"; ?> > 26 </option>
					<option value="27" <? if($_GET['bday']==27)echo "selected='selected'"; ?> > 27 </option>
					<option value="28" <? if($_GET['bday']==28)echo "selected='selected'"; ?> > 28 </option>
					<option value="29" <? if($_GET['bday']==29)echo "selected='selected'"; ?> > 29 </option>
					<option value="30" <? if($_GET['bday']==30)echo "selected='selected'"; ?> > 30 </option>

					<option value="31" <? if($_GET['bday']==31)echo "selected='selected'"; ?> > 31 </option>
				</select>
				<select name="byear">						
				<option value="">year</option>
					<option value="1989" <? if($_GET['byear']==1989)echo "selected='selected'"; ?> >1989</option>
					<option value="1990" <? if($_GET['byear']==1990)echo "selected='selected'"; ?> >1990</option>
					<option value="1991" <? if($_GET['byear']==1991)echo "selected='selected'"; ?> >1991</option>
					<option value="1992" <? if($_GET['byear']==1992)echo "selected='selected'"; ?> >1992</option>

					<option value="1993" <? if($_GET['byear']==1993)echo "selected='selected'"; ?> >1993</option>
					<option value="1994" <? if($_GET['byear']==1994)echo "selected='selected'"; ?> >1994</option>
					<option value="1995" <? if($_GET['byear']==1995)echo "selected='selected'"; ?> >1995</option>
					<option value="1996" <? if($_GET['byear']==1996)echo "selected='selected'"; ?> >1996</option>
					<option value="1997" <? if($_GET['byear']==1997)echo "selected='selected'"; ?> >1997</option>
					<option value="1998" <? if($_GET['byear']==1998)echo "selected='selected'"; ?> >1998</option>

					<option value="1999" <? if($_GET['byear']==1999)echo "selected='selected'"; ?> >1999</option>
					<option value="2000" <? if($_GET['byear']==2000)echo "selected='selected'"; ?> >2000</option>
					<option value="2001" <? if($_GET['byear']==2001)echo "selected='selected'"; ?> >2001</option>
					<option value="2002" <? if($_GET['byear']==2002)echo "selected='selected'"; ?> >2002</option>
					<option value="2003" <? if($_GET['byear']==2003)echo "selected='selected'"; ?> >2003</option>
					<option value="2004" <? if($_GET['byear']==2004)echo "selected='selected'"; ?> >2004</option>
					<option value="2005" <? if($_GET['byear']==2005)echo "selected='selected'"; ?> >2005</option>
					<option value="2006" <? if($_GET['byear']==2006)echo "selected='selected'"; ?> >2006</option>
					<option value="2007" <? if($_GET['byear']==2007)echo "selected='selected'"; ?> >2007</option>
					<option value="2008" <? if($_GET['byear']==2008)echo "selected='selected'"; ?> >2008</option>
					<option value="2009" <? if($_GET['byear']==2009)echo "selected='selected'"; ?> >2009</option>
					<option value="2010" <? if($_GET['byear']==2010)echo "selected='selected'"; ?> >2010</option>
				</select>
				<br/>
			Course:<input type="text" name="course" value="<?=@$_GET['course']?>" /> <br/>
			
			Status:<label><input type="radio" name="status" value="married" <? if($_GET['status']=="married") echo "checked=checked";?>  />married</label>
			
				   <label><input type="radio" name="status" value="single" <? if($_GET['status']=="single") echo "checked=checked";?>/>single</label><br/>
				   
			Gender:<label><input type="radio" name="gender" value="male" <? if($_GET['gender']=="male") echo "checked=checked";?> />male</label>
				   <label><input type="radio" name="gender" value="female" <? if($_GET['gender']=="female") echo "checked=checked";?> />female</label><br/>

			Address:<input type="text" name="address" value="<?=@$_GET['address']?>" /><br/>
			Password: <input type= password size = 15 name = "pass" maxlength = 10> <br>
			Retype Password: <input type= password size = 15 name = "pass2" maxlength = 10> 
			<br>   <input type="submit" name="SUBMIT" value="SUBMIT!"  /><br>
	</center>
	
	</form>
	</div>
	<!-- error_check	
		//if($_POST['user']==''||$_POST['pass']==''){
			//pag my blank
			//$error='';
		//if($_POST['user']==''){$error='no user';}
		//if($_POST['pass']==''){$error='no pass';}
		
	//}
	//else if(strlen($_POST['pass'])<6)
	//{
		//pag less than 5 char ang pass
		//$error='password must be atleast 6 char';
			//}else{
				//if($conn == FALSE){
			//echo "error connection.";
		//}else{
			//echo "CONNECTED";
			//	$result = pg_query($conn,"select *from login;");
		//		header('home.php');}
	-->
</body>

</html>
