<?php
include "15.php";
/*
	Existance of class and Method
*/
 
 if(class_exists("Student")){ // For checking class existance
 	$student = new Student;
 	if(method_exists($student, 'details')){	// For checking Method existance
 		$student->details();
 	}
 	else{
 		echo " No Method Found";
 	}
 	
 }

 else{
 	echo " Class Not Found";
 }


?>
