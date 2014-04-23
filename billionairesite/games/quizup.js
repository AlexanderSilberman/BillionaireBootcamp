var correctOption = '';
        var gameStatus = '';
		
        var questions = []; var realans = []; var fakeans1 = []; var fakeans2 = [];var fakeans3 = [];
		questions[0] = "What is the one question you should ask your Certified Financial Advisor before hiring him/her?"; 
		realans[0] = "How much of my portfolio should be in stocks?";
		fakeans1[0] = "Which level of the CFA Exam have you passed?";   
		fakeans2[0] = "Can you pitch me a stock?";    
		fakeans3[0] = "What is your fee?";
        
		questions[1] = "How much of your nest egg should you keep safe?";
		realans[1] = "A percentage equal to your age ";
		fakeans1[1] = "A percentage twice your age";
		fakeans2[1] = "A percentage half your age";
		fakeans3[1] = "100%";

		questions[2] = "What's safe?";
		realans[2] = "Bonds";
		fakeans1[2] = "Corporate debt";
		fakeans2[2] = "CMBS loans";
		fakeans3[2] = "Municipals";

		questions[3] = "What is the average return of stocks over the last 10 and 30 years?";
		realans[3] = "7.41% over the last 10 and 11.09% over the last 30";
		fakeans1[3] = "50.00% over the last 10 and 90.00% over the last 30";
		fakeans2[3] = "32.65% over the last 10 and 41.20% over the last 30";
		fakeans3[3] = "9.63% over the last 10 and 23.56% over the last 30";

		questions[4] = "What is the average return of gold over the last 10 and 30 years?";
		realans[4] = "11.09% over the last 10 and 3.84% over the last 30";
		fakeans1[4] = "3.32% over the last 10 and 19.63% over the last 30";
		fakeans2[4] = "9.63% over the last 10 and 6.69% over the last 30";
		fakeans3[4] = "7.41% over the last 10 and 9.97% over the last 30";
		
		questions[5] = "What is the average return of real estate over the last 30 years?";
		realans[5] = "5.74%";
		fakeans1[5] = "9.97%";
		fakeans2[5] = "6.69%";
		fakeans3[5] = "2.10%";

		questions[6] = "What is the top performing investment, so far, in 2013?";
		realans[6] = "NASDAQ";
		fakeans1[6] = "Real estate";
		fakeans2[6] = "Gold";
		fakeans3[6] = "Dow Jones";

		questions[7] = "What percentage of your monthly income should you spend on housing?";
		realans[7] = "33%";
		fakeans1[7] = "50%";
		fakeans2[7] = "20%";
		fakeans3[7] = "75%";

		questions[8] = "How long will it take for your nest egg to earn more than you if you put away 10% of your income annually?";
		realans[8] = "25 years";
		fakeans1[8] = "50 years";
		fakeans2[8] = "75 years";
		fakeans3[8] = "100 years";

		questions[9] = "What's the better investment strategy in a slow-growth, high-debt world?";
		realans[9] = "Modern Portfolio Theory";
		fakeans1[9] = "Buy & Hold";
		fakeans2[9] = "Value Investing";
		fakeans3[9] = "Dividend Investing";

		questions[10] = "Which countries hold the most gold?";
		realans[10] = "US";
		fakeans1[10] = "Germany";
		fakeans2[10] = "China";
		fakeans3[10] = "Italy";

		questions[11] = "How long did gold remain over $800/ounce in 1980?";
		realans[11] = "2 days";
		fakeans1[11] = "2 months";
		fakeans2[11] = "2 weeks";
		fakeans3[11] = "2 years";

		questions[12] = "What is not part of the Four Questions for Picking Winning Stocks?";
		realans[12] = "How big is the company?";
		fakeans1[12] = "What is the product?";
		fakeans2[12] = "Who is the customer?";
		fakeans3[12] = "Who's the CEO and can s/he motivate the employees to make the best product faster and cheaper than the competition?";


		questions[13] = "What is not part of the 3-Ingredient Recipe for Cooking up Profits?";
		realans[13] = "Pick a follower";
		fakeans1[13] = "Start with what you know and love";
		fakeans2[13] = "Pick the leader";
		fakeans3[13] = "Buy low, sell high (easy to say, hard to do)";

		questions[14] = "What is the top performing month for stocks over the past 5 years?";
		realans[14] = "April";
		fakeans1[14] = "January";
		fakeans2[14] = "June";
		fakeans3[14] = "July";

		questions[15] = "What  is the worst month for stocks over the past five years?";
		realans[15] = "June";
		fakeans1[15] = "January";
		fakeans2[15] = "March";
		fakeans3[15] = "December";

		questions[16] = "What was the top performing 2-month period for stocks over the past five years?";
		realans[16] = "March-April";
		fakeans1[16] = "January-February";
		fakeans2[16] = "August-September";
		fakeans3[16] = "November-December";

		questions[17] = "Which year is expected to perform better, based upon historical returns of election years?";
		realans[17] = "2015";
		fakeans1[17] = "2012";
		fakeans2[17] = "2014";
		fakeans3[17] = "2013";

		questions[18] = "How many companies are in the Dow Jones Industrial Average?";
		realans[18] = "30";
		fakeans1[18] = "10";
		fakeans2[18] = "20";
		fakeans3[18] = "40";

		questions[18] = "How many Dow Jones Industrial Average companies were bailed out or went bankrupt in the Great Recession?";
		realans[18] = "6";
		fakeans1[18] = "5";
		fakeans2[18] = "7";
		fakeans3[18] = "8";


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
			        var remainingMilli = Math.floor((seconds/1) % 10);

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
		
		
		//validates the submission of username
		var validate = function(){
			var thename = document.getElementsByTagName('input')[3].value;
			if(thename == ""){
				alert("Please write your name!");
				return false;
			}else if(thename.length >=16){
				alert("Uh oh, your name is too long! Please make sure that your name is 15 characters or less!")
				return false
			}else if (/^[a-zA-Z0-9]*$/.test(thename) == false){
				alert("You can only use letters and numbers!");
				return false;
			};
		}