<?php
/*
Standard PHP Library - SPL
http://php.net/manual/en/book.spl.php
*/
	$array =  array("JAVA","PHP","C","C++");
	$iterator = new ArrayIterator($array);

	echo $iterator->current()."</br>";
	$iterator->next();
	echo $iterator->current()."</br>";
	
	//$limit = new LimitIterator($array,0,2)
	foreach ($iterator as $value) {
		echo $value."</br>";
	}

?>