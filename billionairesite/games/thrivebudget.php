
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Billionaire Bootcamp</title>
<link rel="stylesheet" type="text/css" href="../stylesheet.css" />

         <?php
		 	include "../includes/navbar.php";
		 ?>

</head>

<body id = "game">
<?php include_once("../includes/analyticstracking.php") ?>	

<div id = "outercontainer">
	

<br style = "clear:both;"/>

<?php include "../includes/sidebar.php"; ?>





<div id="main">

    <div id="gamepagetitle"> Thrive Budget Game</div>
    
    <div style ="clear:both;"/> </div>
    
	<canvas class="gamepagegamecontainer" id="canvascontainer"> 
    	Your browser does not support canvas. Please try again with a different browser.
    </canvas>
    
    <div class="gameinstructions">
  <br /> <strong>Financial Instructions:</strong> The basic breakdown of a “Double Your Fun” budget is 50 percent to Thrive and 50 percent to Survive.  The object of the game is to find the best way to allocate your earnings across the various spending buckets.  The better you allocate, the higher your score! 
<br /><br />
<span style="text-align:left;">
1. 10 percent to investing
<br /><br />
2. 10 percent to charity 
<br /><br />
3. 10 percent to education
<br /><br /> 
4. 20 percent spent on fun. (Half on immediate fun, like movies, fashion and dinners out, the other half on something you’ll have to save up for, like vacations, Jacuzzis, boats, etc.) 
<br /><br />
5. 50 percent for all your basic needs (including taxes, housing, food, clothing, etc.)
<br /><br /></span>
<strong>Game Instructions: </strong>Move Player - Arrow Keys.
<br />Interact - Spacebar.
<br />Exit Menus - ESC.
<strong><br />Manage your cash, stress, and health.</strong>

	
    <div style="clear:both" /> </div>
    <br />
    

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


<script src="game.js"></script>

</body>
</html>
