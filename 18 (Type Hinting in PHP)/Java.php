<?php
	class Java{
		public $fromPhp;

		function __construct(Php $value){
			$this->fromPhp = $value;
			$this->fromPhp->framework();
			$this->fromPhp->cms();
		}
	}
?>