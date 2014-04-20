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
		

<div id = "outercontainer">


<br style = "clear:both;"/>
<aside id = "sidebar">
<div id="companyresearch"> 
    
    	<p> <h2>Company Research </h2></p>
    <p id="sidebartext"> Search Any Company's Stock Quote!</p>
    	<input type= "text" placeholder="e.g. AAPL" />
    	<input type="submit" value="Research" class="submitbutton" />
    
    	<br />
    	
   		</div>
    
    <br style ="clear:both;"/>
    <br />
    <span id="asknatalie">Ask Natalie:</span>
	<div id="twitter"> 
    
    	<a class="twitter-timeline" href="https://twitter.com/NataliePace" data-widget-id="442425881982533632">Tweets by @NataliePace</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>


        
    </div>  
</aside>


<div id="main">

	<p id="contact"> 
    Have a question or comment? We would love to hear it! 
   	<br />
    Please fill out the form below with your information or your message. 
    </p>
    <br />

    <?php
    
// define variables and set to empty values
$fnameErr = $lnameErr = $emailErr = $subjectErr = $messageErr = "";
$fname = $lname = $email = $subject = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
   if (empty($_POST["fname"]))
     {$fnameErr = "First name is required";}
   else
     {
     $fname = test_input($_POST["fname"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$fname))
       {
       $fnameErr = "Only letters and white space allowed"; 
       }
     }
     
     if (empty($_POST["lname"]))
     {$lnameErr = "Last name is required";}
   else
     {
     $lname = test_input($_POST["lname"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$lname))
       {
       $lnameErr = "Only letters and white space allowed"; 
       }
     }
   
   if (empty($_POST["email"]))
     {$emailErr = "Email is required";}
   else
     {
     $email = test_input($_POST["email"]);
     // check if e-mail address syntax is valid
     if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))
       {
       $emailErr = "Invalid email format"; 
       }
     }
     
   if (empty($_POST["subject"]))
     {$subjectErr = "Subject is required";}
   else
     {
     $subject = test_input($_POST["subject"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$subject))
       {
       $subjectErr = "Only letters and white space allowed"; 
       }
     }
     
   if (empty($_POST["message"]))
     {$messageErr = "Message is required";}
   else
     {
     $message = test_input($_POST["message"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$message))
       {
       $messageErr = "Only letters and white space allowed"; 
       }
     }
}

     function test_input($data)
     {
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
}
     
    ?>


	<form id="contactinfo" action="contact_info.php" method="post">
    <label> First Name </label>
    	<input id="fname" type="text" placeholder= "John" name="fname" autofocus="autofocus" />
	<span class="error">* <?php echo $fnameErr;?></span><br />
    <label> Last Name </label>
    	<input id="lname" type="text" placeholder="Smith" name="lname"  />
	<span class="error">* <?php echo $lnameErr;?></span><br />
    <label> Email Address </label>
    	<input id="email"  type="email" placeholder="john.smith@gmail.com" name="email" />
	<span class="error">* <?php echo $emailErr;?></span> <br />
    <label> Message Subject </label>
    	<input id="subject"  type="text" placeholder="Where can I find more about your books?" name="subject" size="40"/>
	<span class="error">* <?php echo $subjectErr;?></span> <br />
    <label> Your Message </label>
    	<textarea placeholder="Message content" id="message"  name="message" style="width:300px; height:200px;"></textarea>
	<span class="error">* <?php echo $messageErr;?></span> <br /> <br />

    <input type="Submit" id="submitbutton" name="Submit" class = "submitbutton" value = "Submit" style="margin-left:400px;"/>
    </form>
		
		

</div>

</div>
    <div style="clear:both" /> </div>

<div id="footer">

    <div id="bottom">
    	<a href="http://www.nataliepace.com" id="footerlefttext">NataliePace.com</a>
        <span id="footerrightttext"> &copy; Billionaire Bootcamp</span>
    </div>
    
</div>




</body>
</html>