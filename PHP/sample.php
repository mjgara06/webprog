<?php
/*
 * sample.php
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
	body
{
font-family:Arial, Helvetica, sans-serif;
font-size:12px;
}
.mainbox
{
width:250px;
margin:50px;
}
.text_wrapper
{
border:solid 1px #0099CC;
padding:5px;
width:187px;
}
.edit_link
{
float:right
}
.editbox
{
overflow: hidden;
height: 61px;
border:solid 1px #0099CC;
width:190px;
font-size:12px;
font-family:Arial, Helvetica, sans-serif;
padding:5px
}
</style>
<script type="text/javascript" src="http://ajax.googleapis.com/
ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function()
{

//Edit link action
$('.edit_link').click(function()
{
$('.text_wrapper').hide();
var data=$('.text_wrapper').html();
$('.edit').show();
$('.editbox').html(data);
$('.editbox').focus();
});

//Mouseup textarea false
$(".editbox").mouseup(function()
{
return false
});

//Textarea content editing
$(".editbox").change(function()
{
$('.edit').hide();
var boxval = $(".editbox").val();
var dataString = 'data='+ boxval;
$.ajax({
type: "POST",
url: "update_profile_ajax.php",
data: dataString,
cache: false,
success: function(html)
{
$('.text_wrapper').html(boxval);
$('.text_wrapper').show();
}
});
});

//Textarea without editing.
$(document).mouseup(function()
{
$('.edit').hide();
$('.text_wrapper').show();
});

});
</script>
</head>

<body>
	

//body part
<div class="mainbox">
<a href="#" class="edit_link" title="Edit">Edit</a>
// Displaying profile data from the users table
<?php
include("db.php");
//$username=$session_id; 
$psql=pg_query("select username from usernames where username='$username'");
$row=pg_fetch_array($sql);
$profile=$row['username'];
?>
<div class="text_wrapper"><?php echo $profile; ?></div>
<div class="edit" style="display:none">
<textarea class="editbox" cols="23" rows="3" ></textarea>
</div>
</div>
<?php
$pg_hostname = "localhost";
$pg_user = "username";
$pg_password = "password";
$pg_database = "database";
$bd = pg_connect("host=localhost dbname=mjeg user=mjeg password=melvz");
if($bd == FALSE)
		{
			("Opps some thing went wrong");//header('Location: db.php?error='.$error.pg_last_error() );
			die();
		}
//pg_select_db($pg_database, $bd) or die("Opps some thing went wrong");
?>

</body>

</html>
