<?php
/* This is about static property & static method
	we access the propery using self keyword and
	scope resulation operaor 

	comment out part showing how you access static property
	using Object.
*/

	/**
	*  
	*/
	class UserData
	{
		
		public static $age = "30";

/*		public function display(){
			echo " Age is : ".self::$age."</br>";
		}			*/

		public static function display(){
			echo " Age is : ".self::$age."</br>";
		}
	}

/*	$karim = new UserData;
	$karim->display();			*/

	UserData::display();

?>