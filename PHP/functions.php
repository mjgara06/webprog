<?php
/*
 * functions.php
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
</head>

<body>
	<?php
		
		function name()
		{
			echo "Emjhay Gara.";
		}	
		name();
		
		echo "<hr/>";
		function add($x, $y)
		{
			$total = $x + $y;
			return $total;
		}
		
		echo "2 + 2 = ".add(2,2);
		
		echo "<hr/>";
		function multiply($x, $y)
		{
			$total = $x * $y;
			return $total;
		}
		echo "2 * 1 = ".multiply(2,1);
		
		echo "<hr/>";
		function repeat($name,$i)
		{
			for($a = 0;$a<$i;$a++)
			{
				echo $name."<br>";
			}
		}
		repeat("mj",3);
		
		echo "<hr/>";
		function caplast($name)
			{
				$c = strlen($name);
				for($b=0;$b<$c;$b++)
				{
					if($b == $c-1)
					$a = strtoupper ($name[$b]);
					else
					$a = $name[$b];
					echo $a;
				}
				echo "<br>";
			}
			caplast("brent");
			
			echo strrev(ucfirst(strrev("wowi")));
		?>
		
</body>

</html>
