<?php

class Person{
	public $name = "Arif";
	public $age = "18";
	public $education = "hsc";
	private $email = "java@yahoo.co";
	protected $passwor = "123456";

	function iterate_property(){
		echo "All Property </br>";
		foreach ($this as $key => $value) {
		echo "<pre>";
		echo "$key => $value";
		echo "<pre>";
	}
	}
}


	

		
?>