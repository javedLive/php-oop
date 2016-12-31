<?php 
			/* Here Person is Class*/
			/*$name, $age is Property*/
			/*getName,getAge is Method*/
			/*$karim is an object of Person*/
			/*'->' Object Operator' */
			/* $this reference keyword*/
			/*18 Argument*/

	 class Person{				
	// 	public $name="Junayed";
		public $name;			
	 	public $age;

	 	public function getName(){
	 		echo "Your Name is ".$this->name."</br>";
	 	}

	 	public function getAge($value){
	 		echo "Your Age is ".$this->age=$value;
	 	}

	 } 

	 	$karim = new Person;
	//	 	echo $karim->name="Junayed";
	 	$karim->name="Junayed";
	 	$karim->getName();
	 	$karim->getAge("71");
?>