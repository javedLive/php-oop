<?php

include "ManageMysql.php";
include "Sqlite.php";
	class Database{

		public $driver;
		public $link;

		public function setDriver($driver){
			$this->driver =$driver;
		}

		public function connection(){
			if($this->driver == "mysql")
			  {
			  	$mysql = new ManageMysql();
				$mysql->setHost($host);
				$mysql->setDB($db);
				$mysql->setUser($user);
				$mysql->setPassword($password);
				$this->link=$mysql->connect();
			  }
			else if($this->driver == "sqlite")
			{
				
				$sqlite = new ManageMysql();
				$sqlite->setHost($host);
				$sqlite->setDB($db);
				$sqlite->setUser($user);
				$sqlite->setPassword($password);
				$this->link=$sqlite->connect();
			}

			else{

			}
		}
	}
?>