<?php
/*Strategy Design Pattern
Sending mail or phone or sms

This is just demo 
*/
include "User.php";

$user = new User();
$message = $user->getMsg();

switch ($message) {
	case 'email':
		$email = new SendEmail();
		break;
	
	case 'sms':
		$sms = new SendSms();
		break;

	case 'fax':
		$fax = new SendFax();
		break;
	}

	$email->notification();
?>