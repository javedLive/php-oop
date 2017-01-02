<?php
	abstract class Database{

		public function connect();
		public function query();
		public function insertId();

		public function setHost($host){

		}
		public function setDb($db){

		}

		public function setUser($user){

		}

		public function setPassword($password){

		}
	}
?>