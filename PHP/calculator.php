<?php
/*
 * calculator.php
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
		margin:15px 150px;
		margin-top: 40pt;  
		margin-left: auto; 
		margin-right: auto;
		margin-top:110pt; 
		width:30%;
		height:350px;
		background-color:palegreen;
		-moz-border-radius:20px 20px 20px 20px; 
	}
	#orange
	{
		color:orange;
	}
	h3
	{
		color:violet;
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
		<br>
		<center><h3>Calculator</h3>	</center>
		<hr>
		<br>
		<form action="calculator.php" method="get">
		<input type="text" name="x" value = <?=$x;?> > <?php echo $a; ?><br>
		<br/>
		<input type="text" name="y" value = <?=$y;?> > <?php echo $s; ?><br>
		<br/>
		<a href="#"><input type="submit" name="oper" value= "AC" ><input type="submit" name="oper" value= "+" ><input type="submit" name="oper" value="-"><input type="submit" name="oper" value="÷"><input type="submit" name="oper" value="*"></input></a><br>
		<br/>
		TOTAL<br>
		<input type="text" name="s" value = '<?php echo $total; ?>' />
		</center>
		
		</div>
			
	</form>

</body>

</html>
