
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Billionaire Bootcamp</title>

	<?php
		
	include 'includes/quizgamesql.php';
		
	?>
<link rel="stylesheet" type="text/css" href="stylesheet.css" />
<link rel="stylesheet" type="text/css" href="../quiz-game-prototype/quizup.css" />

    <!-- Link your jQuery Library first -->
    <script src="../quiz-game-prototype/jquery-2.0.3.min.js"></script>
	
	
	
	

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

    <div id="navigation">
      
         <div id="menubox">
    <div id="menu">
    	<ul>
        	<li>  <a href="homepage.html" class="narrow">  Home  </a>  </li>
            <li>  <a href="games.html" class="selected"> Games </a>  
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
            <li> <a href="contact.html" class="narrow">  Contact </a> </li>
                
        </ul>
    <br style="clear:both" />
    </div> 


</div>  <!-- end of menu -->
</div> <!-- end of menubox -->
	</div> 
     




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


    <div id="gamepagetitle"> Billionaire Trivia</div>
    
    <div style ="clear:both;"> </div>
    
	<div id = "quizbox">
		<div id = "start">click here start</div	>
		<div id = "timer"><span id="countdown" class="timer"></span></div>
		<div id = "quizspace">
			<div id = "question"></div>
			<button id ="a1" class = "answer" onclick="answered(1)" ></button><div id = "check1" class ="result"></div>
			<button id ="a2" class = "answer" onclick="answered(2)" ></button><div id = "check2" class ="result"></div>
			<button id ="a3" class = "answer" onclick="answered(3)"></button><div id = "check3" class ="result"></div>
			<button id ="a4" class = "answer" onclick="answered(4)"></button><div id = "check4" class ="result"></div>

		</div>
		<div id = "gameover">Game Over

			<div class = "totalscore"></div>
		</div>
		
		<div id = "gameoverwin">Game Over

			<div class = "totalscore"></div>
			<br/>
				<form action = "insertname.php">
					<input type = "text" placeholder = "input your name" name = "playername"></input>
					<input type = "submit" value = "Submit Your Score!">
					<input id = "finalscore" type = "hidden" name = "finalscore"></input>
				</form>
			
			
				
				
			
			
		</div>

	</div>
    
    <div class="gameinstructions">
  	<br /> <strong>Instructions:</strong> Answer the maximum amount of finance questions in the shortest amount of time to get the highest score!

	
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
			echo "<div class = '" . $colors[$i++ % 2] . "'><div class = 'count'>". $count++ . ".</div><div class = 'nickname'> ". $row["user_name"] .  "</div><div class = 'score'>" . $row["score"] . "</div><div class = 'timestamp'>" . $row["score_time"] . "</div></div><br/>";
			
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



<div style="display: block; font-family: Verdana, Geneva, Arial; font-size: 10px">
The University of Southern California does not screen or control the content on this website and thus does not guarantee the accuracy, integrity, or quality of such content.  All content on this website is provided by and is the sole responsibility of the person from which such content originated, and such content does not necessarily reflect the opinions of the University administration or the Board of Trustees
</div>


<script src = "../quiz-game-prototype/quizup.js"></script>
</body>
</html>
