
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Games - Billionaire Quiz</title>

	<?php
		
	include '../includes/quizgamesql.php';
	include '../includes/navbar.php';
		
	?>
<link rel="stylesheet" type="text/css" href="../stylesheet.css" />
<link rel="stylesheet" type="text/css" href="quizup.css" />

    <!-- Link your jQuery Library first -->
    <script src="jquery-2.0.3.min.js"></script>
	
	
	
	

</head>

<body id = "game">
	



<div id = "outercontainer">
	

<br style = "clear:both;"/>
	<?php
	include 'sidebar.php';
	?>


<div id="main">


    <div id="gamepagetitle"> Billionaire Trivia</div>
    
    <div style ="clear:both;"> </div>
    
	<div id = "quizbox">
		<div id = "quizlayer">
		<br /> <br />
			<div id = "startscreen">
			<div id= "billionairetriviatitle"> BILLIONAIRE TRIVIA </div>
			<br />
			<div id = "billionairetriviainst"> Correctly answer as many questions as you can before the timer goes off!  </div>
			<br /> <br />
			<div id = "start">Click here start</div	>
		</div>
		<div id = "timer"><span id="countdown"></span></div>
		<div id = "quizspace">
			<div id = "question"></div>
			<button id ="a1" class = "answer" onclick="answered(1)" ></button><div id = "check1" class ="result"></div>
			<button id ="a2" class = "answer" onclick="answered(2)" ></button><div id = "check2" class ="result"></div>
			<button id ="a3" class = "answer" onclick="answered(3)"></button><div id = "check3" class ="result"></div>
			<button id ="a4" class = "answer" onclick="answered(4)"></button><div id = "check4" class ="result"></div>

		</div>
		<div id = "gameover">Game Over

			<div class = "totalscore">
				Your total score is 
			</div>
			<div>
				<a href = "billionairetrivia.php"><input type = "button" value = "Play Again!"></input></a>
			</div>
			
		</div>
		
		<div id = "gameoverwin">Game Over!

			<div class = "totalscore">
				
			</div>
			<br/>
				<form onsubmit = "return (validate())" action = "insertname.php">
					<input type = "text" placeholder = "Input your name" name = "playername" autofocus></input>
					<input type = "submit" value = "Submit Your Score!">
					<input id = "finalscore" type = "hidden" name = "finalscore"></input>
				</form>
			
			
				
				
			
			
		</div>
		</div>
	</div>
    
    <div class="gameinstructions">
  	<br /> <strong>Instructions:</strong> Once the game starts a question will appear with four choices. Click on the option you think is right before the 10 second timer runs out. Answer the maximum amount of finance questions in the shortest amount of time to get the highest score!

	
    <div style="clear:both"> </div>
    <br />
    
	
	</div>
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




    <div style="clear:both" > </div>

<div id="footer">

    <div id="bottom">
    	<a href="http://www.nataliepace.com" id="footerlefttext">NataliePace.com</a>
        <span id="footerrightttext">© Billionaire Bootcamp</span>
    </div>
    
</div>






<script src = "quizup.js"></script>
<script>
	
	
	
</script>
</body>
</html>
