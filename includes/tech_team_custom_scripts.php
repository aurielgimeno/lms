
<!-- tech team script START-->

<script type="text/javascript">
$(document).ready(function(){
	
	var readyQuizId = "";
	$("#btnTestReload").click(function(){
		
	});
	
	$(".btnLogout").click(function(){
		//	alert("clear");
		window.sessionStorage.clear();
	});
	//for selecting correct answer in insert question START
	$("#testOption").change(function(){
		var a = $(this).val();
		//alert(a);
		var b = ($("#"+a).val());
		//alert($("#"+a).val());
		//alert(b);
		$("#hiddenCorrectAnswer").val(b);
		//$("#testOption").val(b);
		//alert($("#testOption").val());
		
	});//for selecting correct answer in insert question END
	
	$("#testOption2").change(function(){
		var a = $(this).val();
		//alert(a);
		var b = ($("#"+a).val());
		//alert($("#"+a).val());
		$("#hiddenCorrectAnswer2").val(b);
		//$("#testOption").val(b);
		//alert($("#testOption").val());
		
	});//for selecting correct answer in insert question END

	$("#btnAddnewItemToReadyQuiz").click(function(){
		$("#readyQuizItemFormPopupTxt").html("");	
		$("#addReadyQuizItemModal").modal("show");
		//alert("readyQuizId ="+readyQuizId);
		
					
	});
	
	//create new ready quiz START
	$("#btnCreateNewReadyQuiz").click(function(){
		$("#createReadyQuizModal").modal("show");
	});//create new ready quiz END

	<!-- for bootstrap tabs script START-->
	$(function(){
		  $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
		  // Get the name of active tab
		  var activeTab = $(e.target).text(); 
		  // Get the name of previous tab
		  var previousTab = $(e.relatedTarget).text(); 
		  $(".active-tab span").html(activeTab);
		  $(".previous-tab span").html(previousTab);
	   });
	});<!-- for bootstrap tabs script END-->


	<!--  UPLOAD MODAL CLICK FUNCTION START HERE  -->
	//uploadLectureModal start
	$("#btnUploadLecture").click(function(){
			$("#uploadLectureModal").modal("show");
	});//uploadLectureModal end
		
		
	//uploadRawQuizModal start
	$("#btnUploadRawQuiz").click(function(){
			$("#uploadRawQuizModal").modal("show");
	});//uploadRawQuizModal end
	
		
	//lecture delete btn START
	 $('body').on('click', '.deleteLecture', function() {
		lectureIDForDelete = $(this).attr("name");
		lectureFileNameForDelete = $(this).children(".hiddenLecFileName").val();
		//alert("lectureFileNameForDelete =" +lectureFileNameForDelete);
		//alert("test val = "+lectureFileNameForDelete);
		//$(this).addClass("deleteLecture");
		//alert(lectureIDForDelete);
		if (confirm("Delete this item?") == true) {
			//if ok do something
			//alert("call delete function");
			deleteLecture();
			event.preventDefault();
		} else {
			alert("del cancel");
			//if cancel do nothing
			event.preventDefault();
		}
	});//lecture delete btn END
	
		
	//raw quiz delete btn START
	 $('body').on('click', '.deleteRawQuiz', function() {
		rawQuizIDForDelete = $(this).attr("name");
		rawQuizFileNameForDelete = $(this).children(".hiddenRawQuizFileName").val();
		//alert(rawQuizFileNameForDelete);
		//alert(rawQuizIDForDelete);
		//alert(rawQuizFileNameForDelete);
		//alert("test val = "+lectureFileNameForDelete);
		//$(this).addClass("deleteLecture");
		//alert(lectureIDForDelete);
		if (confirm("Delete this item?") == true) {
			//if ok do something
			//alert("call delete function");
			deleteRawQuiz();
			event.preventDefault();
		} else {
			event.preventDefault();
			//if cancel do nothing
			
		}
	});//raw quiz delete btn END
	
		
	//ready quiz item delete btn START
	$('body').on('click', '.deleteReadyQuizItem', function(e) {
		readyQuizItemIdForDelete = $(this).attr("name");
		//alert("readyQuizItemIdForDelete = "+readyQuizItemIdForDelete);
		//rawQuizFileNameForDelete = $(this).val();
		if (confirm("Delete ready quiz item?") == true) {
			//if ok do something
			
			event.preventDefault();
			deleteReadyQuizItem();
			
		} else {
			//if cancel do nothing
			
			
			event.preventDefault();
		}
		
	});//ready quiz item delete btn END
	
		
	//ready quiz item edit btn START
	 /*$('body').on('click', '.editReadyQuizItem', function() {
		rawQuizItemIDForEdit = $(this).attr("name");
		alert("rawQuizItemIDForEdit = "+rawQuizItemIDForEdit);
		//rawQuizFileNameForDelete = $(this).val();
		if (confirm("Delete this item?") == true) {
			//if ok do something
			alert("call delete function");
			
			
			event.preventDefault();
		} else {
			//if cancel do nothing
			event.preventDefault();
		}
	});*/
	//ready quiz item edit btn END
	
		
		
	//delete Lecture START
	function deleteLecture(){
		$.ajax({
			url: "phpfiles/delete_lecture.php",
			type: "GET",
			data: {"lecture_id":lectureIDForDelete,"lecture_filename":lectureFileNameForDelete},
			dataType: "json",
			success: function(data){
				callLecture();
				//alert("File Deleted");
				//location.href = "admin_students_page.php";
			},
			error: function(data){
				callLecture();
				//alert("File Deleted!");
				//do something if error
			},
			fail: function(data){
				alert("Delete Failed");
			}
			
		});
	
		
	};//deleteLecture END
	
	//delete Raw Quiz START
	function deleteRawQuiz(){
		$.ajax({
			url: "phpfiles/delete_raw_quiz.php",
			type: "GET",
			data: {"raw_quiz_id":rawQuizIDForDelete,"raw_quiz_filename":rawQuizFileNameForDelete},
			dataType: "json",
			success: function(data){
				//alert("File Deleted");
				
				callRawQuiz();
				//location.href = "admin_students_page.php";
			},
				error: function(data){
				//
				
				//alert("File Deleted!");
				
				callRawQuiz();
				//do something if error
			},
			fail: function(data){
				alert("Delete Failed");
			}	
		});
	};//delete Raw Quiz END
		
		//deleteReadyQuizItem START
		function deleteReadyQuizItem(){
			$.ajax({
				url: "phpfiles/delete_ready_quiz_item.php",
				type: "GET",
				data: {"readyQuizItemIdForDelete":readyQuizItemIdForDelete},
				dataType: "json",
				success: function(data){
					//alert("deleteReadyQuizItem Item Deleted");
					callReadyQuizItem();
				},
				error: function(data){
					//alert("deleteReadyQuizItem error on deleteReadyQuizItem"+data);
					callReadyQuizItem();
				},
				fail: function(data){
					alert("Delete Failed");
					callReadyQuizItem();
				} 
				
			});
			
		};//delete readyQuizItem END
		
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
									"<td class='hidden'>"+lesson[i].json_fld7+""+ lesson[i].json_fld5 + "</td>"+
									"<td class='hidden'>"+lesson[i].json_fld7+ "</td>"+
									"<td class='hidden'>"+lesson[i].json_fld8+ "</td>"+
									"<td class='hidden'>"+lesson[i].json_fld9+ "</td>"+
									"<td class='hidden'>"+lesson[i].json_fld10+ "</td>"+
									"<td>"+
										"<a href='"+lesson[i].json_fld7+""+ lesson[i].json_fld5+"' target='_blank' download >Download</a>"+
										"<span class=' hideOnSubjectPage'> | <a href='' class='deleteLecture' name='"+lesson[i].json_fld1+ "'><input type='hidden' class='hiddenLecFileName' value='"+lesson[i].json_fld5+"'/>Delete</a></span>"+
									"</td>"+
								"</tr>"
							);
						}
						
				
					}
				});
				//ajax request END
				
			};
	//delete student END
	
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
									"<td class='hidden'>"+lesson[i].json_fld7+""+ lesson[i].json_fld5 + "</td>"+
									"<td class='hidden'>"+lesson[i].json_fld7+ "</td>"+
									"<td class='hidden'>"+lesson[i].json_fld8+ "</td>"+
									"<td class='hidden'>"+lesson[i].json_fld9+ "</td>"+
									"<td class='hidden'>"+lesson[i].json_fld10+ "</td>"+
									"<td>"+
										"<a href='"+lesson[i].json_fld7+""+ lesson[i].json_fld5+"' target='_blank' download >Download</a>"+
										"<a href='' class='deleteRawQuiz' name='"+lesson[i].json_fld1+"' value='"+lesson[i].json_fld2+ "'><input type='hidden' class='hiddenRawQuizFileName' value='"+lesson[i].json_fld5+"'/>| Delete</button>"+
									"</td>"+
								"</tr>"
							);
						}
					}
				});
				//ajax request END
			};
			
		

			
	
			/*
			if($(".subject_id_tgl").val() == ""){
				alert("empty");
				$(".contentAndNavTreeContainer").hide();
			}else{
				alert("not empty");
			}
			*/
			
			$(".btnTakeQuiz").click(function(){
				window.sessionStorage.setItem("readyQuizId",readyQuizId);
				window.sessionStorage.setItem("lessonId",lessonId);
				//alert("readyQuizId = "+readyQuizId);
				//alert("lessonId = "+lessonId);
				
				
			});
			$(".hideOnload").children().hide();
			$(".lessonSpan").click(function(){
				var a = $(this).children("#testVal").val();
				//alert(a);
			});
			
			$(".btnSubject").click(function(){
				$(".contentAndNavTreeContainer").show();
				var a = $(this).val();
				var b = $(this).attr("name");
					//alert(a);
					subjectId = a;
					$(".subject_id_tgl").val(a);
					$(".subject_id_tgl").html(a);
					$(".subject_name").val(b);
					$(".subject_name").html(b);
					
					//clear school_year_name
					//clear month_name
					//clear month_quarter_name
					//$(".school_year_name").val("");
					//$(".school_year_name").html("");
					
					$(".month_name").val("");
					$(".month_name").html("");
					
					$(".month_quarter_name").val("");
					$(".month_quarter_name").html("");
					//show instructions
					
					$(".msg_choose_mq_first").show();
					$(".msg_choose_lvl_first").show();
					
					//hide tabs
					$(".lesson_tabs").hide();
					//hide nav tree nodes
					
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
				
				//get subject id from subject_id_tgl
			
			//subjectId = "1";
			//alert("subject ID ="+subjectId);
			
			
			$("#subjects").change(function(){
				var a =$(this).val();
				
				
				//alert("subject_id = "+subjectId);
			});
			//select subject first END
			
			
			
			
			
			$(".monthNameSpan").click(function(){
				//highlight selected month START
				$(".monthNameSpan").removeClass("selectedSpan");
				$(".monthQuarterSpan").removeClass("selectedSpan");
				$(this).addClass("selectedSpan");
				//highlight selected month END
				var a = $(this).children(".hiddenMonthName").val();
				var b = $(this).children(".hiddenSYofThisMonth").val();
				window.sessionStorage.setItem("hiddenMonthName",a);
				window.sessionStorage.setItem("hiddenSYofThisMonth",b);
				$(".month_name").val(a);
				$(".month_name").html(a);
				$(".school_year_name").html(b);
				$(".school_year_name").val(b);
				
				$(".levelBox").attr("disabled",true);
				$(".month_quarter_name").val("");
				$(".month_quarter_name").html("");
				monthQuarterId = "";
				$(".msg_choose_mq_first").show();
				$(".msg_choose_lvl_first").show();
				$(".lesson_tabs").hide();
				$(".testHide").children().hide();
				$(".levelBox").removeClass("selectedLevel");
				
			});
			//month Quarter onClick START
			
			//will get monthQuarterId
			$(".monthQuarterSpan").click(function(){
				var z = $(this).children(".hiddenMonthName").val();
				$(".month_name").val(z);
				$(".month_name").html(z);
				$(".lesson_tabs").hide();
				//highlight selected monthQuarter START
				$(".monthQuarterSpan").removeClass("selectedSpan");
				$(this).addClass("selectedSpan");
				
				//highlight selected monthQuarter END
				monthQuarterId = "";
				subjectId = $(".subject_id_tgl").val();
				$(".level_id_tgl").val("");
				$(".lesson_id_tgl").val("");
				var a = $(this).children(".hiddenMonthQuarterName").val();
				window.sessionStorage.setItem("hiddenMonthQuarterName",a);
				
				$(".month_quarter_name").val(a);
				$(".month_quarter_name").html(a);
				$(".levelBox").attr("disabled",false);
				$(".msg_choose_mq_first").hide();
				$(".msg_choose_lvl_first").show();
				//get the id of selecter month Quarter
				var a = $(this).children(".hiddenMonthQuarter").val();
				//alert("Month Quarter ID = "+a);
				$(".month_quarter_tgl").val(a);
				monthQuarterId = a;
				$(".levelBox").removeClass("selectedLevel");
				//$("#1.levelBox").addClass("blue");
				
				callLesson();
				//levelId = 1;//select level 1 by default
				//do something after the this function
				setTimeout(function () {
							callLessonByLevel();
						}, 50);
						
				
					

			});//month Quarter onClick END
			
		
		
		//choosing level kelangan meron ng laman ung monthQuarterId START
			//will get level_id
			//will get lesson_id
			
			$(".levelBox").click(function(){
				
				$(".msg_choose_lvl_first").hide();
				$(".lesson_tabs").show();
				
				readyQuizId = "";
				levelId = "";
				lessonId = "";
				
				$(".levelBox").removeClass("selectedLevel");
				$(this).addClass("selectedLevel");
				var a = $(this).attr("id");
				levelId = a;
				window.sessionStorage.setItem("levelId",levelId);
				$(".level_id_tgl").val(a);
				//alert("Level = "+a);
				callLessonByLevel();
				//do something after the this function
				
				/* balikan
				setTimeout(function () { 
					callLecture();
					callRawQuiz();
					callReadyQuiz(); 
					callReadyQuizItem();
					}, 50);
				*/
				
			});
			
		//choosing level kelangan meron ng laman ung monthQuarterId END
		
			//select lectures START
			$("#lecture").click(function(){
				//alert("Lesson ID = "+lessonId);
				callLecture();
				
			});
			//select lectures END
			
			
			//select raw quiz START
			$("#rawQuiz").click(function(){
				//alert("Lesson ID ="+lessonId);
				callRawQuiz();
				
			});
			//select raw quiz END
			
			//select ready quiz START
			$("#readyQuiz").click(function(){
				//alert("Lesson ID ="+lessonId);
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
							$(".lesson_id_tgl").val(lesson[0].json_fld1);
							lessonId = lesson[0].json_fld1;
							window.sessionStorage.setItem("lessonIdOncallLessonByLevel",lessonId);
						
						//callReadyQuizItem();	
						}
								
						callLecture();
						callRawQuiz();
						callReadyQuiz();
						callReadyQuizItem();
						callStudentQuizResultIndividually();
						//lessonId = "";// clear lesson
					}
				});
				
			//ajax request END
			
			}
			/*
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
									"<td class='hidden'>"+lesson[i].json_fld7+""+ lesson[i].json_fld5 + "</td>"+
									"<td class='hidden'>"+lesson[i].json_fld7+ "</td>"+
									"<td class='hidden'>"+lesson[i].json_fld8+ "</td>"+
									"<td class='hidden'>"+lesson[i].json_fld9+ "</td>"+
									"<td class='hidden'>"+lesson[i].json_fld10+ "</td>"+
									"<td>"+
										"<a href='"+lesson[i].json_fld7+""+ lesson[i].json_fld5+"' target='_blank' download >Download</a>"+
										 " | <a href='' class='deleteLecture' name='"+lesson[i].json_fld1+"'>delete</a>"+
									"</td>"+
								"</tr>"
							);
						}
						
					}
				})
				//ajax request END
				
			}
			*/
			/*
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
									"<td class='hidden'>"+lesson[i].json_fld7+""+ lesson[i].json_fld5 + "</td>"+
									"<td class='hidden'>"+lesson[i].json_fld7+ "</td>"+
									"<td class='hidden'>"+lesson[i].json_fld8+ "</td>"+
									"<td class='hidden'>"+lesson[i].json_fld9+ "</td>"+
									"<td class='hidden'>"+lesson[i].json_fld10+ "</td>"+
									"<td>"+
										"<a href='"+lesson[i].json_fld7+""+ lesson[i].json_fld5+"' target='_blank' download >Download</a>"+
										" | <a href='' class='deleteRawQuiz' name='"+lesson[i].json_fld1+"' value='"+lesson[i].json_fld2+ "'>Delete</a>"+
									"</td>"+
								"</tr>"
							);
						}
						
					}
				});
				//ajax request END
			}*/
			
			function callReadyQuiz(){
				
				$(".readyQuizRemove").remove();
				//ajax request START
				$.ajax({
					url: "call_functions_jquery_ajax/call_ready_quiz.php",
					type: "GET",
					data: {"lessonId":lessonId},
					dataType: "json",
					success: function(lesson){
						if(lesson != 0){
							
							//alert("11"+lesson);
							//if already have quiz hide btnSubmitCreateReadyQuiz
							//readyQuizId = lesson;
							//alert("call ready quiz ID");
							readyQuizId = lesson;
							callReadyQuizItem();
							//alert(readyQuizId);
							$(".readyQuizId").val(lesson);
							$("#btnCreateNewReadyQuiz").hide();
							$("#btnAddnewItemToReadyQuiz").show();
							
						}else if(lesson == 0){
							//call ready_quiz_item
							//alert("22"+lesson);
							$("#btnCreateNewReadyQuiz").show();
							$("#btnAddnewItemToReadyQuiz").hide();
							
						}else{
							//alert("Something went wrong!");
						}
					}
				});
				//ajax request END
			}
			
			//call ready quiz item START
			function callReadyQuizItem(){
				$(".readyQuizItemRemove").remove();
				//alert("asdasdas lessonId = "+ lessonId);
				//ajax request START
				$.ajax({
					url: "call_functions_jquery_ajax/call_ready_quiz_item.php",
					type: "GET",
					data: {"readyQuizId":readyQuizId},
					dataType: "json",
					success: function(lesson){
						//callReadyQuizItem();
						itemNum = 0;
						for(var i=0;i<lesson.length;i++){
							itemNum++;
							$('#readyQuizItemList').append(
								"<tr class='readyQuizItemRemove'>"+
									"<td class='hidden'>"+lesson[i].json_fld1+ "</td>"+
									"<td>"+itemNum+ "</td>"+
									"<td>"+lesson[i].json_fld2+ "</td>"+
									"<td>"+lesson[i].json_fld3+ "</td>"+
									"<td>"+lesson[i].json_fld4+ "</td>"+
									"<td>"+lesson[i].json_fld5+ "</td>"+
									"<td>"+lesson[i].json_fld6+ "</td>"+
									"<td>"+lesson[i].json_fld7+ "</td>"+
									"<td><a href='' class='editReadyQuizItem' name='"+lesson[i].json_fld1+"'>Edit</a> | <a href='' class='deleteReadyQuizItem' name='"+lesson[i].json_fld1+"' >Delete</a></td>"+
									//"<td><a href='' class='deleteReadyQuizItem' name='"+lesson[i].json_fld1+"' >Delete</a></td>"+
									"<td class='hidden'>"+lesson[i].json_fld8+ "</td>"+
									"<td class='hidden'>"+lesson[i].json_fld9+ "</td>"+
								"</tr>"
							);
							
						}
						
					},fail: function(lesson){
						alert("fail" + lesson);
					},error: function(lesson){
						alert("error"+ + lesson);
					}
				});
				//ajax request END
			}
			
			//call ready quiz item END
			
			$(".btnCallStudQuizResult").click(function(){
			callStudentQuizResultIndividually();
		});
		function callStudentQuizResultIndividually(){
		//alert("callStudentQuizResultIndividually");
			//what we need 
			//stud_id
			//lesson_id
			//ajax request START
			var studIdOnSessionStorage = window.sessionStorage.getItem("stud_id");
			var lessonIdOnSessionStorage = window.sessionStorage.getItem("lessonIdOncallLessonByLevel");
			//alert("need1 ="+studIdOnSessionStorage);
			//alert("need2 ="+lessonIdOnSessionStorage);
			$(".removeStudentQuizResultIndividually").remove();
			$(".removeStudentQuizResultIndividuallyReport").remove();
					$.ajax({
						url: "call_functions_jquery_ajax/call_student_quiz_result_individually.php",
						type: "GET",
						data: {"studId":studIdOnSessionStorage,"lessonId":lessonIdOnSessionStorage},
						dataType: "json",
						success: function(lesson){
							//alert("success etu");
							var noOfItemCustom = 0;
							for(var i=0;i<lesson.length;i++){
								noOfItemCustom++;
								$("#studentQuizResultIndividually").append(
								"<tr class='removeStudentQuizResultIndividually'>"+
									"<td class='hidden'>"+lesson[i].json_fld1+ "</td>"+//stud_quiz_res_id
									"<td>"+lesson[i].json_fld2+ "</td>"+//stud_quiz_res_date_taken
									"<td class='hidden'>"+lesson[i].json_fld3+ "</td>"+//stud_quiz_res_attempt_no
									"<td>"+noOfItemCustom+"</td>"+//noOfItemCustom
									"<td>"+lesson[i].json_fld4+ "</td>"+//stud_quiz_res_no_of_items
									"<td>"+lesson[i].json_fld5+ "</td>"+//stud_quiz_res_correct
									"<td class='hidden'>"+lesson[i].json_fld6+ "</td>"+//stud_quiz_res_wrong
									"<td class='hidden'>"+lesson[i].json_fld7+ "</td>"+//stud_quiz_res_status_id
									"<td>"+lesson[i].resultName+ "</td>"+//resultName
									"<td class='hidden'>"+lesson[i].json_fld8+ "</td>"+//stud_id
									"<td class='hidden'>"+lesson[i].json_fld9+ "</td>"+//lesson_id
								"</tr>"
								 );
								 
								 $("#studentQuizResultIndividuallyReport").append(
								"<tr class='removeStudentQuizResultIndividuallyReport'>"+
									
									"<td>"+lesson[i].json_fld2+ "</td>"+//stud_quiz_res_date_taken
									"<td>"+noOfItemCustom+"</td>"+//noOfItemCustom
									"<td>"+lesson[i].json_fld4+ "</td>"+//stud_quiz_res_no_of_items
									"<td>"+lesson[i].json_fld5+ "</td>"+//stud_quiz_res_correct
									"<td>"+lesson[i].resultName+ "</td>"+//resultName
								"</tr>"
								 );
							}
							
						
						},fail: function(lesson){
							alert("fail etu"+lesson);
						},error: function(lesson){
							alert("error etu"+lesson);
						}
					});
				//ajax request END
		
		}//callStudentQuizResultIndividually END
			/* ADMIN PANEL custom animations START*/
			$("#btn-masterlist-stud").click(function(){
		
				location.reload(true);
				$("#container-masterlist-stud").show();
				$("#container-addnew-stud").hide();
			});
			$("#btn-addnew-stud").click(function(){
				$("#container-masterlist-stud").hide();
				$("#container-addnew-stud").show();
			});
			
			$("#btn-masterlist-subject-co").click(function(){
				location.reload(true);
				$("#container-masterlist-subject-co").show();
				$("#container-addnew-subject-co").hide();
			});
			$("#btn-addnew-subject-co").click(function(){
				$("#container-masterlist-subject-co").hide();
				$("#container-addnew-subject-co").show();
			});
			$("#btn-masterlist-it-staff").click(function(){
				location.reload(true);	
				$("#container-masterlist-it-staff").show();
				$("#container-addnew-it-staff").hide();
			});
			$("#btn-addnew-it-staff").click(function(){
				$("#container-masterlist-it-staff").hide();
				$("#container-addnew-it-staff").show();
			});
			
			
			
			/* ADMIN PANEL custom animations END*/
			
			//hide .contentAndNavTreeContainer for IT Staff START
			
			if($(".subject_id_tgl").val() == ""){
				$(".contentAndNavTreeContainer").hide();
			}else{
				$(".contentAndNavTreeContainer").show();
			}//hide .contentAndNavTreeContainer for IT Staff END
//-------------------------------------------------------FUNCTIONs END --------------------------------------------------
			//callStudentQuizResultIndividually START
			
			
			//pdf createTor START
			
			//pdf createTor END
		
	});// on $(document).ready END
	
	
	</script>
<!-- tech team script END-->