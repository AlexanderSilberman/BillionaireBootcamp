	<?php 
	
	$dbconnection = mysql_connect("72.167.233.50", "npnewweb", " NPn3ww3b!");  

	if (!$dbconnection) {
   	 	echo "There was a PROBLEM! Error: " . mysql_error();
    exit();
	}  

	mysql_select_db("npnewweb", $dbconnection); 

	$thesql = "SELECT quiz_game_scores.score, quiz_game_scores.user_name, score_time 
				FROM quiz_game_scores
		 		-- WHERE user.user_id = user_scores.user_id
-- 				AND user_scores.game_id = 2
				ORDER BY quiz_game_scores.score DESC
				LIMIT 0,10";
				

	$results = mysql_query($thesql);

	if (!$results) {
    	echo "THERE was a PROBLEM! Error: " . mysql_error();
    exit();
	}    
	
	?>