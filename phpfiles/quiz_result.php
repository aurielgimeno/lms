<?php
	include("../includes/config.php");
	session_start();
	$studId = $_SESSION["stud_id"];
	$lessonId = $_GET["lessonId"];
	$date = date('Y-m-d H:i:s');
	$items = $_GET["noItems"];
	$score = $_GET["correct"];
	$stats = $_GET["status"];
	$wrong = $items - $score;
	if($stats == "Failed"){
		$stats = 2;
	}else{
		$stats = 1;
	}

	$query="INSERT INTO tbl_student_quiz_result
		(stud_quiz_res_date_taken,
		stud_quiz_res_attempt_no,
		stud_quiz_result_no_of_items,
		stud_quiz_res_correct, 
		stud_quiz_res_wrong, 
		quiz_result_status_id, 
		stud_id, 
		lesson_id) 
		VALUES 
		('$date',
		'0',
		'$items',
		'$score',
		'$wrong',
		'$stats',
		'$studId',
		'$lessonId')";
	$result = mysqli_query($conn,$query) or die (mysqli_error($conn));
	if($result){
		$return = "success";
	}else{
		$return = "failed";
	}
	echo json_encode($return);
?>
