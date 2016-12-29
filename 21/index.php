<?php
/*
	Magic Constant: 
	__CLASS__

	get_class() 
	
	will return Class Name

*/
	include "Php.php";

	class PhpChild extends Php{
		public function cms(){
			echo " Child Class Constant and Class Name ".__CLASS__."</br>";
			echo " Child Class Function and Class Name ".get_class($this)."</br>";
		}

		public function testMethod(){
			parent::framework();
		}
	}

	$php = new PhpChild;
	$php->cms();
	echo "</br>";
	$php->framework();
	echo "</br>";
	$php->testMethod();
?>