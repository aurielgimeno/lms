<?php
	include("../includes/config.php");
	session_start();
	$readyQuizTitle = $_GET["readyQuizTitle"];
	$readyQuizDateUploaded = date('Y-m-d H:i:s');
	$readyQuizRemarks = $_GET["readyQuizRemarks"];
	$it_id = $_SESSION["it_id"];
	$lesson_id = $_GET["lesson_id"];
	
	$query="INSERT INTO tbl_ready_quiz (ready_quiz_title,ready_quiz_date_uploaded,ready_quiz_remarks,it_id,lesson_id) VALUES('".$readyQuizTitle."','".$readyQuizDateUploaded."','".$readyQuizRemarks."','".$it_id."','".$lesson_id."')";
	$result = mysqli_query($conn,$query) or die (mysqli_error($conn));
	/** bypass account verification for the meantime */
	if($result){
		$return = "success";
	}else{
		$return = "not success";
	}
	echo $_GET['callback']."(".json_encode(array("return"=>$return)).");";
	
?>