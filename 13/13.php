<?php 
	
	/**
	*  Abstract class
	*/
	abstract class Student
		{
			public $name;
			public $age;

			public function details(){
				echo $this->name." is ".$this->age." years old";
			}

			/*
				Abstract method class should be abstract
				you can't access abstract method unless you create overriden method
				you can't access abstract method by creating object as you can't create
				object for abstract class.
			*/
			abstract public function getBoy();
					
		}
	/*
		But if we put 'abstract' key before Student Class
		we can't create object.it'll show fatal Error.
		But we can access abstract class if we extend it
	*/
	class Boy extends Student{

		public function userDetails(){

			 return parent::details()." and I'm a school student ";
		}	

		public function getBoy(){
			echo " He's just a Boy </br>";
		}
	}

	$jasim = new Boy;
	$jasim->name = "Jasim";
	$jasim->age = "15";
//	$jasim->details();
	$jasim->getBoy();
	echo $jasim->userDetails();

?>
