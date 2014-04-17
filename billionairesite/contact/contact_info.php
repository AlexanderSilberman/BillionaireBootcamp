<?php
		
		$to = "ganeshsundar93@gmail.com";
		$fname = $_REQUEST['fname'];
		$lname = $_REQUEST['lname'];
		$email = $_REQUEST['email'];
		$subject = $_REQUEST['subject'];
		$message = $_REQUEST['message'];
		mail($to, $subject, $message, $email);
	        echo "Thanks for sending you feedback!";

	       
	


?>