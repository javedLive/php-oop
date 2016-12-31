<?php
/*
	Polymorphism = multiple form

	When we start to extend classes and add functionality to 
	then which wasn't there previously, and even override 
	existing methods, this is called polymorphism

	The basic of polymorphism is Inheritance and overridden 
	method.


*/

		Class UserData{

			public $userId;

			public function __construct($userId){
				$this->userId = $userId;
			}
			public function display()
			{
				echo " User Id : {$this->userId}  </br>";
			}


			}
			/* Extending classes of UserData*/
		class Admin extends UserData{	

			public $level = "Administrator";

			public function display(){	/* Overriden method of UserData*/			
				echo "User Id: {$this->userId} and Level is {$this->level} </br>";				
			}
		}

		$karim = new UserData("1");
		$karim->display();
		$jashim = new Admin("2");
		$jashim->display();
		echo "</br>";

		/*If you want to check whether it's Parent class object or not*/
		if($jashim instanceof UserData){
			echo " Inherited";
		}

?>