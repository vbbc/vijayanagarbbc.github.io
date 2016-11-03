<?php
	$msg= 'Name: ' .$_POST['fname']. "\n"
		  .'ContactNo: ' .$_POST['contactno']. "\n"
		  .'Email: ' .$_POST['email']. "\n"
		  .'TeamName: ' .$_POST['teamname']. "\n"
		  . 'Message: ' .$_POST['message'];
	mail('vijayanagarbbc@gmail.com' , 'contact us form' , $msg);
	header( 'Location: http://vijaynagarbbc.com/contact.php' ) ;
?>
		  