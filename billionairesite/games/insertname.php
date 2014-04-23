	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Games</title>
<link rel="stylesheet" type="text/css" href="../stylesheet.css" />

         <?php
		 
		 	include '../includes/quizgamesql.php';
		 	include "../includes/navbar.php";
			
		 ?>

</head>

<body id = "game">


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
		
	        	
	$dbconnection = mysql_connect("72.167.233.50", "npnewweb", " NPn3ww3b!");  
            	
	if (!$dbconnection) {
		 	 	echo "There was a PROBLEM! Error: " . mysql_error();
		 	exit();
	}  
            	
	mysql_select_db("npnewweb", $dbconnection); 
     
	$name = $_REQUEST["playername"];
	        	
	
	$endscore = $_REQUEST["finalscore"];
	
	$thesqltwo = "INSERT INTO quiz_game_scores (user_name, score) 
	VALUES ('$name', $endscore)";
		  
	
	$resultstwo = mysql_query($thesqltwo);
            	
	if (!$resultstwo) {
		 		echo "THERE was a PROBLEM! Error: " . mysql_error();
		 	exit();
	}    
	        	
	?>
	
	
	<a href = "billionairetrivia.php"><input type = "button" value = "Play Again!" class="playagainbutton"></input>
</div>



    <br />
    
    <div id = "highscores">
		<?php
		
		
		$i = 0;
		$count = 1;
		$colors = array('scorerow','scorerow green');
		
		echo "<strong><div class = 'scorerow white'><div class = 'count'>Rank</div><div class = 'nickname'> Name </div><div class = 'score'>Score</div><div class = 'timestamp'>Date</div></div></strong><br/><br/>";
		
		while ($row = mysql_fetch_array($results)){
			echo "<div class = '" . $colors[$i++ % 2] . "'><div class = 'count'>". $count++ . ".</div><div class = 'nickname'> ". $row["user_name"] .  "</div><div class = 'score'>" . $row["score"] . "</div><div class = 'timestamp'>" . date('m/j/y ',strtotime($row["score_time"])) . "</div></div><br/>";
			
		}
		
		
		?>
		
		
	 	<?php

	 	    
			$highscorelim = mysql_result($results, 9);

	 	?>
	 	<script>
	     var highscorelimit =  <? echo $highscorelim ?>

	    console.log(highscorelimit);
	 	</script>
		
</div>
    
</div>	
	
</div>

</div>

    <div style="clear:both" > </div>

<div id="footer">

    <div id="bottom">
    	<a href="http://www.nataliepace.com" id="footerlefttext">NataliePace.com</a>
        <span id="footerrightttext">� Billionaire Bootcamp</span>
    </div>
    
</div>

<script src = "quizup.js"></script>
</body>
</html>