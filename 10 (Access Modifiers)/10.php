<?php 
/*
	Access Modifier : public, private, keyword

	public property or method can access inside the main class 
	as well as.

	but for private method or property can access inside that class but can't 
	access in the extended class or subclass.

	protected variable can access inside that class or extended class.
	But it's can't extended outside the class.
*/

	Class UserData{
		public $userId;
	//	private $userName="Karim";
//		protected $userEmail="java@yahoo.co";
		private $userName;
		protected $userEmail;

		public function __construct($userId,$userEmail,$userName){
			$this->userId = $userId;			
			$this->userEmail = $userEmail;
			$this->userName = $userName;
		}		

		public function display()
		{
			echo " User Id : {$this->userId} and User Email : {$this->userEmail} and User Name is :{$this->userName} </br>";
		}


	}

		class Admin extends UserData{

			public $level = "Administrator";

			public function display(){
//				echo "User Id: {$this->userId} and Level is {$this->level} and Name is {$this->userName} </br>";
				echo "User Id: {$this->userId} and Level is {$this->level} </br>";
				/* Here this will show undefine property as userName isn't property of Admin Class*/
			}
		}

		$karim = new UserData("1","ka@yahoo.co","Karim");
		$karim->display();

		$jashim = new Admin("2","ja@va","Jashim");
/*		$jashim = new Admin;
	echo	$jashim->userEmail;	/* Now it'll show fatal Error without the constructor 
										as protected property can't access by outside the class
									*/

		$jashim->display();


?>