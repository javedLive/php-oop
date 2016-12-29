<?php 

class Language{
	private $category;
	private $framework;

	function setCategory($value){
		$this->category= $value;
	}

	function getCategory(){
		return $this->category;
	}

	function setFramework($value){
		$this->framework= $value;
	}

	function getFramework(){
		return $this->framework;
	}

	public function __clone(){
		$language = new Language;
		$language->setCategory($this->category);
		$language->setFramework($this->framework);
		return $language;
	}
}
	
?>