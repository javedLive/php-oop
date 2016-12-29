<?php

/* 
	Example of Trait
	Single Trait
	Combined Trait
*/
	
	trait Php{

		public function php(){
			echo " I work on PHP";
		}
	}

	trait Framework{
		public function framework(){
			echo " I work on Laravel";
		}
	}


	trait PhpFramework{
		use Php,Framework; 
	}


	class Student1{
			use PhpFramework;
	}

	class Student2{
		
		use Php,Framework;
	}

	$s1 = new Student1;
	echo $s1->Php()."</br>";
	echo $s1->Framework()."<br>";

	$s2= new Student2;
	echo $s2->Php()."</br>";
	echo $s2->Framework();
?>