<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact</title>
<link rel="stylesheet" type="text/css" href="../stylesheet.css" />

         <?php
		 	include "../includes/navbar.php";
		 ?>

</head>

<body id = "contact">
<?php include_once("../includes/analyticstracking.php") ?>	
	<script>
	
	function validateFormOnSubmit(){
	       var reason = "";
	       
	       reason += validateFname();
	       reason += validateLname();
	       reason += validateEmail();
	       reason += validateSubject();
	       reason += validateMessage();
	
	       if (reason != "") {
			      alert('Some fields need to be corrected:\n' + reason);
			      return false;
	       }
	       
	       return true;
	}
	
	function validateFname() {
	       var fname = document.getElementById('fname').value;
	       if (fname == "") {
	       return('Please enter a first name.\n');
	       }
	       return("");
	}
	
	function validateLname() {
	       var lname = document.getElementById('lname').value;
	       if (lname=="") {
	       return('Please enter a last name.\n' );
	       }
	       return("");
	}
	
	function validateEmail() {
	       var email = document.getElementById('email').value;
	       var atpos=email.indexOf("@");
	       var dotpos=email.lastIndexOf(".");
	       if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length)
		 {
		 return("Please enter a valid e-mail address.\n" );
		 }
	       return("");
	}
	
	function validateSubject() {
	       var subject = document.getElementById('subject').value;
	       if (subject=="") {
	       return('Please enter the subject.\n' );
	       }
	       return("");
	}
	
	function validateMessage() {
	       var message = document.getElementById('message').value;
	       if (message=="") {
	       return('Please enter a message.\n' );
	       }
	       return("");
	}
	
	</script>
	

<div id = "outercontainer">


<br style = "clear:both;"/>

<?php include "../includes/sidebar.php"; ?>


<div id="main">

	<p id="contact"> 
    Have a question or comment? We would love to hear it! 
   	<br />
    Please fill out the form below with your information or your message. 
    <br />
    <strong>*All fields are required.</strong>
	</p>
	
    <br />
    
    	<?php
	if (!isset($_POST['Submit'])){
	?>

	<form id="contactinfo" action="" method="post" onsubmit="return validateFormOnSubmit(this)">
    <label id="firstname"> First Name </label>
    	<input id="fname" type="text" placeholder= "John" name="firstname" onblur="validateFname()" autofocus="autofocus" /> <br />
    <label> Last Name </label>
    	<input id="lname" type="text" placeholder="Smith" name="lastname"  /> <br />
    <label> Email Address </label>
    	<input id="email" type="email" placeholder="john.smith@gmail.com" name="email" /> <br />
    <label> Message Subject </label>
    	<input id="subject" type="text" placeholder="Where can I find more about your books?" name="subject" size="40"/> <br />
    <label> Your Message </label>
    	<textarea placeholder="Message content" id="message" name="message" style="width:300px; height:200px;"></textarea> <br /> <br />
    
    <input type="Submit" name="Submit" class = "submitbutton" value = "Submit" style="margin-left:400px;"/>
    </form>
<?php
	} else {
		if (isset($_POST['Submit'])){
		
		$to = "ganeshsundar93@gmail.com";
		$fname = $_REQUEST['fname'];
		$lname = $_REQUEST['lname'];
		$email = $_REQUEST['email'];
		$subject = $_REQUEST['subject'];
		$message = $_REQUEST['message'];
		mail($to, $subject, $message, $email);
		
		echo "Thanks for sending you feedback!";
		}
	}
?>
		
	
	
		
		

</div>

</div>
    <div style="clear:both" /> </div>

<div id="footer">

    <div id="bottom">
    	<a href="http://www.nataliepace.com" id="footerlefttext">NataliePace.com</a>
        <span id="footerrightttext">© Billionaire Bootcamp</span>
    </div>
    
</div>




</body>
</html>