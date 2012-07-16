<?php
/*
 * one.php
 * 
 * Copyright 2011 Melvin John E. Gara <mjeg@csserver2>
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
</head>

<body>
	<?php
		echo "Hello";
		$word = "world!<br/>";
		echo $word;
		$string = $word. "Hi!";
		echo $string;
		echo"<hr/>";
		$val1 = 9;
		$val2 = 1;
		echo $val1."<br/>";
		echo $val2."<br/>";
		echo $val1+$val2;
		echo"<hr/>";
		$sum = $val1 + $val2;
		echo $sum; 
		
		echo "<hr/> division <br/>";
		$quotient = $val1/$val2;
		echo $val1."/".$val2;
		echo "<br/>".$quotient;
		
		echo"<hr/>";
		for($i = 1; $i <= 5; $i++)
		{
			echo "Gwapo si brent.".$i."daw<br/>";
		}
		
		echo"<hr/>";
		for($i = 1;$i <=7;$i++)
		{
			echo ($i*2). " and ".$i."<br/>";
		}
		
		echo "<hr/>";
		for($i = 7;$i >= 0 ;$i--)
		{
			echo $i. " and " .($i*2). "<br/>";
		}
		
		echo"<hr/>";
		?>
</body>

</html>
