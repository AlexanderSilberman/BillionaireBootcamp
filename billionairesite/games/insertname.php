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