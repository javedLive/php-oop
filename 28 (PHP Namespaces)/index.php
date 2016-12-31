<?php
/*
	Namespaces ,Aliases
*/
/*	spl_autoload_register(function($class){
		include "classes/".$class.".php";
	});*/

	include "classes/Java.php";
	include "classes/Php.php";
	include "classes/Python.php";

	use javed\Python as py; /* Using Aliase of Python class*/

	new javed\Java();
	new javed\Php();
//	new javed\Python();
	new py();
	echo HTML;
	echo javed\CSS;
	javed\show();
?>