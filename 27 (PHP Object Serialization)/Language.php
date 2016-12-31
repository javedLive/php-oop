<?php
	class Language{

		public $html;
		public $css;
		private $php;
		protected $java;
		
		function __construct(){
			$this->html = "I know HTML";
			$this->css = "I know CSS";
			$this->php = "I know PHP";
			$this->java = "I know JAVA";
		}
	}
?>