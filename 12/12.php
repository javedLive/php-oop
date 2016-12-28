<?php
		
		interface school{
			public function mySchool();
		}

		interface college{
			public function myCollege();
		}

		interface varsity{
			public function myVarsity();
		}

		class Teacher implements school,college,varsity{
			public function __construct(){
				$this->mySchool();
				$this->myCollege();
				$this->myVarsity();
			}

			public function mySchool(){
				echo "This is school Teacher </br>";
			}

			public function myCollege(){
				echo "This is college Teacher </br>";
			}

			public function myVarsity(){
				echo "This is varsity Teacher </br>";
			}
		}

		$teacher = new Teacher;
		

?>