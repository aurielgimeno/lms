<?php
	session_start();
	include "includes/config.php";
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/nav-bar.css" />
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jq.js"></script>
<script type="text/javascript" src="js/nav-bar.js"></script>	
	
	
	
	<script type="text/javascript">
		$(document).ready(function(){
			$(".hideOnload").children().hide();
			$(".lessonSpan").click(function(){
				var a = $(this).children("#testVal").val();
				alert(a);
			});
			//select subject first START
			var subjectID = "";
			subjectID = $("#subjects").val();
			alert("subject ID ="+subjectID);
			$("#subjects").change(function(){
				var a =$(this).val();
				subjectID = a;
				alert(subjectID);
			});
			//select subject first END
			
			//month Quarter onClick START
			var monthQuarterId = "";
			
			
			$(".monthQuarterSpan").click(function(){
				
				//get the id of selecter month Quarter
				var a = $(this).children(".hiddenMonthQuarter").val();
				$("#monthQua").val("month quarter"+a);
				monthQuarterId = a;
				$("#monthQuarter").text("Month Quarter ID = "+monthQuarterId);
				//remove the current table rows
				$(".lessonRemove").remove();
				
				//ajax request START
				$.ajax({
					url: "call_functions_jquery_ajax/call_lesson.php",
					type: "GET",
					data: {"subjectID":subjectID,"mqID":monthQuarterid},
					dataType: "json",
					success: function(lesson){
						for(var i=0;i<lesson.length;i++){
							$('#result').append(
							'<tr class="lessonRemove"><td><input class="kit" type="text" value="'+lesson[i].json_fld1+ '" /></td><td>'+lesson[i].json_fld2+ '</td><td>'+lesson[i].json_fld3+ '</td><td>'+lesson[i].json_fld4+ '</td><td>'+lesson[i].json_fld5+ '</td></tr>'
							 );
						}
					}
				});
				//ajax request END
			
			});//month Quarter onClick END
			
		
		
		//choosing level kelangan meron ng laman ung monthQuarterId START
			var levelID = "";
			var lessonID = "";
			$(".levelBox").click(function(){
				var a = $(this).attr("id");
				levelID = a;
				alert("this "+ a);
				$(".lessonByIDRemove").remove();
				//ajax request START
				$.ajax({
					url: "call_functions_jquery_ajax/call_lesson_by_level.php",
					type: "GET",
					data: {"subjectID":subjectID,"mqID":monthQuarterId,"levelID":levelID},
					dataType: "json",
					success: function(lesson){
						for(var i=0;i<lesson.length;i++){
							
							$('#lessonList').append(
							'<tr class="lessonByIDRemove"><td><input class="kit" type="text" value="'+lesson[i].json_fld1+ '" /></td><td>'+lesson[i].json_fld2+ '</td><td>'+lesson[i].json_fld3+ '</td><td>'+lesson[i].json_fld4+ '</td><td>'+lesson[i].json_fld5+ '</td></tr>'
							);
							lessonID = lesson[0].json_fld1;
							
						}
					}
				});
				//ajax request END
				
			});
			
		//choosing level kelangan meron ng laman ung monthQuarterId END
		
			//select lectures START
			$("#lecture").click(function(){
				alert("Lesson ID = "+lessonID);
				$(".lectureRemove").remove();
					//ajax request START
					$.ajax({
						url: "call_functions_jquery_ajax/call_lecture.php",
						type: "GET",
						data: {"lessonID":lessonID},
						dataType: "json",
						success: function(lesson){
							for(var i=0;i<lesson.length;i++){
								
								$('#lectureList').append(
									'<tr class="lectureRemove"><td><input class="kit" type="text" value="'+lesson[i].json_fld1+ '" /></td><td>'+lesson[i].json_fld2+ '</td><td>'+lesson[i].json_fld3+ '</td><td>'+lesson[i].json_fld4+ '</td><td>'+lesson[i].json_fld5+ '</td></tr>'
								
								);
							}
						}
					});
					//ajax request END
			});
			//select lectures END
			
			
			//select raw quiz START
			$("#rawQuiz").click(function(){
				alert("Lesson ID ="+lessonID);
				$(".rawQuizRemove").remove();
					//ajax request START
					$.ajax({
						url: "call_functions_jquery_ajax/call_raw_quiz.php",
						type: "GET",
						data: {"lessonID":lessonID},
						dataType: "json",
						success: function(lesson){
							for(var i=0;i<lesson.length;i++){
								
								$('#rawQuizList').append(
									'<tr class="rawQuizRemove"><td><input class="kit" type="text" value="'+lesson[i].json_fld1+ '" /></td><td>'+lesson[i].json_fld2+ '</td><td>'+lesson[i].json_fld3+ '</td><td>'+lesson[i].json_fld4+ '</td><td>'+lesson[i].json_fld5+ '</td></tr>'
								
								);
							}
						}
					});
					//ajax request END
			});
			//select raw quiz END
			
			//select ready quiz START
			$("#readyQuiz").click(function(){
				alert(lessonID);
				$(".readyQuizRemove").remove();
					//ajax request START
					$.ajax({
						url: "call_functions_jquery_ajax/call_ready_quiz.php",
						type: "GET",
						data: {"lessonID":lessonID},
						dataType: "json",
						success: function(lesson){
							for(var i=0;i<lesson.length;i++){
								
								$('#readyQuizList').append(
									'<tr class="readyQuizRemove"><td><input class="kit" type="text" value="'+lesson[i].json_fld1+ '" /></td><td>'+lesson[i].json_fld2+ '</td><td>'+lesson[i].json_fld3+ '</td><td>'+lesson[i].json_fld4+ '</td><td>'+lesson[i].json_fld5+ '</td></tr>'
								
								);
							}
						}
					});
					//ajax request END
			});
			//select ready quiz END

		});
	</script>

	<style type="text/css">
		.container{
			position:relative;
			background:gray;
			padding:10px;
			display:block;
		}
		.levelBox{
			position:relative;
			display:inline-block;
			min-height:100px;
			min-width:100px;
			margin:10px;
			background:#dedede;
			text-align:center;
		}
		
	</style>
