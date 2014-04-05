        var correctOption = '';
        var gameStatus = '';

        var questions = []; var realans = []; var fakeans1 = []; var fakeans2 = [];var fakeans3 = [];
        questions[0] = "this is a questions0"; 				realans[0] = "the answer0";       fakeans1[0] = "wrong0";   fakeans2[0] = "no0";    fakeans3[0] = "nope0";
        questions[1] = "this is another question2";         realans[1] = "the answer for 2";  fakeans1[1] = "bad2";     fakeans2[1] = "naw2";   fakeans3[1] = "bad2";
        questions[2] = "this is yet another question3";     realans[2] = "the answer for 3";  fakeans1[2] = "nope3";    fakeans2[2] = "no3";    fakeans3[2] = ":(3";
        questions[3] = "and again yet another question";    realans[3] = "the answer for 4";  fakeans1[3] = "wrong4";   fakeans2[3] = "wrong4"; fakeans3[3] = "wrong4";
        questions[4] = "and again yet another question5";   realans[4] = "the answer for 5";  fakeans1[4] = "wrong5";   fakeans2[4] = "wrong5"; fakeans3[4] = "wrong5";


        //array of other arrays
        var anstype = [realans,fakeans1,fakeans2,fakeans3];
        

        //creates array of random unique numbers = to the # of questions
        var randarrq = [];
        while(randarrq.length < questions.length){
            var randomnumber=Math.floor(Math.random() * questions.length)
            var found=false;
            for(var i=0;i<randarrq.length;i++){
                if(randarrq[i]==randomnumber){
                found=true;break
                }
            }
            if(!found)randarrq[randarrq.length]=randomnumber;
        }

        //creates array of unique random numbers through 4
        var randarra = [];
        var randanswer = function(){
            while(randarra.length < 4){
                var randnum=Math.floor(Math.random()*4)
                var found=false;
                for(var i=0;i<randarra.length;i++){
                    if(randarra[i]==randnum){
                        found=true;break
                    }
                }
                if(!found)randarra[randarra.length]=randnum;
            }
        }

        var questnum = -1;
		
	    var mainSeconds = 100;
	    //start time - enter 300 for 30 seconds, enter 450 for 45 seconds, etc;
	    var seconds = mainSeconds;
		
	    
	    var score = 0;
	    var rightOrWrong = '';

	    
	    function answered (optionClicked) {
  	        checkAnswer(optionClicked);
  	        updateScore();
            disableButtons();
            enableButtonsAfterDelay();
  	       
  	    }

	    function checkAnswer(optionClicked) {
	        if (optionClicked == correctOption) {
	            rightOrWrong = 'right';
	        } else {
	            rightOrWrong = 'wrong';
	        }
	    }

	    function updateScore () {
	        if (rightOrWrong == 'right') {
	            score += seconds;
                console.log("Current score = " + score);
                document.getElementById("totalscore").innerHTML = "Score = " + score;
	        }
	    }

        function disableButtons () {
            document.getElementById("a1").disabled=true;
            document.getElementById("a2").disabled=true;
            document.getElementById("a3").disabled=true;
            document.getElementById("a4").disabled=true;
        }

        function enableButtonsAfterDelay() {
            setTimeout(function() {
                document.getElementById("a1").disabled=false;
                document.getElementById("a2").disabled=false;
                document.getElementById("a3").disabled=false;
                document.getElementById("a4").disabled=false;
            }, 1000);
        }

	    function resetTimer() {

	        clearInterval(countdownTimer);

	        if (gameStatus == 'running') {
	            //execute the function 'startTimer' after the given delay
	            setTimeout(function(){startTimer()},1000);
	        } else if (gameStatus == 'over') {
	            hideTimer();
	        }

	    }

	    function startTimer () {
	        seconds = mainSeconds;
	        countdownTimer = setInterval('secondPassed()', 100);
	    }

	    function hideTimer () {
	        seconds = mainSeconds;
	        document.getElementById('countdown').innerHTML  = '';
			clearInterval(countdownTimer);
	    }
		
        $(document).ready(function(){

            $("#quizspace").hide();
            $(".result").hide();
            $("#timer").hide();
            $("#gameover").hide();

           

            //function that creates new question plus answers
            var newquestion = function(){
	            randarra = [];
	            randanswer();
	            questnum = questnum + 1;
	            realquestnum = questnum + 1;
                $("#quizspace").fadeOut(100, function(){

                //runs code as long as there is another question in the array, otherwise ends game
                    if(realquestnum <= questions.length){
                        $("#question").html(realquestnum + ". " + questions[randarrq[questnum]]);
                        $("#a1").html(anstype[randarra[0]][randarrq[questnum]]);
                        $("#a2").html(anstype[randarra[1]][randarrq[questnum]]);
                        $("#a3").html(anstype[randarra[2]][randarrq[questnum]]);
                        $("#a4").html(anstype[randarra[3]][randarrq[questnum]]);
                        $(".result").html(anstype[randarra[3]][randarrq[questnum]]);

                        //checks position of correct answer to display correct response
                        if(randarra[0]== 0){
                            $("#check1").html("!");
                            correctOption = 1;
                        } else {
                            $("#check1").html("X");
                        };

                        if(randarra[1]== 0){
                            $("#check2").html("!");
                            correctOption = 2;
                        } else {
                            $("#check2").html("X");
                        };

                        if(randarra[2]== 0){
                            $("#check3").html("!");
                            correctOption = 3;
                        } else {
                            $("#check3").html("X");
                        };

                        if(randarra[3]== 0){
                            $("#check4").html("!");
                            correctOption = 4;
                        } else {
                            $("#check4").html("X");
                        };

                        $("#quizspace").fadeIn(100);

                        gameStatus = 'running';

                    } else {
                        $("#gameover").fadeIn(500);
						$("#timer").hide();
                        gameStatus = 'over';
                        resetTimer();
                    }
					
					

                });
            };


            //user actions
            $("#start").on("click",newquestion);

            $("#start").on("click",function(){
                $("#start").fadeOut(500);
                $("#timer").fadeIn(100);
            });
			
            $("#start").on("click",function(){
			   
               
			     secondPassed = function() {

			        //converts our 'seconds' variable into minutes, although we're not using this value anywhere
			        //var minutes = Math.round((seconds - 300)/600);

			        //converts our 'seconds' variable into actual remaining seconds
			        var remainingSeconds = Math.floor((seconds/10) % 60);

			        //converts our 'seconds' variable into actual remaining seconds
			        var remainingMilli = Math.floor((seconds/1) % 6);

			        //this controls the actual display
			        document.getElementById('countdown').innerHTML = remainingSeconds + ":" + remainingMilli;

			        if (seconds != 0) {
			            seconds--;
			        } 
					
					else{
			            //time is up
						newquestion();
						resetTimer();
			        }
			    }
			    //countdown timer - this code is executed repeatedly. frequency depends on variable 'countdownTimer'
			    countdownTimer = setInterval('secondPassed()', 100);

			    

			    
            });
			

            $(".answer").on("click", function(){
                
                $(this).next().fadeIn(100).delay(500).fadeOut(500, newquestion);
				resetTimer();
            });
			

        });