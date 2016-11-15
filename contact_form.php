<?php
	$msg= 'Contact Person Name: ' .$_POST['fname']. "\n"
		  .'Contact Number: ' .$_POST['contactno']. "\n"
		  .'Team Email address: ' .$_POST['email']. "\n"
		  .'Team Name: ' .$_POST['teamname']. "\n"
		  . 'Team Members: ' .$_POST['message'];
	mail('vijayanagarbbc@gmail.com' , 'Tournament Entry Team Information' , $msg);
	header( 'Location: http://vijaynagarbbc.com/contact.php' ) ;
?>
