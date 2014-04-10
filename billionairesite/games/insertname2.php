<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Billionaire Bootcamp</title>
<link rel="stylesheet" type="text/css" href="stylesheet.css" />

</head>

<body id = "home">



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

    	<?php
		
	        	
	$dbconnection = mysql_connect("localhost", "root", "root");  
            	
	if (!$dbconnection) {
		 	 	echo "There was a PROBLEM! Error: " . mysql_error();
		 	exit();
	}  
            	
	mysql_select_db("billionaire_bootcamp", $dbconnection); 
     
	$name = $_REQUEST["playername"];
	        	
	
	$endscore = $_REQUEST["finalscore"];
	
	$thesqltwo = "INSERT INTO quiz_game_scores (user_name, score) 
	VALUES ('$name', $endscore)";
		
	echo "The SQL was" . $thesqltwo;
  
	
	
	$resultstwo = mysql_query($thesqltwo);
            	
	if (!$resultstwo) {
		 		echo "THERE was a PROBLEM! Error: " . mysql_error();
		 	exit();
	}    
	        	
	?>
	
	This is the insert page.
	
	
	<a href = "billionairetrivia.php"><input type = "button" value = "Play Again!"></input>

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
