<?php

/* In this section We discussed about Constant 
	and how to access Constant Data
*/

class UserData{
		public $user;
		public $userId;

		const NAME = "Abdullah";

		

		public function display(){
			echo "Full name is ".UserData::NAME;
		}
	}

		$user = "mamun";
		$id = "25";

		$user = new UserData($user,$id);

		$user->display();
?>