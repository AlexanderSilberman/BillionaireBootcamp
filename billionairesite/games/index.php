
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

<?php include "../includes/sidebar.php"; ?>



<div id="main">

    <div id="thrivebudgettitle"> Thrive Budget Game</div>
    <div id="billionairetitle"> Leader Boards</div>
    
    <div style ="clear:both;"/> </div>
    
	<div id="thrivebudget"> 
    <a href="/nataliepacenew/billionairesite/games/thrivebudget.php"><img src="../images/thrivebudgetgame.png" class="gameplaceholderimage" /></a>
    </div>
	
    <div style="clear:both" /> </div>

    <table id="thriveleaderboard"> 
    	<tr>
              <th>Rank</th>
              <th>Last Name</th> 
              <th>Points</th>
              <th>Date</th>
		</tr>
        
    	<tr>
        	<td class="tablerank">1</td>
            <td>jsmith</td>
            <td>100 pts</td>
			<td>3/10/14</td>
        </tr>
        
        <tr>
        	<td class="tablerank">2</td>
            <td>jsmith</td>
            <td>97 pts</td>
			<td>3/10/14</td>
        </tr>
        
        	<tr>
        	<td class="tablerank">3</td>
            <td>jsmith</td>
            <td>95 pts</td>
			<td>3/10/14</td>
        </tr>
        
        <tr>
        	<td class="tablerank">4</td>
            <td>jsmith</td>
            <td>90 pts</td>
			<td>3/10/14</td>
        </tr>
        
          <tr>
        	<td class="tablerank">5</td>
            <td>jsmith</td>
            <td>85 pts</td>
			<td>3/10/14</td>
        </tr>
        
          <tr>
        	<td class="tablerank">6</td>
            <td>jsmith</td>
            <td>80 pts</td>
			<td>3/10/14</td>
        </tr>
        
           <tr>
        	<td class="tablerank">7</td>
            <td>jsmith</td>
            <td>75 pts</td>
			<td>3/10/14</td>
        </tr>
        
        <tr>
        	<td class="tablerank">8</td>
            <td>jsmith</td>
            <td>75 pts</td>
			<td>3/10/14</td>
        </tr>
        
        <tr>
        	<td class="tablerank">9</td>
            <td>jsmith</td>
            <td>75 pts</td>
			<td>3/10/14</td>
        </tr>
        
        <tr>
        	<td class="tablerank">10</td>
            <td>jsmith</td>
            <td>75 pts</td>
			<td>3/10/14</td>
        </tr>
        
    </table>
	
    <br />
    
    <div id="popularcontenttitle"> Billionaire Trivia</div>
    <div id="billionairetitle"> Leader Boards</div>
    <div style="clear:both" /> </div>
    
    <div id="thrivebudget"> 
   <a href="/nataliepacenew/billionairesite/games/billionairetrivia.php">	<img src="../images/triviagame.png" class="gameplaceholderimage" /></a>

    </div>
    
	<div id = "trivialeaderboard">
	<?php
	
	
	$i = 0;
	$count = 1;
	$colors = array('scorerow1','scorerow1 green');
	
	echo "<strong><div class = 'scorerow1 white'><div class = 'count1'>Rank</div><div class = 'nickname1'> Name </div><div class = 'score1'>Score</div><div class = 'timestamp1'>Date</div></div></strong><br/>";
	
	while ($row = mysql_fetch_array($results)){
		echo "<div class = '" . $colors[$i++ % 2] . "'><div class = 'count1'>". $count++ . ".</div><div class = 'nickname1'> ". $row["user_name"] .  "</div><div class = 'score1'>" . $row["score"] . "</div><div class = 'timestamp1'>" . date('m/j/y ',strtotime($row["score_time"])) . "</div></div><br/>";
		
	}
	

	?>
	
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




</body>
</html>
