<?php
include "Database.php";
	class Student {
		private $table = "students";
		private $name;
		private $department;
		private $age;

		public function setName($name){
			$this->name = $name;
		}
		public function setDepartment($department){
			$this->department = $department;
		}
		public function setAge($age){
			$this->age = $age;
		}

		public function insert(){
			$sql = "INSERT INTO $this->table(name,department,age) VALUES (:name, :department, :age) ";
			$stmt = Database::prepare($sql);
			$stmt->bindParam(':name',$this->name);
			$stmt->bindParam(':department',$this->department);
			$stmt->bindParam(':age',$this->age);
			return $stmt->execute();
		}

		public function readAll(){
			$sql = "SELECT * FROM $this->table";
			$stmt = Database::prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll();
		}
		public function readById($id){
			$sql = "SELECT * FROM $this->table WHERE id=:id";
			$stmt = Database::prepare($sql);
			$stmt->bindParam(':id',$id);
			$stmt->execute();
			return $stmt->fetch();
		}
		public function update($id){
			$sql = "UPDATE $this->table SET name=:name,department=:department,age=:age WHERE id=:id";
			$stmt = Database::prepare($sql);
			$stmt->bindParam(':name',$this->name);
			$stmt->bindParam(':department',$this->department);
			$stmt->bindParam(':age',$this->age);
			$stmt->bindParam(':id',$id);
			return  $stmt->execute();
			
		}

		public function delete($id){
			$sql = "DELETE FROM $this->table  WHERE id=:id";
			$stmt = Database::prepare($sql);
			$stmt->bindParam(':id',$id);
			return  $stmt->execute();
		}
	}
?>