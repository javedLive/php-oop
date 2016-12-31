<?php
	/* Object Clonning*/

	include "Language.php";

	$php = new Language;
	$php->setCategory('OOP');
	$php->setFramework('Laravel');

/*	echo $php->getCategory();
	echo "</br>";
	echo $php->getFramework();	*/

	$java = clone $php;
	$java->setCategory('Structural');
	$java->setFramework('Spring');

	echo $php->getCategory();
	echo "</br>";
	echo $php->getFramework();
	echo "</br>";

	echo $java->getCategory();
	echo "</br>";
	echo $java->getFramework();

?>