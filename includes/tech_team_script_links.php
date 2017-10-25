

	
<!--tech team js FILES START -->
	
	<script type="text/javascript" src="js/jq.js"></script><!-- for  jquery -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script><!-- for bootstrap -->
	<script type="text/javascript" src="js/jquery.validate.js"></script><!-- for  jquery validate -->
	<script type="text/javascript" src="js/jquery.confirm.js"></script><!-- for  jquery confirm -->
	<script type="text/javascript" src="js/nav-bar.js"></script> <!--for navigation tree -->
	
<!--tech team js FILES END -->

<!-- tech team script START-->
<script type="text/javascript">
		$(document).ready(function(){
			$(".hideOnload").children().hide();
			$(".lessonSpan").click(function(){
				var a = $(this).children("#testVal").val();
				//alert(a);
			});
			
			
			//we need subject_id
			//we need month_quarter_id
			//we need level_id
			//we need lesson_id
			//we need lecture_id
			//we need raw_quiz_id
			//we need ready_quiz_id
			var subjectId = "";
			var monthQuarterId = "";
			var levelId = "";
			var lessonId = "";
			
			//select subject first START
				//will get subjecId
			subjectId = $("#subjects").val();
			subjectId = "1";
			//alert("subject ID ="+subjectId);
			
			
			$("#subjects").change(function(){
				var a =$(this).val();
				
				
				alert("subject_id = "+subjectId);
			});
			//select subject first END
			
			
			
			
			
			
			//month Quarter onClick START
			
			//will get monthQuarterId
			$(".monthQuarterSpan").click(function(){
				monthQuarterId = "";
				//get the id of selecter month Quarter
				var a = $(this).children(".hiddenMonthQuarter").val();
				//alert(a);
				
				monthQuarterId = a;
				$(".levelBox").removeClass("blue");
				$("#1.levelBox").addClass("blue");
				
				callLesson();
				levelId = 1;//select level 1 by default
				//do something after the this function
				setTimeout(function () {
							callLessonByLevel();
						}, 50);
						
				
					

			});//month Quarter onClick END
			
		
		
		//choosing level kelangan meron ng laman ung monthQuarterId START
			//will get level_id
			//will get lesson_id
			
			$(".levelBox").click(function(){
			
				levelId = "";
				lessonId = "";
				
				$(".levelBox").removeClass("blue");
				$(this).addClass("blue");
				var a = $(this).attr("id");
				levelId = a;
				
				callLessonByLevel();
				//do something after the this function
				setTimeout(function () { 
					callLecture();
					callRawQuiz();
					callReadyQuiz(); 
					}, 50);
				
			});
			
		//choosing level kelangan meron ng laman ung monthQuarterId END
		
			//select lectures START
			$("#lecture").click(function(){
				alert("Lesson ID = "+lessonId);
				callLecture();
				
			});
			//select lectures END
			
			
			//select raw quiz START
			$("#rawQuiz").click(function(){
				alert("Lesson ID ="+lessonId);
				callRawQuiz();
				
			});
			//select raw quiz END
			
			//select ready quiz START
			$("#readyQuiz").click(function(){
				alert("Lesson ID ="+lessonId);
				callReadyQuiz();
			});
			//select ready quiz END
			
			
//-------------------------------------------------------FUNCTIONs START--------------------------------------------------
			
			function callLesson(){
				$("#monthQuarter").text("Month Quarter ID = "+monthQuarterId);
				//remove the current table rows
				$(".lessonRemove").remove();
				
				//ajax request START
				$.ajax({
					url: "call_functions_jquery_ajax/call_lesson.php",
					type: "GET",
					data: {"subjectId":subjectId,"mqId":monthQuarterId},
					dataType: "json",
					success: function(lesson){
						for(var i=0;i<lesson.length;i++){
							$("#result_test").append(
							"<tr class='lessonRemove'>"+
								"<td>"+lesson[i].json_fld1+ "</td>"+
								"<td>"+lesson[i].json_fld2+ "</td>"+
								"<td>"+lesson[i].json_fld3+ "</td>"+
								"<td>"+lesson[i].json_fld4+ "</td>"+
								"<td>"+lesson[i].json_fld5+ "</td>"+
							"</tr>"
							 );
						}
						
					
					}
				});
				//ajax request END
			
			}
			
			function callLessonByLevel(){
				$(".lessonByIDRemove").remove();
				//ajax request START
				$.ajax({
					url: "call_functions_jquery_ajax/call_lesson_by_level.php",
					type: "GET",
					data: {"subjectId":subjectId,"mqId":monthQuarterId,"levelId":levelId},
					dataType: "json",
					success: function(lesson){
						for(var i=0;i<lesson.length;i++){
							
							$('#lessonList').append(
							"<tr class='lessonByIDRemove'>"+
								"<td>"+lesson[i].json_fld1+ "</td>"+
								"<td>"+lesson[i].json_fld2+ "</td>"+
								"<td>"+lesson[i].json_fld3+ "</td>"+
								"<td>"+lesson[i].json_fld4+ "</td>"+
								"<td>"+lesson[i].json_fld5+ "</td>"+
							"</tr>"
							);
							$("#testList").append(
								"<li>Test</li>"
							);
							lessonId = lesson[0].json_fld1;
							
							
						}
						callLecture();
						callRawQuiz();
						callReadyQuiz();
						lessonId = "";// clear lesson
					}	
				});
				
			//ajax request END
			
			}
			
			function callLecture(){
				$(".lectureRemove").remove();
				//ajax request START
				$.ajax({
					url: "call_functions_jquery_ajax/call_lecture.php",
					type: "GET",
					data: {"lessonId":lessonId},
					dataType: "json",
					success: function(lesson){
						for(var i=0;i<lesson.length;i++){
							
							$('#lectureList').append(
								"<tr class='lectureRemove'>"+
									"<td class='hidden'>"+lesson[i].json_fld1+ "</td>"+
									"<td>"+lesson[i].json_fld2+ "</td>"+
									"<td>"+lesson[i].json_fld3+ "</td>"+
									"<td>"+lesson[i].json_fld4+ "</td>"+
									"<td class='hidden'>"+lesson[i].json_fld5+ "</td>"+
									"<td class='hidden'>"+lesson[i].json_fld6+ "</td>"+
									"<td class='hidden'>"+lesson[i].json_fld7+ "</td>"+
									"<td class='hidden'>"+lesson[i].json_fld8+ "</td>"+
									"<td class='hidden'>"+lesson[i].json_fld9+ "</td>"+
									"<td class='hidden'>"+lesson[i].json_fld10+ "</td>"+
									"<td><i class='icon-file'></i><a href='' target='blank'>  View</a> | <a href='' target='blank'>Download</a></td>"+
								"</tr>"
							);
						}
					}
				});
				//ajax request END
				
			}
			
			function callRawQuiz(){
				$(".rawQuizRemove").remove();
				//ajax request START
				$.ajax({
					url: "call_functions_jquery_ajax/call_raw_quiz.php",
					type: "GET",
					data: {"lessonId":lessonId},
					dataType: "json",
					success: function(lesson){
						for(var i=0;i<lesson.length;i++){
							
							$('#rawQuizList').append(
								"<tr class='rawQuizRemove'>"+
									"<td class='hidden'>"+lesson[i].json_fld1+ "</td>"+
									"<td>"+lesson[i].json_fld2+ "</td>"+
									"<td>"+lesson[i].json_fld3+ "</td>"+
									"<td>"+lesson[i].json_fld4+ "</td>"+
									"<td class='hidden'>"+lesson[i].json_fld5+ "</td>"+
									"<td class='hidden'>"+lesson[i].json_fld6+ "</td>"+
									"<td class='hidden'>"+lesson[i].json_fld7+ "</td>"+
									"<td class='hidden'>"+lesson[i].json_fld8+ "</td>"+
									"<td class='hidden'>"+lesson[i].json_fld9+ "</td>"+
									"<td class='hidden'>"+lesson[i].json_fld10+ "</td>"+
								"</tr>"
							);
						}
					}
				});
				//ajax request END
			}
			function callReadyQuiz(){
				$(".readyQuizRemove").remove();
				//ajax request START
				$.ajax({
					url: "call_functions_jquery_ajax/call_ready_quiz.php",
					type: "GET",
					data: {"lessonId":lessonId},
					dataType: "json",
					success: function(lesson){
						for(var i=0;i<lesson.length;i++){
							
							$('#readyQuizList').append(
								"<tr class='readyQuizRemove'>"+
									"<td class='hidden'>"+lesson[i].json_fld1+ "</td>"+
									"<td>"+lesson[i].json_fld2+ "</td>"+
									"<td>"+lesson[i].json_fld3+ "</td>"+
									"<td>"+lesson[i].json_fld4+ "</td>"+
									"<td class='hidden'>"+lesson[i].json_fld5+ "</td>"+
									"<td class='hidden'>"+lesson[i].json_fld6+ "</td>"+
									"<td class='hidden'>"+lesson[i].json_fld7+ "</td>"+
									"<td class='hidden'>"+lesson[i].json_fld8+ "</td>"+
									"<td class='hidden'>"+lesson[i].json_fld9+ "</td>"+
									"<td class='hidden'>"+lesson[i].json_fld10+ "</td>"+
									"<td class='hidden'>"+lesson[i].json_fld11+ "</td>"+
									"<td class='hidden'>"+lesson[i].json_fld12+ "</td>"+
								"</tr>"
							);
						}
					}
				});
				//ajax request END
			}
			
			
			/* ADMIN PANEL custom animations START*/
			$("#btn-masterlist-stud").click(function(){
				$("#container-masterlist-stud").show();
				$("#container-addnew-stud").hide();
			});
			$("#btn-addnew-stud").click(function(){
				$("#container-masterlist-stud").hide();
				$("#container-addnew-stud").show();
			});
			
			$("#btn-masterlist-subject-co").click(function(){
				$("#container-masterlist-subject-co").show();
				$("#container-addnew-subject-co").hide();
			});
			$("#btn-addnew-subject-co").click(function(){
				$("#container-masterlist-subject-co").hide();
				$("#container-addnew-subject-co").show();
			});
			$("#btn-masterlist-it-staff").click(function(){
				$("#container-masterlist-it-staff").show();
				$("#container-addnew-it-staff").hide();
			});
			$("#btn-addnew-it-staff").click(function(){
				$("#container-masterlist-it-staff").hide();
				$("#container-addnew-it-staff").show();
			});
			
			/* ADMIN PANEL custom animations END*/
//-------------------------------------------------------FUNCTIONs END --------------------------------------------------

	});// on $(document).ready END
	</script>
<!-- tech team script END-->