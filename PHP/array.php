<?php
/*
 * array.php
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
	// create an array
	$array = array(1,2,3,4,5,6);
	
	// display an item in array
	echo $array[0];
	
	// display items in an array
	for ( $i = 0; $i < count( $array ); ++$i )
		echo $array[ $i ].', ';
		
		
	$b[] = "hehe";
	$b[] = 1;
	$b[] = 1343.122;
	$b[10] = "aup";
	$b[] = 'this one';
	
	echo '<pre>';
	print_r( $b );
	echo '</pre>';
	
	echo '<hr />';
	
	$xyz = array( "hi", "hello", array( "kumusta", "musta", "oi" ), "bye" );
	
	echo $xyz[2][0];

	echo '<pre>';
	print_r( $xyz );
	echo '</pre>';
	
	echo '<hr />';

	// named keys
	$abc = array( "one" => "isa", 2, 3, 4, "five" => "tano" );

	echo '<pre>';
	print_r( $abc );
	echo '</pre>';

	echo '<hr />';
	
	$people[] = array( 'name' => 'sir Shem', 'country' => 'PH' );
	$people[] = array( 'name' => 'Errol', 'country' => 'JUPITER' );
	
	echo '<pre>';
	print_r( $people );
	echo '</pre>';
?>
	</body>
</html>
