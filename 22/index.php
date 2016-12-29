<?php
/*
	Static Binding..
	Super Class can access subClass Property ..
*/
include "Php.php";
	

	class PhpChild extends Php{
		public static function getClass(){
			return __CLASS__;
		}
	}

	$php = new Php;
	$php->framework();
	
	$phpChild = new PhpChild;
	$phpChild->framework();
?>