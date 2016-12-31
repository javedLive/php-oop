<?php


$dsn = "mysql:dbname=starz;host=localhost;";
$user = "root";
$pass = "";

try{
	$pdo = new PDO($dsn,$user,$pass);
} catch(PDOException $e){
	echo " Connection Fail ".$e->getMessage();
}

$sql = "select * from membership";
$result = $pdo->query($sql);

foreach ($result as  $value) {
	echo $value['email']."</br>";
}

?>