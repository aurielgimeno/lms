	/* ---------------------- mga kelangan  na variable START --------------------------------------------------------------------*/
	var quizArray = [];

	var x = 0;//eto ung index na laging tatanggaling sa questionsArray[] , 0 kase laging unang index lang tatanggalen nten;
			var localStorageUsername = window.localStorage.getItem("username");//for checking if already login
			var localQuizArrayName = "quizLMS";// iba dapat kada game para sa function na storeQuizArrayToLocalStorage
	
	var quizNoOfItems = "";
	var passingScore = "";
	var averageForPassing = 1;
	var score = "";
	var stats = "";
	var studScore = "";
	
	$("#instructionDiv").show();
	$("#quizDiv").hide();
	$("#resultDiv").hide();
	/* ---------------------- mga kelangan  na variable END --------------------------------------------------------------------*/

	$(".choicesContainer").click(function(){
		$(this).find(".radioChoice").prop('checked',true);
		
	});
	
	/* onload FUNCTIONS START */

	
	/*
	splashScreenIntro();//splash screen function --index.html
	checkIfLogin();//--index.html
	storeQuizArrayToLocalStorage();//store quizArray to localStorage --index.html
	getLeaderboard(); //call ajax leaderboard; --leaderboard_page.html
	displayGameOverScoreAndPreviousScore();//display score on --game_over_page.html
	//gameStart();//--index.html
	startRsg();main_game_page.html
	*/
	
	
	
	//timer START
	//var d=new Date();
	//var mytime=d.getSeconds();
	//var mytime=d.getMinutes();
	var myRsgTimer = "";
	
	var myTimer= "";  
	
	var m=15;
	
	var rsg =3;
	//start();
	function start(){
		m = 15;
		
		//$("#gameTimer").val(m);
		$("#gameTimer").html(m);
		clearTimeout(myTimer);
		clearInterval(myTimer);
		
		setTimeout(function(){
		myTimer = setInterval(function(){myTimer1()},1000);
		});
	}
	
	function myTimer1(){
		//var time = document.getElementById("gameTimer").value=m;
		setTimeout(function(){
			//$("#gameTimer").val(m);
			$("#gameTimer").html(m);
		});
		m--;
		
		
		
		if(m==0){
		//alert("Game Over!!! Try Again"+'\n'+"You have to quit the game...");
		//clearTimeout(myTimer);
		clearTimeout(myTimer);
		//clearTimeout(myTimer),
		clearInterval(myTimer);
		//gameOver();
		checkAnswer();//getQuestion();
		}
	}
	
	//timer END
	
	function startRsg(){
		//rsg = 3;
		
		//$("#rsgTimer").val(rsg);
		//$("#rsgTimer").html(rsg);
		$("#rsgTimer").html("Ready!");
		
		
		clearTimeout(myRsgTimer);
		clearInterval(myRsgTimer);
		setTimeout(function(){
		myRsgTimer = setInterval(function(){myRsgTimer1()},700);
		});
	}
	
	function myRsgTimer1(){
		//var time = document.getElementById("gameTimer").value=m;
		setTimeout(function(){
			//$("#rsgTimer").val(rsg);
			//$("#rsgTimer").html(rsg);
		
		});
		rsg--;
		if(rsg == 3){
			$("#rsgTimer").html("Ready!");
		
		}
		if(rsg == 2){
			$("#rsgTimer").html("Set!");
		}
		if(rsg == 1){
			$("#rsgTimer").html("GO!!!");
		}
		
		
		
		if(rsg==0){
		//alert("Game Over!!! Try Again"+'\n'+"You have to quit the game...");
		//clearTimeout(myTimer);
		clearTimeout(myRsgTimer);
		clearTimeout(myRsgTimer);
		//clearInterval(myTimer);
		//gameOver();
		$("#rsgTimerModal").hide();
		gameStart();
		}
	}
	
	//timer END
	/* onload FUNCTIONS END */
	
	/*---------------------------------- navigation btn and functions START -------------------------------------------*/
	$("#stopTime").click(function(){
		start();
	});
	
	
	
	$("#btn-start-quiz").click(function(){
		gameStart();
	});
	
	


	
	$(".btn-choice").click(function(){
			//setTimeout(myTimer1);
			
			//check answer START
			var answer = $(this).val();
			var correctAnswer = $("#correct").val();
			if(answer == correctAnswer){
				addScore();
				getQuestion();
				
				
			}else{
				gameOver();
				//gameStart();
			}
			//check answer END
		
	
		
	});//onclick btn-choice END
	
	
	$(".radioChoice").click(function(){
		
		$("#btn-submit-answer").prop('disabled',false);
		
	});
	
	$(".choicesContainer").click(function(){
		$("#btn-submit-answer").prop('disabled',false);
		
	});
	$("#scoreSubmit").click(function(){
		var b = window.sessionStorage.getItem("lessonId");
		
		stats = $("#scoreStatus").html();
		//alert(quizNoOfItems+" "+score+" "+stats);
			$.ajax({
			url: "phpfiles/quiz_result.php",
			type: "GET",
			data: {"noItems":quizNoOfItems,"correct":score,"status":stats,"lessonId":b},
			dataType: "json",
			success: function(data){
				
				//alert("success");
				$(".txtSaveSuccess").show();
				$("#scoreSubmit").hide();
				$("#exitQuiz").show();
				callStudentQuizResultIndividually();
			},
			error: function(data){
				//alert(data);
				//do something if error
				alert("not success");
			},
			fail: function(data){
				;alert("fail"+ data);
			}
			
			});
			
	});
	
	$("#btn-submit-answer").click(function(){
		checkAnswer();
	});
	
	function checkAnswer(){
		var correctAnswer = $("#correct").val();
		var answer = $("input[name=choice]:checked").val();
		
		if(answer == correctAnswer){
			//	alert("TAMA");
				addScore();
				getQuestion();
				clearRadioButton();
			}else{
			//	alert("male");
				clearRadioButton();
				getQuestion();
				
				//gameOver();
				//gameStart();
			}
	}
	/*---------------------------------- navigation btn and functions END -------------------------------------------*/

	


	
	
	/* -------------------------------------- functions START --------------------------------------------------------------------*/
	function clearRadioButton(){
		$("input[name=choice]:checked").prop('checked',false);
	}
	function getPassingScore(){
		setTimeout(function(){
		
		passingScore = (parseInt(quizNoOfItems) * averageForPassing);
		//$("#passingScore").val(passingScore);
		$("#passingScore").html(passingScore);
		
			},1000);/* !important 1sec delay */
	}
	
	//for index.html onload
	
	//for index.html onload
	
	
	//for leaderboard_page.html onload
	
	
	//activate when #btn-post-score-online .click 
	
	
	//for index.html onload
	function storeQuizArrayToLocalStorage(){
		//var db = window.localStorage.getItem(localQuizArrayName);
		//if(db == null || db == ""){
			//window.localStorage.setItem(localQuizArrayName,JSON.stringify(quizArray));// quizArray naka include sa taas sa <script></script>
			//alert(localQuizArrayName + " \n store to db");
		//}
		//else{
			//alert("db  " + localQuizArrayName + "  already exist!");
		//}
		//window.localStorage.setItem(localQuizArrayName,JSON.stringify(quizArray));// quizArray naka include sa taas sa <script></script>
			
		
	}
	
	
	//for main_game_page.html under the function gameStart()
	function getQuestionsIndexes(){
		setTimeout(function(){
		//get request from questions json file
		//get its length
		// var questionsIndexes = [];
		//for(i=0;i< questionsJsonFile.length;i++){
		//	questionsIndexes.push(i);
		//}
		
		//test START
		var questionsIndexes = [];	
		
		//var quizArray = JSON.parse(window.localStorage.getItem(localQuizArrayName));
		//get quizArray on localStorage
		
	
		
		//$.ajax({
		//	url: "quiz.js",
		//	type: "GET",
		//	dataType: "json",
		//	success: function(data){
			
				for(i=0;i < quizArray.length;i++){
					questionsIndexes.push(i);
				}
				
				//	var questionsIndexes = [0,1,2,3];//eto ung indexes ng mga questions kung 100 items lahat gawin mo lang [0,1,2 . . . 99]
			var	randomizeIndexes = [];//eto ung array na paglalagyan ng mararandom na mga questionsIndexes
			var	i = questionsIndexes.length;
			//back to u
			quizNoOfItems = i;
			//$("#noOfItems").val(i);
			$("#noOfItems").html(i);
			$(".noOfItems").html(i);
			
			var	j = 0;

			while (i--) {
				j = Math.floor(Math.random() * (i+1));
				randomizeIndexes.push(questionsIndexes[j]);
				questionsIndexes.splice(j,1);
			}
			
			questionsArray = randomizeIndexes; // naka random na ung indexes ng mga questions naten
			$("#testArray").val(questionsArray);
				
				
			//}
		//	});
		
			
		//test END
		
		},50);
	};
	
	//for main_game_page.html activate on page onload and on next question
	function getQuestion(){
		
		//var a = parseInt($("#itemNo").val());
		var a = parseInt($("#itemNo").html());
		//alert(a);
		if(questionsArray == ""){
			gameOver();
			//alert("no more questions!");
		}else{
			clearRadioButton();
			$("#btn-submit-answer").prop('disabled',true);
			a++;
			$("#itemNo").html(a);
			
			//alert(a);
			
			
			//var quizArray = JSON.parse(window.localStorage.getItem(localQuizArrayName));
			start();
		//	$.ajax({
		//		url: "quiz.js",
		//		type: "GET",
		//		dataType: "json",
		//		success: function(data){
					var get = questionsArray[0];
					var question = quizArray[get].question;
					var choice1 = quizArray[get].choice1;
					var choice2 = quizArray[get].choice2;
					var choice3 = quizArray[get].choice3;
					var choice4 = quizArray[get].choice4;
					var correct = quizArray[get].correct;
					
					$("#question").val(question);
					$("#choice1").val(choice1);
					$("#label-for-choice1").html(choice1);
					
					$("#choice2").val(choice2);
					$("#label-for-choice2").html(choice2);
					
					$("#choice3").val(choice3);
					$("#label-for-choice3").html(choice3);
					
					$("#choice4").val(choice4);
					$("#label-for-choice4").html(choice4);

					$("#correct").val(correct);
					
					
					var removed = questionsArray.splice(x,1);
					$("#testArray").val(questionsArray);
			//	},
			//	error: function(){
					//do something if $.ajax not success
			//	}
			//});	
		}			
	};
	
	//for main_game_page.html onload
	function gameStart(){
		reset();
		//getQuestionsIndexes();
		getQuestion();
		getPassingScore();
		$("#itemNo").html(0);
		$("#instructionDiv").hide();
		$("#quizDiv").show();
		$("#resultDiv").hide();
	};
	
	//for main_game_page.html onload , activate if answer is correct
	function addScore(){
		//alert("MAY TAMA KA!");
		//var a = parseInt($("#score").val()) + 1;
		score = parseInt($("#score").html()) + 1;
		//$("#score").val(a);
		$("#score").html(score);
	}
	
	//for main_game_page.html onload, activate on gameStart()
	function reset(){
		score = 0; //player's SCORE
	
		//$("#score").val(score);
		$("#score").html(score);
		
		//alert("New Game na!");
	};
	
	//for main_game_page.html activate on Wrong Answer
	function gameOver(){
		$("#quizDiv").hide();
		$("#resultDiv").show();
		
		//var gameOverScore = $("#score").val();
		var gameOverScore = parseInt($("#score").html());
		var previousScore = window.localStorage.getItem("local-storage-previous-score");
		var f = "Failed";
		var p = "Passed";
		//alert("Wrong Answer! \n GAME OVER!\n Your Score: "+ gameOverScore + "\n Previous Score: " + previousScore );
		
		//saveGameOverScoreOnLocalStorage();//save game over score to local storage
		
		/* stop timer*/
		clearTimeout(myTimer);
		clearInterval(myTimer);
		
		clearTimeout(myRsgTimer);
		clearInterval(myRsgTimer);
	
		if(gameOverScore < passingScore){
			//alert("You Did Not Passed!");
			$("#scoreStatus").html(f);
		}else{
			//alert("You  Passed!");
			
			$("#scoreStatus").html(p);
		}
		/* stop timer*/
		//location.href = "game_over_page.html";
		/* modal START*/
			/*
			var $modal = $('#main_game_modal_container');
			  setTimeout(function(){
				 $modal.load('game_over_page.html', '', function(){
				  $modal.modal();
				 
				});
			  },1); 
			*/
			/* modal END*/
		

		//var ggScore = window.localStorage.getItem("local-storage-game-over-score");
		//$("#txt-game-over-score").val(ggScore);
		//$("#txt-previous-score").val(previousScore);
		
		//onload palang my var na ng previous-score
		//magkaiba ung function ng set previous tska getItem
		//	var current-score = ;
		//var previous-score = window.localStorage.getItem("local-storage-previous-score");
		// store array to localstorage
		//window.localStorage.setItem("local-storage-previous-score", previous-score );
	};
	
	//function for game_over_page.html onload
	function displayGameOverScoreAndPreviousScore(){
		var localGameOverScore = window.localStorage.getItem("local-storage-game-over-score");
		var localPreviousScore = window.localStorage.getItem("local-storage-previous-score");
		
		if(localPreviousScore == "null" || localPreviousScore == "" || localPreviousScore == "undefined"){
			localPreviousScore = 0;
		}
		$("#txt-game-over-score").val(localGameOverScore);
		$("#txt-previous-score").val(localPreviousScore);
	}
	
	//function for game_over_page.html onload
	function timerStart(){
	
		
	}
	
	
	function getPreviousScore(){
		var previouScore = window.localStorage.getItem("local-storage-previous-score");
		 
	}
	//function for main_game_page.html onload
	function saveGameOverScoreOnLocalStorage(){
		//var gameOverScore = $("#score").val();
		var gameOverScore = parseInt($("#score").html());
		window.localStorage.setItem("local-storage-game-over-score", gameOverScore);
	}
	
	//function for main_game_page.html onload
	function savePreviousScore(){
		
		var gamePreviousScore = window.localStorage.getItem("local-storage-game-over-score");
		window.localStorage.setItem("local-storage-previous-score", gamePreviousScore);
			
		
	}

	/* -------------------------------------- functions END --------------------------------------------------------------------*/
		

	
	