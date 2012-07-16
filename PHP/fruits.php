<?php
/*
 * fruits.php
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
	

	div.box
	{
		width:1050px;
		height:600px;
		background-color:yellow;
		opacity:none;  
		margin-left: auto; 
		margin-right: auto;
		margin-top:30pt; 
	}
	
	div.transbox
	{
		width:49%;
		height:580px;
		margin:0;
		float:left;
		background-color:#DCDCDC;
		margin:15px 150px;
		margin-top: 10pt;  
		margin-left: auto; 
		margin-right: auto;
	}
	
	div.transbox2
	{
		width:50.7%;
		height:580px;
		margin:0px 0px;
		float:right;
		background-color:red;
		margin:15px 150px;
		margin-top: 10pt;  
		margin-left: auto; 
		margin-right: auto;
	}
	</style>
</head>
	
<body>
	</form>

<?php
		
		if(!isset($_GET['oper']))
		{
			$x = 0;
			$y = 0;
			$a = "";
			$s = "";
			$total = 0;
		}
		else
		{
			$x= $_GET['x'];
			$y= $_GET['y'];
			
			if($_GET['oper']=="AC")
			{
				$x = 0;
				$y = 0;
				$a = "";
				$s = "";
				$total = "";					
			}
			if($_GET['oper']=="+")
			{
				$total=$x+$y;					
			}
			
			if($_GET['oper']=="-")
			{
				$total=$x-$y;					
			}
			
			if($_GET['oper']=="*")
			{
					$total=$x*$y;					
			}
			
			if($_GET['oper']=="÷")
			{
				$total=$x/$y;					
			}
		
			if($x == 0)
			{
				$a = " <span id='orange'>  please enter a number</span>";
			}
			if($x != 0)
			{
				$a = " ";
			}
			if($y == 0)
			{
				$s = " <span id='orange'>  please enter a number</span>";
			}
			if($y != 0)
			{
				$s = " ";
			}
		}
?>
<br>
		<div class="box">

		<div class="transbox">

		<center><h3>fruits</h3>	
		<form action="fruits.php" method="get">
		<br>
		<input type="text" name="v" value = <?=$x;?> > <?php echo $a; ?><br>
		<br>
		<input type="text" name="w" value = <?=$y;?> > <?php echo $s; ?><br>
		<br>
		<input type="text" name="x" value = <?=$x;?> > <?php echo $a; ?><br>
		<br>
		<input type="text" name="y" value = <?=$y;?> > <?php echo $s; ?><br>
		<br>
		<input type="text" name="z" value = <?=$y;?> > <?php echo $s; ?><br>
		<br/>
		<a href="#"><input type="radio" name="oper" value= "AC" ><input type="radio" name="oper" value= "+" ><input type="radio" name="oper" value="-"><input type="radio" name="oper" value="÷"><input type="radio" name="oper" value="*"></input></a><br>
		<br/>
		fruit<br>
		<input type="text" name="s" value = '<?php echo $total; ?>' /></center>
		</div>

		<div class="transbox2">		
		<center><h3>wawimac</h3>	
		<form action="fruits.php" method="get">
		<br>
		<input type="text" name="" value = <?=$x;?> > <?php echo $a; ?><br>
		<br>
		<input type="text" name="y" value = <?=$y;?> > <?php echo $s; ?><br>
		<br>
		<input type="text" name="x" value = <?=$x;?> > <?php echo $a; ?><br>
		<br>
		<input type="text" name="y" value = <?=$y;?> > <?php echo $s; ?><br>
		<br>
		<input type="text" name="y" value = <?=$y;?> > <?php echo $s; ?><br>
		<br/>
		<a href="#"><input type="radio" name="oper" value= "AC" ><input type="radio" name="oper" value= "+" ><input type="radio" name="oper" value="-"><input type="radio" name="oper" value="÷"><input type="radio" name="oper" value="*"></input></a><br>
		<br/>
		veggie<br>
		<input type="text" name="s" value = '<?php echo $total; ?>' /></center>
		</div>

		</div>	
</body>

</html>
