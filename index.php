<?php
 
class MyClass
{
  public $prop1 = "I'm a class property!";
  
  public function __construct()
  {
      echo 'The class "', __CLASS__, '" was initiated!<br />';
  }
 
  public function __destruct()
  {
      echo 'The class "', __CLASS__, '" was destroyed.<br />';
  }
  
  public function setProperty($newval)
  {
      $this->prop1 = $newval;
  }
 
  public function getProperty()
  {
      return $this->prop1 . "<br />";
  }
  
  public function __toString()
  {
      echo "Using the toString method: ";
      return $this->getProperty();
  }
 
}
	Class MyOtherClass extends MyClass{
		
		public function __construct()
		  {
			  parent::__construct();
			  echo "A new constructor in " . __CLASS__ . ".<br />";
		  }
		public function newMethod(){
			echo "This is new Method of ".__CLASS__.".<br/>";
		}
	}
	$obj = new MyClass;
	$obj2= new MyClass;
	
	$newobj = new MyOtherClass;
	echo $newobj->newMethod();
	echo $newobj->getProperty();
 
	//	echo $obj->prop1. "</br>";
	//echo $obj->getProperty(); // Get the property value
 
	$obj->setProperty("I'm First Object!"); // Set a new one
	$obj2->setProperty("I'm the Second Object!");
	
	echo $obj->getProperty(); // Read it out again to show the change
	echo $obj2->getProperty();
	unset($obj);
	unset($obj2);
	echo "End of File" . "<br />";
	
	
?>