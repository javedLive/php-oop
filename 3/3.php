<?php 

/*
	Consturctor is used for value initialization of a Class and it's object.. __construct is called magic method
*/
	 class Person{				

		public $name;			
	 	public $age;

	 	public function __construct($name,$age){
	 		$this->name = $name;
	 		$this->age = $age;
	 	}

	 	public function personDetails(){
	 		echo "Person Name is {$this->name} and his age is {$this->age} </br>";
	 	}

	 } 

	 	$karim = new Person("Akbar","28");
	 	
	 	$karim->personDetails();
?>