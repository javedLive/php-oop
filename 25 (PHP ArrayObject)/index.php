<?php
	/*
		Array Object
	*/

	$array =array("HTML","JAVA","PHP","C");

	$languages = new ArrayObject($array);
	$iterate = $languages->getIterator();
	$iterate->append("C++");
	while ($iterate->valid()) {
		echo $iterate->current()."</br>";
		$iterate->next();
	}
?>