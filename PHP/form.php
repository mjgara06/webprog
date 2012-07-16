<?php
/*
 * form.php
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

		#o
		{
			color:orange;
		}
	</style>
</head>

<body>
	<?php 
				
		if(!isset($_GET['sum']))
		{
			$x = "";
			$y = "";
			$a = "";
			$s = "";
		}
		else
		{
			$x= $_GET['x'];
			$y= $_GET['y'];
		
			if($x == 0)
			{
				$a = " <span id='o'>  please enter a number</span>";
			}
			if($x != 0)
			{
				$a = " ";
			}
			if($y == 0)
			{
				$s = " <span id='o'>  please enter a number</span>";
			}
			if($y != 0)
			{
				$s = " ";
			}
		}

		$sum = $x + $y;
	?>
	Addition<br>
	<form   action="form.php" method="get" >
	
	<input type="text" name="x" value="<?=$x;?>" /> <?php echo $a; ?>
	<br>
	+
	<br>
	<input type="text" name="y" value ="<?=$y;?>" /> <?php echo $s; ?>
	<br>
	<input type="submit" value="=" name=sum ><br>
	Result <input type="text" name="s" value = <?php echo $sum; ?> /><br>
	</form>
	
</body>

</html>
