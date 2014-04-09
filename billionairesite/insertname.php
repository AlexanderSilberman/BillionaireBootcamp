	<?php
		
	        	
	$dbconnection = mysql_connect("localhost", "root", "root");  
            	
	if (!$dbconnection) {
		 	 	echo "There was a PROBLEM! Error: " . mysql_error();
		 	exit();
	}  
            	
	mysql_select_db("billionaire_bootcamp", $dbconnection); 
     
	$name = $_REQUEST["playername"];
	        	
	$thesql = "INSERT INTO user (nickname) 
				VALUES ('$name');
				
	";
	
	$endscore = $_REQUEST["finalscore"];
	
	$thesqltwo = "INSERT INTO user_scores (game_id, score) 
	VALUES (2, $endscore)";
		
	echo "The SQL was" . $thesql;
            	
	$results = mysql_query($thesql);
            	
	if (!$results) {
		 		echo "THERE was a PROBLEM! Error: " . mysql_error();
		 	exit();
	}    
	
	
	$resultstwo = mysql_query($thesqltwo);
            	
	if (!$resultstwo) {
		 		echo "THERE was a PROBLEM! Error: " . mysql_error();
		 	exit();
	}    
	        	
	?>
	
	This is the insert page.
	
	
	<a href = "billionairetrivia.php"><input type = "button" value = "Play Again!"></input>