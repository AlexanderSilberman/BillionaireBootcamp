var correctOption = '';
        var gameStatus = '';
		
        var questions = []; var realans = []; var fakeans1 = []; var fakeans2 = [];var fakeans3 = [];
       questions[0] = "What is the one question you should ask your Certified Financial Advisor before hiring him/her"; 				realans[0] = "How much of my portfolio should be in stocks";       fakeans1[0] = "Which Level of the CFA Exam have you passed?";   fakeans2[0] = "Can you pitch me a stock?";    fakeans3[0] = "What is your fee?v";
        questions[1] = "How much of your nest egg should you keep safe?";         realans[1] = "A percentage equal to your age ";  fakeans1[1] = "A percentage twice your age";     fakeans2[1] = "A percentage half your age";   fakeans3[1] = "100%";
        questions[2] = "What's safe?";     realans[2] = "Bonds";  fakeans1[2] = "Corporate debt";    fakeans2[2] = "CMBS loans";    fakeans3[2] = "Municipals";
        questions[3] = "What is the average return of stocks over the last 10 and 30 years?";    realans[3] = "7.41% over the last 10 and 11.09% over the last 30";  fakeans1[3] = "50.00% over the last 10 and 90.00% over the last 30";   fakeans2[3] = "32.65% over the last 10 and 41.20 % over the last 30"; fakeans3[3] = "9.63% over the last 10 and 23.56% over the last 30";
        questions[4] = "What is the average return of gold over the last 10 and 30 years?";   realans[4] = "11.09% over the last 10 and 3.84% over the last 30";  fakeans1[4] = "3.32% over the last 10 and 19.63% over the last 30";   fakeans2[4] = "9.63% over the last 10 and 6.69% over the last 30"; fakeans3[4] = "7.41% over the last 10 and 9.97% over the last 30";


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
                //document.getElementById("totalscore").innerHTML = "Score = " + score;
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
			$("#gameoverwin").hide();

           

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
                            $("#check1").html("&#10004;");
			    $("#check1").addClass("checkmark");
			    $("#check1").removeClass("result");
                            correctOption = 1;
                        } else {
                            $("#check1").html("X");
			    $("#check1").addClass("result");
			    $("#check1").removeClass("checkmark");
			    
                        };

                        if(randarra[1]== 0){
                            $("#check2").html("&#10004;");
			    $("#check2").addClass("checkmark");
			    $("#check2").removeClass("result");
                            correctOption = 2;
                        } else {
                            $("#check2").html("X");
			    $("#check2").addClass("result");
			    $("#check2").removeClass("checkmark");
                        };

                        if(randarra[2]== 0){
                            $("#check3").html("&#10004;");
			    $("#check3").addClass("checkmark");
			    $("#check3").removeClass("result");
                            correctOption = 3;
                        } else {
                            $("#check3").html("X");
			    $("#check3").addClass("result");
			    $("#check3").removeClass("checkmark");
                        };

                        if(randarra[3]== 0){
                            $("#check4").html("&#10004;");
			    $("#check4").addClass("checkmark");
			    $("#check4").removeClass("result");
                            correctOption = 4;
                        } else {
                            $("#check4").html("X");
			    $("#check4").addClass("result");
			    $("#check4").removeClass("checkmark");
                        };

                        $("#quizspace").fadeIn(100);

                        gameStatus = 'running';

                    } else {
                        
						$("#timer").hide();
                        gameStatus = 'over';
                        resetTimer();
						$(".totalscore").html(score);
						$("#finalscore").val(score);
					//checks end of game to make sure score is above certain score	
						if(score >= highscorelimit || highscorelimit == undefined){
							$("#gameoverwin").fadeIn(500);
						}else{
							$("#gameover").fadeIn(500);
						};
                    };
					
					

                });
            };


            //user actions
            $("#start").on("click",newquestion);

            $("#start").on("click",function(){
                $("#startscreen").fadeOut(100, function(){
		  $("#timer").fadeIn(500);
		  
		  });
                
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