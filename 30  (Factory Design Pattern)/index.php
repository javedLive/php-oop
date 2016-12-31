<?php
/*Factory Design Pattern*/
include "Database.php";

$database = new Database();
$database->setDriver= "mysql";
$database->connection("host","user","db","password");







?>