<?php
	class Calculator{
		public $a;
		public $b;

		public function getValue($a, $b){
			$this->a = $a;
			$this->b = $b;

			return $this;
		}

		public function getResult(){
			return ($this->a*$this->b);

			return $this;
		}
	}
?>