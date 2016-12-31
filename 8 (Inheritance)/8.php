<?php 
/*
	SingleUser Extends the property of UserData
	$rahim can access the UserData class Property
	display method been override by SingleUser Class
	but override method always call child class first
	if it access by child.
*/

class UserData
{
	public $userId;
	public $userName;

	public function __construct($userId,$userName)
	{
		 $this->userId=$userId;
		 $this->userName=$userName;		
	}

	public function display(){
		echo "User Id is {$this->userId} and Name is {$this->userName}</br>";
	}
}

	class SingleUser extends UserData{
		public $level= "Admin";

		public function display(){
		echo "User Id is {$this->userId} and Name is {$this->userName} and his level is
		 {$this->level} </br>";
	}
	}

	$karim = new UserData("1","Karim");
	$karim->display();

	$rahim = new SingleUser("2","Rahim");
	$rahim->display();
?>