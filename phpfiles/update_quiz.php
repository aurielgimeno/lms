<?php
	include("../includes/config.php");
	$quizID = $_GET["rquizID"];
	$question = $_GET["rqiQuestion2"];
	$choiceA = $_GET["rqiItemA2"];
	$choiceB = $_GET["rqiItemB2"];
	$choiceC = $_GET["rqiItemC2"];
	$choiceD = $_GET["rqiItemD2"];
	$answer = $_GET["hiddenCorrectAnswer2"];
	$message = "";
$return = array();
$query = "UPDATE tbl_ready_quiz_item SET ready_quiz_item_question='$question',ready_quiz_item_a='$choiceA',ready_quiz_item_b='$choiceB',ready_quiz_item_c='$choiceC',ready_quiz_item_d='$choiceD',ready_quiz_item_correct_answer='$answer' WHERE ready_quiz_item_id ='$quizID'";
$result = mysqli_query($conn,$query) or die (mysqli_error($conn));
if($result){
	$message = "Success";
}else{
	$message = "Fail";
}
	echo $_GET['callback']."(".json_encode(array("umessage"=>$message)).");";
?>	