</head>
<body>
	<h2>Select Subject</h2>
	<select name="" id="subjects">
		<option value="1">subject 1</option>
		<option value="2">subject 2</option>
		<option value="3">subject 3</option>
		<option value="4">subject 4</option>
		<option value="5">subject 5</option>
	</select>
	<table id="result" border="1">
		<tr>
			<th>Lesson ID</th>
			<th>Level id</th>
			<th>Subject ID</th>
			<th>Month Quarter</th>
			<th>SY ID</th>
		</tr>
	</table>
	<input type="button" value="Test Label" id="testLabel" />
	<a href="" id="lele"></a>
	<label for="">Under what School Year</label> <input type="text" name="" id="sy" /><br />
	<label for="">Under what Month</label><input type="text" name="" id="month" /><br />
	<label for="">Under what Quarter</label><input type="text" name="" id="monthQua" /><br />
	<label for="">Under what Lesson</label><input type="text" name="" id="lesson" /><br />
	<h1>Nav bar test</h1>
	
	
	<div class="row col-lg-8" style="border:2px;">
		<h1>Content</h1>
		<h1 id="monthQuarter">Month Quarter ID </h1>
		<div class="container">
			<div class="levelBox" id="1"><span>Level 1</span></div>
			<div class="levelBox" id="2"><span>Level 2</span></div>
			<div class="levelBox" id="3"><span>Level 3</span></div>
			<div class="levelBox" id="4"><span>Level 4</span></div>
		</div>
		
		<table id="lessonList" border="1">
		<tr>
			<th>Lesson ID</th>
			<th>Level id</th>
			<th>Subject ID</th>
			<th>Month Quarter</th>
			<th>SY ID</th>
		</tr>
		</table>
		
		<div>
			<input type="button" id="lecture" value="Reviewers/Lectures" />
			<input type="button" id="rawQuiz" value="Raw Quiz" />
			<input type="button" id="readyQuiz" value="Ready Quiz" /><br />
			<div>
				<h3>Reviewers/Lectures , Raw Quiz , Ready Quiz</h3>
				<table id="lectureList" border="1">
					<tr>
						<th>LECTURES</th>
					</tr>
					<tr>
						<th>Lesson ID</th>
						<th>Level id</th>
						<th>Subject ID</th>
						<th>Month Quarter</th>
						<th>SY ID</th>
					</tr>
				</table>
				
				<table id="rawQuizList" border="1">
					<tr>
						<th>Raw Quiz List</th>
					</tr>
					<tr>
						<th>Lesson ID</th>
						<th>Level id</th>
						<th>Subject ID</th>
						<th>Month Quarter</th>
						<th>SY ID</th>
					</tr>
				</table>
				
				<table id="readyQuizList" border="1">
					<tr>
						<th>Ready Quiz List</th>
					</tr>
					<tr>
						<th>Lesson ID</th>
						<th>Level id</th>
						<th>Subject ID</th>
						<th>Month Quarter</th>
						<th>SY ID</th>
					</tr>
				</table>
				
				
			</div>
		</div>
	</div>
	
	<div class="tree well row col-lg-4">
	<h3>School year</h3>
	<ul><!--for school_year -->
		<?php 
			//set subject_id for different subject navigation
			$_SESSION['subject_id'] = 1;
			$subj_id = $_SESSION['subject_id'];
			$query= "SELECT * from tbl_school_year";
				$result = mysqli_query($conn,$query) or die (mysqli_error($conn));
				while($row = mysqli_fetch_array($result)){
					echo "<li class='schoolYear'><span><i class='icon-calendar'></i>$row[sy_start] - $row[sy_end]</span>";
			
					//for months
					echo "<ul class='hideOnload'>";
						$query1 = "SELECT * from tbl_month";
						$result1 = mysqli_query($conn,$query1) or die (mysqli_error($conn));
						while($row1 = mysqli_fetch_array($result1)){
							echo "<li class='month'>
									<span>
										<input type='hidden' name='' class='hiddenMonth' value='$row1[month_id]' />
										<i class='icon-calendar'></i>$row1[month_name]
									</span>";
								//for months_quarter
								echo "<ul class='hideOnload' >";
								$query2 = "SELECT * from tbl_month_quarter where month_id = $row1[month_id] and sy_id = $row[sy_id]"; 
								$result2 = mysqli_query($conn,$query2) or die (mysqli_error($conn));
								while($row2 = mysqli_fetch_array($result2)){
									
									echo "<li class='mqParent' >
									
									<span class='monthQuarterSpan'>
										<input type='hidden' name='' class='hiddenMonthQuarter' value='$row2[month_quarter_id]' />
										<i class='icon-calendar'></i>$row2[month_quarterd_date_start] - $row2[month_quarterd_date_end]
									</span>";
									
									//for level
									echo "<ul class='hideOnload'>";
									$query3 = "SELECT * from tbl_level";
									$result3 = mysqli_query($conn,$query3) or die (mysqli_error($conn));
									while($row3 = mysqli_fetch_array($result3)){
										echo "<li class='level'><span><i class=''></i>$row3[level_name] </span>";
										
										//for lesson
										echo "<ul class='hideOnload'>";
										$query4 = "SELECT * from tbl_lesson where 
											level_id = $row3[level_id] and 
											subj_id = $subj_id and
											month_quarter_id = $row2[month_quarter_id] and
											sy_id = $row[sy_id]";
										$result4 = mysqli_query($conn,$query4) or die (mysqli_error($conn));
										while($row4 = mysqli_fetch_array($result4)){
											echo "<li class='lesson' ><span class='lessonSpan'><input type='hidden' class='hiddenLesson' value='$row4[lesson_id]' /> <i></i>Lesson id = $row4[lesson_id] </span>";
											
											//for lecture
											
											echo "<ul class='hideOnload'>";
												echo "<li class='lectureTitle'><span><i></i>Lecture</span>";
													echo "<ul>";
														$query5 = "SELECT * from tbl_lecture where lesson_id = $row4[lesson_id]";
														$result5 = mysqli_query($conn,$query5) or die (mysqli_error($conn));
														while($row5 = mysqli_fetch_array($result5)){
															echo "<li class='lecture'><a href=''>$row5[lec_title]</a>";
														}
													echo "</ul>";
												echo "</li>";
											echo "</ul>";
											//for lecture END
											
											
											//for raw_quiz
											echo "<ul class='hideOnload'>";
												echo "<li class='rawQuizTitle'><span><i></i>Raw quiz</span>";
													echo "<ul>";
														$query6 = "SELECT * from tbl_raw_quiz where lesson_id = $row4[lesson_id]";
														$result6 = mysqli_query($conn,$query6) or die (mysqli_error($conn));
														while($row6 = mysqli_fetch_array($result6)){
															echo "<li class='rawQuiz'>$row6[raw_quiz_id] , $row6[raw_quiz_title]";
														}
													echo "</ul>";
												echo "</li>";
											echo "</ul>";
											//for raw_quiz END
											
											//for ready_quiz
											echo "<ul class='hideOnload'>";
												echo "<li class='readyQuizTitle'><span><i>Ready Quiz</i></span>";
													echo "<ul>";
														$query7 = "SELECT * from tbl_ready_quiz where lesson_id = $row4[lesson_id]";
														$result7 = mysqli_query($conn,$query7) or die (mysqli_error($conn));
														while($row7 = mysqli_fetch_array($result7)){
															echo "<li  class='readyQuiz'>$row7[ready_quiz_id] , $row7[ready_quiz_title]</li>";
														}
													echo "</ul>";
												echo "</li>";
											echo "</li>";
											echo "</ul>";
											//for ready_quiz END
											
										}
										echo "</li>";//end li for MQ
										echo "</ul>";
										//for lesson END
									
									}
									
									echo "</li>";//end li for level
									echo "</ul>";
									//for level END
								}

								echo "</li>";//end li for MQ
								echo "</ul>";
								//for months_quarter END
							}
						
						echo "</li>";
					echo "</ul>";//for months END
				}
				echo"</li>"//end li for SY
		?>
		
	</ul><!-- school year END -->
	</div>
	
	
	
	
	<div class="row col-lg-12">
		<form action="upload_file.php" method="post"enctype="multipart/form-data">
			<!--
				lec_title
			-->
			<label for="file">Filename:</label>
			<input type="file" name="file" id="file"><br>
			<input type="submit" name="uploadLec" value="Submit">
		</form>
	</div>
	
	
</body>
</html>