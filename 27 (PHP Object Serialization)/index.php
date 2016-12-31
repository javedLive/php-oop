<?php
/*
	Object Serialization
*/
	include "Language.php";

	$language = new Language;
	$serialize = serialize($language);
// For Serializing Data 
	/* file_put_contents("language.txt", $serialize);
	echo $serialize;*/ 

	$getContent = file_get_contents("language.txt");
	$unserilize = unserialize($getContent);
	echo "</pre>";
	print_r($unserilize);

?>