<?php

/*
	How to Autoload classes
*/
/*
 >> Oldest Way
include "classes/Employee.php";
include "classes/Student.php";
include "classes/Teacher.php";

*/
	spl_autoload_register(function($class_name){
		include "classes/".$class_name.".php";
	});


	$student = new Student;
	$teacher = new Teacher;
	$employee = new Employee;

?>