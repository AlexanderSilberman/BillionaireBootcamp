


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Billionaire Bootcamp</title>
<link rel="stylesheet" type="text/css" href="stylesheet.css" />

</head>

<body>


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

         <?php
		 	include "includes/navbar.php";
		 ?>

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

    <div id="thrivebudgettitle"> Thrive Budget Game</div>
    <div id="billionairetitle"> Billionaire Trivia</div>
    
    <div style ="clear:both;"/> </div>
    
	<div id="thrivebudget"> 
    <a href="thrivebudget.html"><img src="thrivebudget.PNG" class="gameplaceholderimage" /></a>
    </div>
	
    <div style="clear:both" /> </div>

    <div id="billionairetrivia"> 
    <a href="billionairetrivia.html"><img src="billionairetrivia.jpeg" class="gameplaceholderimage" /></a>
    </div>
	
    <br />
    
    <div id="popularcontenttitle"> Popular Content</div>
    <div style="clear:both" /> </div>
    <div id="popularcontent"> 
    <div class="popularcontenttitle"><a href="student.html">Top 12 Investing Mistakes</a></div>
    <div class="popularcontentdescription">Find out what the most common mistakes people make when investing in stocks are from financial guru Natalie Pace.</div>
    </div>
    
    <div id="popularcontentright"> 
    <div class="popularcontenttitle"><a href="student.html">How to Cook Up Profits</a></div>
    <div class="popularcontentdescription">Learn about the best ways to guarantee your bottom line when investing in stocks.</div>
    </div>

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
