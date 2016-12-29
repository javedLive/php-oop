<?php
	
	class Php{

		public static function framework(){
		//	echo "Laravel is a framework </br>";
			echo self::getClass();
		}

		/*public function getFramework(){
			self::framework();
		} */

		public static function getClass(){
			return __CLASS__;
		}

	}
?>