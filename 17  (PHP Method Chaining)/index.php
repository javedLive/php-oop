<?php

/*
	Method Chaining
*/

include "Php.php";
include "Calculation.php";


$php = new Php;

$php->framework()->cms();

$calculate = new Calculator;
echo "The Result is ".$calculate->getValue(2,3)->getResult();
//$php->cms();

?>