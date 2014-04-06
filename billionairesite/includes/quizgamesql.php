	<?php 
	
	$dbconnection = mysql_connect("localhost", "root", "root");  

	if (!$dbconnection) {
   	 	echo "There was a PROBLEM! Error: " . mysql_error();
    exit();
	}  

	mysql_select_db("billionaire_bootcamp", $dbconnection); 

	$thesql = "SELECT user_scores.score, user.nickname, timestamp  
				FROM user_scores, user
		 		WHERE user.user_id = user_scores.user_id
				AND user_scores.game_id = 2
				ORDER BY score DESC
				LIMIT 0,10";
				

	$results = mysql_query($thesql);

	if (!$results) {
    	echo "THERE was a PROBLEM! Error: " . mysql_error();
    exit();
	}    
	
	?>