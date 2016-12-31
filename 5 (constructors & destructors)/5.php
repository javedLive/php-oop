<?php

/* Constructor & Destructor Example*/ 
	class UserData{
		public $user;
		public $userId;

		public function __construct($userName, $userId){
			$this->user = $userName;
			$this->userId = $userId;

			echo " Username is {$this->user} and UserId is {$this->userId} </br>";
		}

		public function __destruct(){
			unset($this->user);
			unset($this->userId);
		}
	}

		$user = "mamun";
		$id = "25";

		$user = new UserData($user,$id);
?>