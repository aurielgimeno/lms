<?php
	include("../includes/config.php");
	session_start();
	$readyQuizItemIdForDelete = $_GET["readyQuizItemIdForDelete"];
	
	$query="DELETE from tbl_ready_quiz_item WHERE ready_quiz_item_id = $readyQuizItemIdForDelete";
	$result = mysqli_query($conn,$query) or die (mysqli_error($conn));
	if($result){
		$return = "success";
		//unlink("../upload/raw_quiz/$raw_quiz_filename");
	}else{
		$return = "not";
	}
	
	echo json_encode($return);
?>