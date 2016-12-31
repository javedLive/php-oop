<?php

spl_autoload_register(function ($class){
	include $class.".php";
});

	$object = new Observable();
	$skype = new Skype();
	$gtalk = new Gtalk();

	$std = new stdClass();
	$object->register($skype);
	$object->register($gtalk);
	$object->register($std);
	$object->statechange();
?>