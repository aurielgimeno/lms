<?php
	include("../includes/config.php");
	session_start();
	
	$rqiQuestion = ucwords(strtolower($_GET["rqiQuestion"]));
	$rqiItemA = $_GET["rqiItemA"];
	$rqiItemB = $_GET["rqiItemB"];
	$rqiItemC = $_GET["rqiItemC"];
	$rqiItemD = $_GET["rqiItemD"];
	$rqiItemCorrect = $_GET["hiddenCorrectAnswer"];
	$readyQuizID = $_GET["readyQuizId"];
	
	$query="INSERT INTO tbl_ready_quiz_item
		(ready_quiz_item_id, 
		ready_quiz_item_question, 
		ready_quiz_item_a, 
		ready_quiz_item_b, 
		ready_quiz_item_c, 
		ready_quiz_item_d, 
		ready_quiz_item_correct_answer, 
		ready_quiz_id, 
		ready_quiz_item_timer)
		VALUES 
		('',
		'$rqiQuestion',
		'$rqiItemA',
		'$rqiItemB',
		'$rqiItemC',
		'$rqiItemD',
		'$rqiItemCorrect',
		'$readyQuizID',
		'15')";
	$result = mysqli_query($conn,$query) or die (mysqli_error($conn));
	/** bypass account verification for the meantime */
	if($result){
		$return = "success";
	}else{
		$return = "not success";
	}
	echo $_GET['callback']."(".json_encode(array("return"=>$return)).");";
	
?>