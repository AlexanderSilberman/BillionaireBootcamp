<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Billionaire Bootcamp</title>
<link rel="stylesheet" type="text/css" href="stylesheet.css" />

</head>

<body>
	
	<script>
	
	function checkInput(){
	var fname = document.getElementById('fname').value;
	var lname = document.getElementById('lname').value;
	var email = document.getElementById('email').value;
	var subject = document.getElementById('subject').value;
	var message = document.getElementById('message').value;
	
		if (fname == "" || lname == "" || email == "" || subject == "" || message == "") {
			alert('Please fill out all the fields');
		}
	}
	
	</script>
	

<div id="header">


	<div id="top">
	<img src="finallogo.png" style="float:left;" /> 

    <br /><br /><br />
    
    <form id="login">
    <input type="text" name="username" placeholder = "username" class = "login" autofocus />
    <input type="password" name="password" placeholder = "password" class = "login" />
    <input type="button" name="login" class = "submitbutton" value = "login" onclick="document.location='myaccount.html'">
     <input type="button" name="create" class = "submitbutton" value = "create account" onclick="document.location='createaccount.html'">    
    </form>

	</div>

	<br /><br />

    <div id="navigation">
      
         <div id="menubox">
    <div id="menu">
    	<ul>
        	<li>  <a href="homepage.html" class="narrow">  Home  </a>  </li>
            <li>  <a href="games.html"> Games </a>  
            	<ul> 
                	<li> <a href="thrivebudget.html"> Thrive Budget </a> </li>
                	<li> <a href="billionairetrivia.html"> Billionaire Trivia </a> </li>
                </ul>
            </li>
            
            <li>  <a href="student.html">  Student Resources </a>  
 				<ul>
                	<li> <a href="investing.html">  Investing Mistakes  </a> </li>
					<li> <a href="cookupprofits.html">  Cooking up Profits  </a> </li>
                </ul>	
            </li> 
            
            <li> <a href="teacher.html">  Teacher Resources </a> </li>
  			<li> <a href="about.html" class="narrow">  About </a> </li>
            <li> <a href="contact.html" class="narrow selected">  Contact </a> </li>
                
        </ul>
    <br style="clear:both" />
    </nav>
    </div> 


</div>  <!-- end of menu -->
</div> <!-- end of menubox -->
	</div> 
     

</div>


<div id = "outercontainer">


<br style = "clear:both;"/>
<aside id = "sidebar">
<div id="companyresearch"> 
    <script>
	function searchStock() {
	
	var stockTicker = document.getElementById('stockTicker').value;
	
	if (stockTicker != "") {
		var url = "http://investing.money.msn.com/investments/stock-price?Symbol=" + stockTicker + "&ocid=qbeb";
		var win = window.open(url, '_blank');
		win.focus;
	} else {
		alert('Please enter a stock ticker symbol.')
	}
	
	
	}
	
    </script>
    
    	<p> <h2>Company Research </h2></p>
    <p id="sidebartext"> Search Any Company's Stock Quote!</p>
    	<input type= "text" id="stockTicker" placeholder="e.g. AAPL" />
    	<input type="submit" value="Research" onclick="searchStock()" class="submitbutton" />
    
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
	if (!isset($_POST['Submit'])){
	?>

	<form id="contactinfo" action="" method="post">
    <label> First Name </label>
    	<input id="fname" type="text" placeholder= "John" name="firstname" onblur="checkInput()" autofocus="autofocus" /> <br />
    <label> Last Name </label>
    	<input id="lname" type="text" placeholder="Smith" name="lastname"  /> <br />
    <label> Email Address </label>
    	<input id="email" type="email" placeholder="john.smith@gmail.com" name="email" /> <br />
    <label> Message Subject </label>
    	<input id="subject" type="text" placeholder="Where can I find more about your books?" name="subject" size="40"/> <br />
    <label> Your Message </label>
    	<textarea placeholder="Message content" name="message" style="width:300px; height:200px;"></textarea> <br /> <br />
    
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



<div style="display: block; font-family: Verdana, Geneva, Arial; font-size: 10px">
The University of Southern California does not screen or control the content on this website and thus does not guarantee the accuracy, integrity, or quality of such content.  All content on this website is provided by and is the sole responsibility of the person from which such content originated, and such content does not necessarily reflect the opinions of the University administration or the Board of Trustees
</div>
</body>
</html>