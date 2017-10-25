<?php
	include("../includes/config.php");
	
	$raw_quiz_id = $_GET["raw_quiz_id"];
	$raw_quiz_filename = $_GET["raw_quiz_filename"];
	
	$query="DELETE from tbl_raw_quiz WHERE raw_quiz_id = $raw_quiz_id";
	$result = mysqli_query($conn,$query) or die (mysqli_error($conn));
	if($result){
		$return = "success";
		unlink("../upload/raw_quiz/$raw_quiz_filename");
	}else{
		$return = "not";
	}
	
	echo ($return);
?>