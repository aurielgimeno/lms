<?php
	include("../includes/config.php");
	
	$quizID = $_GET["rquizID"];
	
	$query="SELECT * FROM tbl_ready_quiz_item WHERE ready_quiz_item_id = $quizID";
	$result = mysqli_query($conn,$query) or die (mysqli_error($conn));
	
	$return = array();
	while($row = mysqli_fetch_array($result))
	{
	   $return[] = array(
		  'question' => $row["ready_quiz_item_question"],
		  'choice1' => $row["ready_quiz_item_a"],
		  'choice2' => $row["ready_quiz_item_b"],
		  'choice3' => $row["ready_quiz_item_c"],
		  'choice4' => $row["ready_quiz_item_d"],
		  'answer' => $row["ready_quiz_item_correct_answer"],
		  'qID'=> $quizID
	   );
	}
	
	echo json_encode($return);
?>