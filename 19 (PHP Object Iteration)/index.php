<?php 
include "Person.php";
/*
	Iteration
	Acessing Private/Protected/Public Property using Object and Function..
*/

$jaki = new Person;

/*	foreach ($jaki as $key => $value) {
		echo "<pre>";
		echo "$key => $value";
		echo "<pre>";
	}	*/
	$jaki->iterate_property();
?>